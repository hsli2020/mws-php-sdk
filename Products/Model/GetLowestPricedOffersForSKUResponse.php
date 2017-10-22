<?php

namespace Amazon\MWS\Products\Model;


/**
 * GetLowestPricedOffersForSKUResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestPricedOffersForSKUResult: GetLowestPricedOffersForSKUResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetLowestPricedOffersForSKUResponse extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetLowestPricedOffersForSKUResult' => array('FieldValue' => null, 'FieldType' => 'GetLowestPricedOffersForSKUResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestPricedOffersForSKUResult property.
     *
     * @return GetLowestPricedOffersForSKUResult GetLowestPricedOffersForSKUResult.
     */
    public function getGetLowestPricedOffersForSKUResult()
    {
        return $this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestPricedOffersForSKUResult property.
     *
     * @param GetLowestPricedOffersForSKUResult getLowestPricedOffersForSKUResult
     * @return this instance
     */
    public function setGetLowestPricedOffersForSKUResult($value)
    {
        $this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetLowestPricedOffersForSKUResult is set.
     *
     * @return true if GetLowestPricedOffersForSKUResult is set.
     */
    public function isSetGetLowestPricedOffersForSKUResult()
    {
                return !is_null($this->_fields['GetLowestPricedOffersForSKUResult']['FieldValue']);
            }

    /**
     * Set the value of GetLowestPricedOffersForSKUResult, return this.
     *
     * @param getLowestPricedOffersForSKUResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetLowestPricedOffersForSKUResult($value)
    {
        $this->setGetLowestPricedOffersForSKUResult($value);
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
     * Construct GetLowestPricedOffersForSKUResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLowestPricedOffersForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestPricedOffersForSKUResponse']");
        if ($response->length == 1) {
            return new GetLowestPricedOffersForSKUResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetLowestPricedOffersForSKUResponse from provided XML.
                                  Make sure that GetLowestPricedOffersForSKUResponse is a root element");
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
        $xml .= "<GetLowestPricedOffersForSKUResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLowestPricedOffersForSKUResponse>";
        return $xml;
    }

}
