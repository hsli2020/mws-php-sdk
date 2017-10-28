<?php

namespace Amazon\MWS\Orders\Model;

use Amazon\MWS\Orders\Model;

/**
 * ListOrderItemsResponse
 *
 * Properties:
 * <ul>
 * <li>ListOrderItemsResult: ListOrderItemsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListOrderItemsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListOrderItemsResult'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListOrderItemsResult'),
            'ResponseMetadata'       => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListOrderItemsResult property.
     *
     * @return ListOrderItemsResult ListOrderItemsResult.
     */
    public function getListOrderItemsResult()
    {
        return $this->_fields['ListOrderItemsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListOrderItemsResult property.
     *
     * @param ListOrderItemsResult listOrderItemsResult
     * @return this instance
     */
    public function setListOrderItemsResult($value)
    {
        $this->_fields['ListOrderItemsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListOrderItemsResult is set.
     *
     * @return true if ListOrderItemsResult is set.
     */
    public function isSetListOrderItemsResult()
    {
        return !is_null($this->_fields['ListOrderItemsResult']['FieldValue']);
    }

    /**
     * Set the value of ListOrderItemsResult, return this.
     *
     * @param listOrderItemsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListOrderItemsResult($value)
    {
        $this->setListOrderItemsResult($value);
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
     * Construct ListOrderItemsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListOrderItemsResponse
     */

    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrderItemsResponse']");
        if ($response->length == 1) {
            return new ListOrderItemsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListOrderItemsResponse from provided XML.
                                  Make sure that ListOrderItemsResponse is a root element");
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
        $xml .= "<ListOrderItemsResponse xmlns=\"https://mws.amazonservices.com/Orders/2013-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListOrderItemsResponse>";
        return $xml;
    }
}
