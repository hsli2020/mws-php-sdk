<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * GetMyFeesEstimateResponse
 *
 * Properties:
 * <ul>
 * <li>GetMyFeesEstimateResult: GetMyFeesEstimateResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetMyFeesEstimateResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetMyFeesEstimateResult' => array('FieldValue' => null, 'FieldType' => 'GetMyFeesEstimateResult'),
            'ResponseMetadata'        => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'  => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetMyFeesEstimateResult property.
     *
     * @return GetMyFeesEstimateResult GetMyFeesEstimateResult.
     */
    public function getGetMyFeesEstimateResult()
    {
        return $this->_fields['GetMyFeesEstimateResult']['FieldValue'];
    }

    /**
     * Set the value of the GetMyFeesEstimateResult property.
     *
     * @param GetMyFeesEstimateResult getMyFeesEstimateResult
     * @return this instance
     */
    public function setGetMyFeesEstimateResult($value)
    {
        $this->_fields['GetMyFeesEstimateResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetMyFeesEstimateResult is set.
     *
     * @return true if GetMyFeesEstimateResult is set.
     */
    public function isSetGetMyFeesEstimateResult()
    {
        return !is_null($this->_fields['GetMyFeesEstimateResult']['FieldValue']);
    }

    /**
     * Set the value of GetMyFeesEstimateResult, return this.
     *
     * @param getMyFeesEstimateResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetMyFeesEstimateResult($value)
    {
        $this->setGetMyFeesEstimateResult($value);
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
     * Construct GetMyFeesEstimateResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetMyFeesEstimateResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyFeesEstimateResponse']");
        if ($response->length == 1) {
            return new GetMyFeesEstimateResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetMyFeesEstimateResponse from provided XML.
                                  Make sure that GetMyFeesEstimateResponse is a root element");
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
        $xml .= "<GetMyFeesEstimateResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyFeesEstimateResponse>";
        return $xml;
    }
}
