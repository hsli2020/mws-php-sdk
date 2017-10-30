<?php

namespace Amazon\MWS\Feeds;

use Amazon\MWS\Common\Model as BaseModel;

/**
 * Feeds\Model - base class for all model classes
 */
abstract class Model extends BaseModel
{
    /**
     * XML fragment representation of this object
     * Note, name of the root determined by caller
     * This fragment returns inner fields representation only
     * @return string XML fragment for this object
     */
    protected function toXMLFragment()
    {
        $xml = "";
        foreach ($this->fields as $fieldName => $field) {
            $fieldValue = $field['FieldValue'];
            if (!is_null($fieldValue)) {
                $fieldType = $field['FieldType'];
                if (is_array($fieldType)) {
                    if ($this->_isComplexType($fieldType[0])) {
                        foreach ($fieldValue as $item) {
                            $xml .= "<$fieldName>";
                            $xml .= $item->toXMLFragment();
                            $xml .= "</$fieldName>";
                        }
                    } else {
                        foreach ($fieldValue as $item) {
                            $xml .= "<$fieldName>";
                            $xml .= $this->_escapeXML($item);
                            $xml .= "</$fieldName>";
                        }
                    }
                } else {
                    if ($this->_isComplexType($fieldType)) {
                        $xml .= "<$fieldName>";
                        $xml .= $fieldValue->toXMLFragment();
                        $xml .= "</$fieldName>";
                    } else {
                        $xml .= "<$fieldName>";
                        $xml .= $this->_escapeXML($fieldValue);
                        $xml .= "</$fieldName>";
                    }
                }
            }
        }
        return $xml;
    }

    /**
     * Construct from DOMElement
     *
     * This function iterates over object fields and queries XML
     * for corresponding tag value. If query succeeds, value extracted
     * from xml, and field value properly constructed based on field type.
     *
     * Field types defined as arrays always constructed as arrays,
     * even if XML contains a single element - to make sure that
     * data structure is predictable, and no is_array checks are
     * required.
     *
     * @param DOMElement $dom XML element to construct from
     */
    private function fromDOMElement(DOMElement $dom)
    {
        $xpath = new DOMXPath($dom->ownerDocument);
        $xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');

        foreach ($this->fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (is_array($fieldType)) {
                if ($this->_isComplexType($fieldType[0])) {
                    $elements = $xpath->query("./a:$fieldName", $dom);
                    if ($elements->length >= 1) {
                        foreach ($elements as $element) {
                            $this->fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
                        }
                    }
                } else {
                    $elements = $xpath->query("./a:$fieldName", $dom);
                    if ($elements->length >= 1) {
                        foreach ($elements as $element) {
                            $text = $xpath->query('./text()', $element);
                            $this->fields[$fieldName]['FieldValue'][] = $text->item(0)->data;
                        }
                    }
                }
            } else {
                if ($this->_isComplexType($fieldType)) {
                    $elements = $xpath->query("./a:$fieldName", $dom);
                    if ($elements->length == 1) {
                        $this->fields[$fieldName]['FieldValue'] = new $fieldType($elements->item(0));
                    }
                } else {
                    $element = $xpath->query("./a:$fieldName/text()", $dom);
                    $data = null;
                    if ($element->length == 1) {
                    	switch($this->fields[$fieldName]['FieldType']) {
                    		case 'DateTime':
                    			$data = new DateTime($element->item(0)->data,
                    				new DateTimeZone('UTC'));
                    			break;
                    		case 'bool':
                    			$value = $element->item(0)->data;
                    			$data = $value === 'true' ? true : false;
                    			break;
                    		default:
                    			$data = $element->item(0)->data;
                    			break;
                    	}
                        $this->fields[$fieldName]['FieldValue'] = $data;
                    }
                }
            }
        }
    }

    /**
     * Construct from Associative Array
     *
     * @param array $array associative array to construct from
     */
    private function fromAssociativeArray(array $array)
    {
        foreach ($this->fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (is_array($fieldType)) {
                if ($this->_isComplexType($fieldType[0])) {
                    if (array_key_exists($fieldName, $array)) {
                        $elements = $array[$fieldName];
                        if (!$this->_isNumericArray($elements)) {
                            $elements =  array($elements);
                        }
                        if (count($elements) >= 1) {
                            foreach ($elements as $element) {
                                $this->fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
                            }
                        }
                    }
                } else {
                    if (array_key_exists($fieldName, $array)) {
                        $elements = $array[$fieldName];
                        if (!$this->_isNumericArray($elements)) {
                            $elements =  array($elements);
                        }
                        if (count ($elements) >= 1) {
                            foreach ($elements as $element) {
                                $this->fields[$fieldName]['FieldValue'][] = $element;
                            }
                        }
                    }
                }
            } else {
                if ($this->_isComplexType($fieldType)) {
                    if (array_key_exists($fieldName, $array)) {
                        $this->fields[$fieldName]['FieldValue'] = new $fieldType($array[$fieldName]);
                    }
                } else {
                    if (array_key_exists($fieldName, $array)) {
                        $this->fields[$fieldName]['FieldValue'] = $array[$fieldName];
                    }
                }
            }
        }
    }

}
