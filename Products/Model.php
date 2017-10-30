<?php

namespace Amazon\MWS\Products;

use Amazon\MWS\Common\Model as BaseModel;

/**
 * Products\Model - base class for all model classes
 */
abstract class Model extends BaseModel
{
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
    private function _fromDOMElement(DOMElement $dom)
    {
        $xpath = new DOMXPath($dom->ownerDocument);

        foreach ($this->_fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (is_array($fieldType)) {
                if ($fieldType[0] == "object") {
                    $elements = $dom->childNodes;
                    for ($i = 0 ; $i < $elements->length; $i++) {
                        $this->_fields[$fieldName]['FieldValue'][] = $elements->item($i);
                    }
                } else if ($this->_isComplexType($fieldType[0])) {
                    if (isset($field['ListMemberName'])) {
                       $memberName = $field['ListMemberName'];
                       $elements = $xpath->query("./*[local-name()='$fieldName']/*[local-name()='$memberName']", $dom);
                    } else {
                       $elements = $xpath->query("./*[local-name()='$fieldName']", $dom);
                    }
                    if ($elements->length >= 1) {
                        foreach ($elements as $element) {
                            $this->_fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
                        }
                    }
                } else {
                    if (isset($field['ListMemberName'])) {
                        $memberName = $field['ListMemberName'];
                        $elements = $xpath->query("./*[local-name()='$fieldName']/*[local-name()='$memberName']", $dom);
                    } else {
                        $elements = $xpath->query("./*[local-name()='$fieldName']", $dom);
                    }
                    if ($elements->length >= 1) {
                        foreach ($elements as $element) {
                            $text = $xpath->query('./text()', $element);
                            $this->_fields[$fieldName]['FieldValue'][] = $text->item(0)->data;
                        }
                    }
                }
            } else {
                if ($this->_isComplexType($fieldType)) {
                    $elements = $xpath->query("./*[local-name()='$fieldName']", $dom);
                    if ($elements->length == 1) {
                        $this->_fields[$fieldName]['FieldValue'] = new $fieldType($elements->item(0));
                    }
                } else {
                    if ($fieldType[0] == "@") {
                        $attribute = $xpath->query("./@$fieldName", $dom);
                        if ($attribute->length == 1) {
                            $this->_fields[$fieldName]['FieldValue'] = $attribute->item(0)->nodeValue;
                            if (isset ($this->_fields['Value'])) {
                                $parentNode = $attribute->item(0)->parentNode;
                                $this->_fields['Value']['FieldValue'] = $parentNode->nodeValue;
                            }
                        }
                    } else {
                        $element = $xpath->query("./*[local-name()='$fieldName']/text()", $dom);
                        if ($element->length == 1) {
                            $this->_fields[$fieldName]['FieldValue'] = $element->item(0)->data;
                        }
                    }

                    $attribute = $xpath->query("./@$fieldName", $dom);
                    if ($attribute->length == 1) {
                        $this->_fields[$fieldName]['FieldValue'] = $attribute->item(0)->nodeValue;
                        if (isset ($this->_fields['Value'])) {
                            $parentNode = $attribute->item(0)->parentNode;
                            $this->_fields['Value']['FieldValue'] = $parentNode->nodeValue;
                        }
                    }
                }
            }
        }
    }

    /**
     * Construct from Associative Array
     *
     *
     * @param array $array associative array to construct from
     */
    private function _fromAssociativeArray(array $array)
    {
        foreach ($this->_fields as $fieldName => $field) {
            $fieldType = $field['FieldType'];
            if (is_array($fieldType)) {
                if ($this->_isComplexType($fieldType[0])) {
                    if (array_key_exists($fieldName, $array)) {
                        $elements = $array[$fieldName];
                        if (!$this->_isNumericArray($elements)) {
                            $elements =  array($elements);
                        }
                        if (count ($elements) >= 1) {
                            foreach ($elements as $element) {
                                $this->_fields[$fieldName]['FieldValue'][] = new $fieldType[0]($element);
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
                                $this->_fields[$fieldName]['FieldValue'][] = $element;
                            }
                        }
                    }
                }
            } else {
                 if ($this->_isComplexType($fieldType)) {
                    if (array_key_exists($fieldName, $array)) {
                        $this->_fields[$fieldName]['FieldValue'] = new $fieldType($array[$fieldName]);
                    }
                 } else {
                    if (array_key_exists($fieldName, $array)) {
                        $this->_fields[$fieldName]['FieldValue'] = $array[$fieldName];
                    }
                 }
            }
        }
    }

    /**
     * Convert to query parameters suitable for POSTing.
     * @return array of query parameters
     */
    public function toQueryParameterArray()
    {
        return $this->_toQueryParameterArray("");
    }

