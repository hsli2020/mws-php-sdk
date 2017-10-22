<?php

namespace Amazon\MWS\MerchantFulfillment\Model;


/**
 * GetShipmentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetShipmentResult: GetShipmentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetShipmentResponse extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetShipmentResult' => array('FieldValue' => null, 'FieldType' => 'GetShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetShipmentResult property.
     *
     * @return GetShipmentResult GetShipmentResult.
     */
    public function getGetShipmentResult()
    {
        return $this->_fields['GetShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the GetShipmentResult property.
     *
     * @param GetShipmentResult getShipmentResult
     * @return this instance
     */
    public function setGetShipmentResult($value)
    {
        $this->_fields['GetShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetShipmentResult is set.
     *
     * @return true if GetShipmentResult is set.
     */
    public function isSetGetShipmentResult()
    {
                return !is_null($this->_fields['GetShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of GetShipmentResult, return this.
     *
     * @param getShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetShipmentResult($value)
    {
        $this->setGetShipmentResult($value);
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
     * Construct GetShipmentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetShipmentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetShipmentResponse']");
        if ($response->length == 1) {
            return new GetShipmentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetShipmentResponse from provided XML.
                                  Make sure that GetShipmentResponse is a root element");
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
        $xml .= "<GetShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetShipmentResponse>";
        return $xml;
    }

}
