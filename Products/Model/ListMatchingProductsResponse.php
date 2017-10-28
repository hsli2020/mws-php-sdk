<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * ListMatchingProductsResponse
 *
 * Properties:
 * <ul>
 * <li>ListMatchingProductsResult: ListMatchingProductsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListMatchingProductsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListMatchingProductsResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListMatchingProductsResult'),
            'ResponseMetadata'           => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'     => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListMatchingProductsResult property.
     *
     * @return ListMatchingProductsResult ListMatchingProductsResult.
     */
    public function getListMatchingProductsResult()
    {
        return $this->_fields['ListMatchingProductsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListMatchingProductsResult property.
     *
     * @param ListMatchingProductsResult listMatchingProductsResult
     * @return this instance
     */
    public function setListMatchingProductsResult($value)
    {
        $this->_fields['ListMatchingProductsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListMatchingProductsResult is set.
     *
     * @return true if ListMatchingProductsResult is set.
     */
    public function isSetListMatchingProductsResult()
    {
        return !is_null($this->_fields['ListMatchingProductsResult']['FieldValue']);
    }

    /**
     * Set the value of ListMatchingProductsResult, return this.
     *
     * @param listMatchingProductsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListMatchingProductsResult($value)
    {
        $this->setListMatchingProductsResult($value);
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
     * Construct ListMatchingProductsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListMatchingProductsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMatchingProductsResponse']");
        if ($response->length == 1) {
            return new ListMatchingProductsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListMatchingProductsResponse from provided XML.
                                  Make sure that ListMatchingProductsResponse is a root element");
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
        $xml .= "<ListMatchingProductsResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMatchingProductsResponse>";
        return $xml;
    }
}
