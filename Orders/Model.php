<?php

namespace Amazon\MWS\Orders;

use Amazon\MWS\Common\Model as BaseModel;

/**
 * Orders\Model - base class for all model classes
 */
abstract class Model extends BaseModel
{

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
