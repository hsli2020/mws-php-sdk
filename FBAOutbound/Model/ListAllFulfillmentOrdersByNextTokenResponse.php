<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * ListAllFulfillmentOrdersByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>ListAllFulfillmentOrdersByNextTokenResult: ListAllFulfillmentOrdersByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListAllFulfillmentOrdersByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListAllFulfillmentOrdersByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'ListAllFulfillmentOrdersByNextTokenResult'),
            'ResponseMetadata'                          => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'                    => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListAllFulfillmentOrdersByNextTokenResult property.
     *
     * @return ListAllFulfillmentOrdersByNextTokenResult ListAllFulfillmentOrdersByNextTokenResult.
     */
    public function getListAllFulfillmentOrdersByNextTokenResult()
    {
        return $this->_fields['ListAllFulfillmentOrdersByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListAllFulfillmentOrdersByNextTokenResult property.
     *
     * @param ListAllFulfillmentOrdersByNextTokenResult listAllFulfillmentOrdersByNextTokenResult
     * @return this instance
     */
    public function setListAllFulfillmentOrdersByNextTokenResult($value)
    {
        $this->_fields['ListAllFulfillmentOrdersByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListAllFulfillmentOrdersByNextTokenResult is set.
     *
     * @return true if ListAllFulfillmentOrdersByNextTokenResult is set.
     */
    public function isSetListAllFulfillmentOrdersByNextTokenResult()
    {
        return !is_null($this->_fields['ListAllFulfillmentOrdersByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListAllFulfillmentOrdersByNextTokenResult, return this.
     *
     * @param listAllFulfillmentOrdersByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListAllFulfillmentOrdersByNextTokenResult($value)
    {
        $this->setListAllFulfillmentOrdersByNextTokenResult($value);
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
     * Construct ListAllFulfillmentOrdersByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListAllFulfillmentOrdersByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListAllFulfillmentOrdersByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListAllFulfillmentOrdersByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListAllFulfillmentOrdersByNextTokenResponse from provided XML.
                                  Make sure that ListAllFulfillmentOrdersByNextTokenResponse is a root element");
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
        $xml .= "<ListAllFulfillmentOrdersByNextTokenResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListAllFulfillmentOrdersByNextTokenResponse>";
        return $xml;
    }
}
