<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetTransportContentResponse
 *
 * Properties:
 * <ul>
 * <li>GetTransportContentResult: GetTransportContentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetTransportContentResponse extends Model
{
    public function __construct($data = null)
    {
    $this->_fields = array (
            'GetTransportContentResult' => array('FieldValue' => null, 'FieldType' => 'GetTransportContentResult'),
            'ResponseMetadata'          => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'    => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetTransportContentResult property.
     *
     * @return GetTransportContentResult GetTransportContentResult.
     */
    public function getGetTransportContentResult()
    {
        return $this->_fields['GetTransportContentResult']['FieldValue'];
    }

    /**
     * Set the value of the GetTransportContentResult property.
     *
     * @param GetTransportContentResult getTransportContentResult
     * @return this instance
     */
    public function setGetTransportContentResult($value)
    {
        $this->_fields['GetTransportContentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetTransportContentResult is set.
     *
     * @return true if GetTransportContentResult is set.
     */
    public function isSetGetTransportContentResult()
    {
        return !is_null($this->_fields['GetTransportContentResult']['FieldValue']);
    }

    /**
     * Set the value of GetTransportContentResult, return this.
     *
     * @param getTransportContentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetTransportContentResult($value)
    {
        $this->setGetTransportContentResult($value);
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
     * Construct GetTransportContentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetTransportContentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetTransportContentResponse']");
        if ($response->length == 1) {
            return new GetTransportContentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetTransportContentResponse from provided XML.
                                  Make sure that GetTransportContentResponse is a root element");
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
        $xml .= "<GetTransportContentResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetTransportContentResponse>";
        return $xml;
    }
}
