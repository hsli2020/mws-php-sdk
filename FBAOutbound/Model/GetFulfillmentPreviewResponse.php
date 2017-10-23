<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * GetFulfillmentPreviewResponse
 *
 * Properties:
 * <ul>
 * <li>GetFulfillmentPreviewResult: GetFulfillmentPreviewResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetFulfillmentPreviewResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetFulfillmentPreviewResult' => array('FieldValue' => null, 'FieldType' => 'GetFulfillmentPreviewResult'),
            'ResponseMetadata'            => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'      => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetFulfillmentPreviewResult property.
     *
     * @return GetFulfillmentPreviewResult GetFulfillmentPreviewResult.
     */
    public function getGetFulfillmentPreviewResult()
    {
        return $this->_fields['GetFulfillmentPreviewResult']['FieldValue'];
    }

    /**
     * Set the value of the GetFulfillmentPreviewResult property.
     *
     * @param GetFulfillmentPreviewResult getFulfillmentPreviewResult
     * @return this instance
     */
    public function setGetFulfillmentPreviewResult($value)
    {
        $this->_fields['GetFulfillmentPreviewResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetFulfillmentPreviewResult is set.
     *
     * @return true if GetFulfillmentPreviewResult is set.
     */
    public function isSetGetFulfillmentPreviewResult()
    {
        return !is_null($this->_fields['GetFulfillmentPreviewResult']['FieldValue']);
    }

    /**
     * Set the value of GetFulfillmentPreviewResult, return this.
     *
     * @param getFulfillmentPreviewResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetFulfillmentPreviewResult($value)
    {
        $this->setGetFulfillmentPreviewResult($value);
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
     * Construct GetFulfillmentPreviewResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetFulfillmentPreviewResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetFulfillmentPreviewResponse']");
        if ($response->length == 1) {
            return new GetFulfillmentPreviewResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetFulfillmentPreviewResponse from provided XML.
                                  Make sure that GetFulfillmentPreviewResponse is a root element");
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
        $xml .= "<GetFulfillmentPreviewResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFulfillmentPreviewResponse>";
        return $xml;
    }
}
