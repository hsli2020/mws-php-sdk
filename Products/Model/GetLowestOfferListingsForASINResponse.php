<?php

namespace Amazon\MWS\Products\Model;


/**
 * GetLowestOfferListingsForASINResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestOfferListingsForASINResult: array</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetLowestOfferListingsForASINResponse extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetLowestOfferListingsForASINResult' => array('FieldValue' => array(), 'FieldType' => array('GetLowestOfferListingsForASINResult')),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetLowestOfferListingsForASINResult property.
     *
     * @return List<GetLowestOfferListingsForASINResult> GetLowestOfferListingsForASINResult.
     */
    public function getGetLowestOfferListingsForASINResult()
    {
        if ($this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'] == null)
        {
            $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'] = array();
        }
        return $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestOfferListingsForASINResult property.
     *
     * @param array getLowestOfferListingsForASINResult
     * @return this instance
     */
    public function setGetLowestOfferListingsForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetLowestOfferListingsForASINResult.
     */
    public function unsetGetLowestOfferListingsForASINResult()
    {
        $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetLowestOfferListingsForASINResult is set.
     *
     * @return true if GetLowestOfferListingsForASINResult is set.
     */
    public function isSetGetLowestOfferListingsForASINResult()
    {
                return !empty($this->_fields['GetLowestOfferListingsForASINResult']['FieldValue']);
            }

    /**
     * Add values for GetLowestOfferListingsForASINResult, return this.
     *
     * @param getLowestOfferListingsForASINResult
     *             New values to add.
     *
     * @return This instance.
     */
    public function withGetLowestOfferListingsForASINResult()
    {
        foreach (func_get_args() as $GetLowestOfferListingsForASINResult)
        {
            $this->_fields['GetLowestOfferListingsForASINResult']['FieldValue'][] = $GetLowestOfferListingsForASINResult;
        }
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
     * Construct GetLowestOfferListingsForASINResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLowestOfferListingsForASINResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestOfferListingsForASINResponse']");
        if ($response->length == 1) {
            return new GetLowestOfferListingsForASINResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetLowestOfferListingsForASINResponse from provided XML.
                                  Make sure that GetLowestOfferListingsForASINResponse is a root element");
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
        $xml .= "<GetLowestOfferListingsForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLowestOfferListingsForASINResponse>";
        return $xml;
    }

}
