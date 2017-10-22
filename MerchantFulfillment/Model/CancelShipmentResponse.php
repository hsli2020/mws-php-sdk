<?php

namespace Amazon\MWS\MerchantFulfillment\Model;


/**
 * CancelShipmentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CancelShipmentResult: CancelShipmentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class CancelShipmentResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CancelShipmentResult' => array('FieldValue' => null, 'FieldType' => 'CancelShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CancelShipmentResult property.
     *
     * @return CancelShipmentResult CancelShipmentResult.
     */
    public function getCancelShipmentResult()
    {
        return $this->_fields['CancelShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the CancelShipmentResult property.
     *
     * @param CancelShipmentResult cancelShipmentResult
     * @return this instance
     */
    public function setCancelShipmentResult($value)
    {
        $this->_fields['CancelShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CancelShipmentResult is set.
     *
     * @return true if CancelShipmentResult is set.
     */
    public function isSetCancelShipmentResult()
    {
                return !is_null($this->_fields['CancelShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of CancelShipmentResult, return this.
     *
     * @param cancelShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCancelShipmentResult($value)
    {
        $this->setCancelShipmentResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct CancelShipmentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return CancelShipmentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CancelShipmentResponse']");
        if ($response->length == 1) {
            return new CancelShipmentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct CancelShipmentResponse from provided XML.
                                  Make sure that CancelShipmentResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<CancelShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelShipmentResponse>";
        return $xml;
    }

}
