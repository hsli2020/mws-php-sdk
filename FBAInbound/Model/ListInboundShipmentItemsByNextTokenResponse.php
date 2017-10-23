<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * ListInboundShipmentItemsByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>ListInboundShipmentItemsByNextTokenResult: ListInboundShipmentItemsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListInboundShipmentItemsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListInboundShipmentItemsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'ListInboundShipmentItemsByNextTokenResult'),
            'ResponseMetadata'                          => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'                    => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListInboundShipmentItemsByNextTokenResult property.
     *
     * @return ListInboundShipmentItemsByNextTokenResult ListInboundShipmentItemsByNextTokenResult.
     */
    public function getListInboundShipmentItemsByNextTokenResult()
    {
        return $this->_fields['ListInboundShipmentItemsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListInboundShipmentItemsByNextTokenResult property.
     *
     * @param ListInboundShipmentItemsByNextTokenResult listInboundShipmentItemsByNextTokenResult
     * @return this instance
     */
    public function setListInboundShipmentItemsByNextTokenResult($value)
    {
        $this->_fields['ListInboundShipmentItemsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListInboundShipmentItemsByNextTokenResult is set.
     *
     * @return true if ListInboundShipmentItemsByNextTokenResult is set.
     */
    public function isSetListInboundShipmentItemsByNextTokenResult()
    {
        return !is_null($this->_fields['ListInboundShipmentItemsByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListInboundShipmentItemsByNextTokenResult, return this.
     *
     * @param listInboundShipmentItemsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListInboundShipmentItemsByNextTokenResult($value)
    {
        $this->setListInboundShipmentItemsByNextTokenResult($value);
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
     * Construct ListInboundShipmentItemsByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListInboundShipmentItemsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInboundShipmentItemsByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListInboundShipmentItemsByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListInboundShipmentItemsByNextTokenResponse from provided XML.
                                  Make sure that ListInboundShipmentItemsByNextTokenResponse is a root element");
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
        $xml .= "<ListInboundShipmentItemsByNextTokenResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInboundShipmentItemsByNextTokenResponse>";
        return $xml;
    }
}
