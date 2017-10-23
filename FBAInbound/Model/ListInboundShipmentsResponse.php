<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * ListInboundShipmentsResponse
 *
 * Properties:
 * <ul>
 * <li>ListInboundShipmentsResult: ListInboundShipmentsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListInboundShipmentsResponse extends FBAInboundServiceMWS_Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListInboundShipmentsResult' => array('FieldValue' => null, 'FieldType' => 'ListInboundShipmentsResult'),
            'ResponseMetadata'           => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'     => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListInboundShipmentsResult property.
     *
     * @return ListInboundShipmentsResult ListInboundShipmentsResult.
     */
    public function getListInboundShipmentsResult()
    {
        return $this->_fields['ListInboundShipmentsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListInboundShipmentsResult property.
     *
     * @param ListInboundShipmentsResult listInboundShipmentsResult
     * @return this instance
     */
    public function setListInboundShipmentsResult($value)
    {
        $this->_fields['ListInboundShipmentsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListInboundShipmentsResult is set.
     *
     * @return true if ListInboundShipmentsResult is set.
     */
    public function isSetListInboundShipmentsResult()
    {
        return !is_null($this->_fields['ListInboundShipmentsResult']['FieldValue']);
    }

    /**
     * Set the value of ListInboundShipmentsResult, return this.
     *
     * @param listInboundShipmentsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListInboundShipmentsResult($value)
    {
        $this->setListInboundShipmentsResult($value);
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
     * Construct ListInboundShipmentsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListInboundShipmentsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInboundShipmentsResponse']");
        if ($response->length == 1) {
            return new ListInboundShipmentsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListInboundShipmentsResponse from provided XML.
                                  Make sure that ListInboundShipmentsResponse is a root element");
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
        $xml .= "<ListInboundShipmentsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInboundShipmentsResponse>";
        return $xml;
    }
}
