<?php

namespace Amazon\MWS\FBAOutbound\Model;


/**
 * ListAllFulfillmentOrdersResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListAllFulfillmentOrdersResult: ListAllFulfillmentOrdersResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class ListAllFulfillmentOrdersResponse extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListAllFulfillmentOrdersResult' => array('FieldValue' => null, 'FieldType' => 'ListAllFulfillmentOrdersResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListAllFulfillmentOrdersResult property.
     *
     * @return ListAllFulfillmentOrdersResult ListAllFulfillmentOrdersResult.
     */
    public function getListAllFulfillmentOrdersResult()
    {
        return $this->_fields['ListAllFulfillmentOrdersResult']['FieldValue'];
    }

    /**
     * Set the value of the ListAllFulfillmentOrdersResult property.
     *
     * @param ListAllFulfillmentOrdersResult listAllFulfillmentOrdersResult
     * @return this instance
     */
    public function setListAllFulfillmentOrdersResult($value)
    {
        $this->_fields['ListAllFulfillmentOrdersResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListAllFulfillmentOrdersResult is set.
     *
     * @return true if ListAllFulfillmentOrdersResult is set.
     */
    public function isSetListAllFulfillmentOrdersResult()
    {
                return !is_null($this->_fields['ListAllFulfillmentOrdersResult']['FieldValue']);
            }

    /**
     * Set the value of ListAllFulfillmentOrdersResult, return this.
     *
     * @param listAllFulfillmentOrdersResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListAllFulfillmentOrdersResult($value)
    {
        $this->setListAllFulfillmentOrdersResult($value);
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
     * Construct ListAllFulfillmentOrdersResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListAllFulfillmentOrdersResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListAllFulfillmentOrdersResponse']");
        if ($response->length == 1) {
            return new ListAllFulfillmentOrdersResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListAllFulfillmentOrdersResponse from provided XML.
                                  Make sure that ListAllFulfillmentOrdersResponse is a root element");
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
        $xml .= "<ListAllFulfillmentOrdersResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListAllFulfillmentOrdersResponse>";
        return $xml;
    }

}
