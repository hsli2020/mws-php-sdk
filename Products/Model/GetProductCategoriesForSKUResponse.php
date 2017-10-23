<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * GetProductCategoriesForSKUResponse
 *
 * Properties:
 * <ul>
 * <li>GetProductCategoriesForSKUResult: GetProductCategoriesForSKUResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetProductCategoriesForSKUResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetProductCategoriesForSKUResult' => array('FieldValue' => null, 'FieldType' => 'GetProductCategoriesForSKUResult'),
            'ResponseMetadata'                 => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'           => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetProductCategoriesForSKUResult property.
     *
     * @return GetProductCategoriesForSKUResult GetProductCategoriesForSKUResult.
     */
    public function getGetProductCategoriesForSKUResult()
    {
        return $this->_fields['GetProductCategoriesForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetProductCategoriesForSKUResult property.
     *
     * @param GetProductCategoriesForSKUResult getProductCategoriesForSKUResult
     * @return this instance
     */
    public function setGetProductCategoriesForSKUResult($value)
    {
        $this->_fields['GetProductCategoriesForSKUResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetProductCategoriesForSKUResult is set.
     *
     * @return true if GetProductCategoriesForSKUResult is set.
     */
    public function isSetGetProductCategoriesForSKUResult()
    {
        return !is_null($this->_fields['GetProductCategoriesForSKUResult']['FieldValue']);
    }

    /**
     * Set the value of GetProductCategoriesForSKUResult, return this.
     *
     * @param getProductCategoriesForSKUResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetProductCategoriesForSKUResult($value)
    {
        $this->setGetProductCategoriesForSKUResult($value);
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
     * Construct GetProductCategoriesForSKUResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetProductCategoriesForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetProductCategoriesForSKUResponse']");
        if ($response->length == 1) {
            return new GetProductCategoriesForSKUResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetProductCategoriesForSKUResponse from provided XML.
                                  Make sure that GetProductCategoriesForSKUResponse is a root element");
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
        $xml .= "<GetProductCategoriesForSKUResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetProductCategoriesForSKUResponse>";
        return $xml;
    }
}
