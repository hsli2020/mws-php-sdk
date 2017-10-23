<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * GetFulfillmentOrderResponse
 *
 * Properties:
 * <ul>
 * <li>GetFulfillmentOrderResult: GetFulfillmentOrderResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetFulfillmentOrderResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetFulfillmentOrderResult' => array('FieldValue' => null, 'FieldType' => 'GetFulfillmentOrderResult'),
            'ResponseMetadata'          => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'    => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetFulfillmentOrderResult property.
     *
     * @return GetFulfillmentOrderResult GetFulfillmentOrderResult.
     */
    public function getGetFulfillmentOrderResult()
    {
        return $this->_fields['GetFulfillmentOrderResult']['FieldValue'];
    }

    /**
     * Set the value of the GetFulfillmentOrderResult property.
     *
     * @param GetFulfillmentOrderResult getFulfillmentOrderResult
     * @return this instance
     */
    public function setGetFulfillmentOrderResult($value)
    {
        $this->_fields['GetFulfillmentOrderResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetFulfillmentOrderResult is set.
     *
     * @return true if GetFulfillmentOrderResult is set.
     */
    public function isSetGetFulfillmentOrderResult()
    {
        return !is_null($this->_fields['GetFulfillmentOrderResult']['FieldValue']);
    }

    /**
     * Set the value of GetFulfillmentOrderResult, return this.
     *
     * @param getFulfillmentOrderResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetFulfillmentOrderResult($value)
    {
        $this->setGetFulfillmentOrderResult($value);
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
     * Construct GetFulfillmentOrderResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetFulfillmentOrderResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetFulfillmentOrderResponse']");
        if ($response->length == 1) {
            return new GetFulfillmentOrderResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetFulfillmentOrderResponse from provided XML.
                                  Make sure that GetFulfillmentOrderResponse is a root element");
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
        $xml .= "<GetFulfillmentOrderResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentOrderResponse>";
        return $xml;
    }
}
