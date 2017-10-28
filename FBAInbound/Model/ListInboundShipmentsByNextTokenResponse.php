<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * ListInboundShipmentsByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>ListInboundShipmentsByNextTokenResult: ListInboundShipmentsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListInboundShipmentsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListInboundShipmentsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListInboundShipmentsByNextTokenResult'),
            'ResponseMetadata'                      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'                => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListInboundShipmentsByNextTokenResult property.
     *
     * @return ListInboundShipmentsByNextTokenResult ListInboundShipmentsByNextTokenResult.
     */
    public function getListInboundShipmentsByNextTokenResult()
    {
        return $this->_fields['ListInboundShipmentsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListInboundShipmentsByNextTokenResult property.
     *
     * @param ListInboundShipmentsByNextTokenResult listInboundShipmentsByNextTokenResult
     * @return this instance
     */
    public function setListInboundShipmentsByNextTokenResult($value)
    {
        $this->_fields['ListInboundShipmentsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListInboundShipmentsByNextTokenResult is set.
     *
     * @return true if ListInboundShipmentsByNextTokenResult is set.
     */
    public function isSetListInboundShipmentsByNextTokenResult()
    {
        return !is_null($this->_fields['ListInboundShipmentsByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListInboundShipmentsByNextTokenResult, return this.
     *
     * @param listInboundShipmentsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListInboundShipmentsByNextTokenResult($value)
    {
        $this->setListInboundShipmentsByNextTokenResult($value);
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
     * Construct ListInboundShipmentsByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListInboundShipmentsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListInboundShipmentsByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListInboundShipmentsByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListInboundShipmentsByNextTokenResponse from provided XML.
                                  Make sure that ListInboundShipmentsByNextTokenResponse is a root element");
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
        $xml .= "<ListInboundShipmentsByNextTokenResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListInboundShipmentsByNextTokenResponse>";
        return $xml;
    }
}
