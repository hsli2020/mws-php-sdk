<?php

namespace Amazon\MWS\Recommendations\Model;


/**
 * GetLastUpdatedTimeForRecommendationsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetLastUpdatedTimeForRecommendationsResult: GetLastUpdatedTimeForRecommendationsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetLastUpdatedTimeForRecommendationsResponse extends MWSRecommendationsSectionService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetLastUpdatedTimeForRecommendationsResult' => array('FieldValue' => null, 'FieldType' => 'GetLastUpdatedTimeForRecommendationsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetLastUpdatedTimeForRecommendationsResult property.
     *
     * @return GetLastUpdatedTimeForRecommendationsResult GetLastUpdatedTimeForRecommendationsResult.
     */
    public function getGetLastUpdatedTimeForRecommendationsResult()
    {
        return $this->_fields['GetLastUpdatedTimeForRecommendationsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLastUpdatedTimeForRecommendationsResult property.
     *
     * @param GetLastUpdatedTimeForRecommendationsResult getLastUpdatedTimeForRecommendationsResult
     * @return this instance
     */
    public function setGetLastUpdatedTimeForRecommendationsResult($value)
    {
        $this->_fields['GetLastUpdatedTimeForRecommendationsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetLastUpdatedTimeForRecommendationsResult is set.
     *
     * @return true if GetLastUpdatedTimeForRecommendationsResult is set.
     */
    public function isSetGetLastUpdatedTimeForRecommendationsResult()
    {
                return !is_null($this->_fields['GetLastUpdatedTimeForRecommendationsResult']['FieldValue']);
            }

    /**
     * Set the value of GetLastUpdatedTimeForRecommendationsResult, return this.
     *
     * @param getLastUpdatedTimeForRecommendationsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetLastUpdatedTimeForRecommendationsResult($value)
    {
        $this->setGetLastUpdatedTimeForRecommendationsResult($value);
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
     * Construct GetLastUpdatedTimeForRecommendationsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetLastUpdatedTimeForRecommendationsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLastUpdatedTimeForRecommendationsResponse']");
        if ($response->length == 1) {
            return new GetLastUpdatedTimeForRecommendationsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetLastUpdatedTimeForRecommendationsResponse from provided XML.
                                  Make sure that GetLastUpdatedTimeForRecommendationsResponse is a root element");
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
        $xml .= "<GetLastUpdatedTimeForRecommendationsResponse xmlns=\"https://mws.amazonservices.com/Recommendations/2013-04-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLastUpdatedTimeForRecommendationsResponse>";
        return $xml;
    }

}