    protected function _toQueryParameterArray($prefix)
    {
        $arr = array();
        foreach($this->_fields as $fieldName => $fieldAttrs) {
            $fieldType = $fieldAttrs['FieldType'];
            $fieldValue = $fieldAttrs['FieldValue'];
            $newPrefix = $prefix . $fieldName . '.';
            $currentArr = $this->__toQueryParameterArray($newPrefix, $fieldType, $fieldValue, $fieldAttrs);
            $arr = array_merge($arr, $currentArr);
        }
        return $arr;
    }

    private function __toQueryParameterArray($prefix, $fieldType, $fieldValue, $fieldAttrs)
    {
        $arr = array();
        if (is_array($fieldType)) {
            if (isset($fieldAttrs['ListMemberName'])) {
                $listMemberName = $fieldAttrs['ListMemberName'];
                $itemPrefix = $prefix . $listMemberName . '.';
            } else {
                $itemPrefix = $prefix;
            }

            for ($i = 1; $i <= count($fieldValue); $i++) {
                $indexedPrefix = $itemPrefix . $i . '.';
                $memberType = $fieldType[0];
                $arr = array_merge($arr,
                    $this->__toQueryParameterArray($indexedPrefix,
                    $memberType, $fieldValue[$i - 1], null));
            }

        } else if ($this->_isComplexType($fieldType)) {
            // Struct
            if (isset($fieldValue)) {
                $arr = array_merge($arr, $fieldValue->_toQueryParameterArray($prefix));
            }
        } else {
            // Primitive
            if ($fieldValue!==null && $fieldValue!=="") {
                if ($fieldType=='bool') {
                    $fieldValue = ($fieldValue)?'true':'false';
                }
                $arr[rtrim($prefix, '.')] = $fieldValue;
            }
        }
        return $arr;
    }

    /**
     * XML fragment representation of this object
     * Note, name of the root determined by caller
     * This fragment returns inner fields representation only
     * @return string XML fragment for this object
     */
    protected function _toXMLFragment()
    {
        $xml = "";
        foreach ($this->_fields as $fieldName => $field) {
            $fieldValue = $field['FieldValue'];
            if (!is_null($fieldValue) && $field['FieldType'] != "ResponseHeaderMetadata") {
                $fieldType = $field['FieldType'];
                if (is_array($fieldType)) {
                    if ($fieldType[0] == "object") {
                        foreach ($fieldValue as $item) {
                            $newDoc = new DOMDocument();
                            $importedNode = $newDoc->importNode($item, true);
                            $newDoc->appendChild($importedNode);
                            $xmlStr = $newDoc->saveXML();
                            $xmlStr = substr($xmlStr, strpos($xmlStr, "?>") + 2);
                            $xml .= trim($xmlStr);
                        }
                    } else if ($this->_isComplexType($fieldType[0])) {
                        if (isset($field['ListMemberName'])) {
                            $memberName = $field['ListMemberName'];
                            $xml .= "<$fieldName>";
                            foreach ($fieldValue as $item) {
                                $xml .= "<$memberName>";
                                $xml .= $item->_toXMLFragment();
                                $xml .= "</$memberName>";
                            }
                            $xml .= "</$fieldName>";
                        } else {
                            foreach ($fieldValue as $item) {
                                $xml .= "<$fieldName";
                                $xml .= $item->_getAttributes();
                                $xml .= ">";
                                $xml .= $item->_toXMLFragment();
                                $xml .= "</$fieldName>";
                            }
                        }
                    } else {
                        if (isset($field['ListMemberName'])) {
                            $memberName = $field['ListMemberName'];
                            $xml .= "<$fieldName>";
                            foreach ($fieldValue as $item) {
                                $xml .= "<$memberName>";
                                $xml .= $this->_escapeXML($item);
                                $xml .= "</$memberName>";
                            }
                            $xml .= "</$fieldName>";
                        } else {
                            foreach ($fieldValue as $item) {
                                $xml .= "<$fieldName>";
                                $xml .= $this->_escapeXML($item);
                                $xml .= "</$fieldName>";
                            }
                        }
                    }
                } else {
                    if ($this->_isComplexType($fieldType)) {
                        $xml .= "<$fieldName";
                        $xml .= $fieldValue->_getAttributes();
                        $xml .= ">";
                        $xml .= $fieldValue->_toXMLFragment();
                        $xml .= "</$fieldName>";
                    } else if ($fieldType[0] != "@") {
                        $xml .= "<$fieldName>";
                        $xml .= $this->_escapeXML($fieldValue);
                        $xml .= "</$fieldName>";
                    }
                }
            }
        }
        return $xml;
    }

}
