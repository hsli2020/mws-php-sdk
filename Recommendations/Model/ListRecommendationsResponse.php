<?php

namespace Amazon\MWS\Recommendations\Model;

use Amazon\MWS\Recommendations\Model;

/**
 * ListRecommendationsResponse
 *
 * Properties:
 * <ul>
 * <li>ListRecommendationsResult: ListRecommendationsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListRecommendationsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListRecommendationsResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListRecommendationsResult'),
            'ResponseMetadata'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'    => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListRecommendationsResult property.
     *
     * @return ListRecommendationsResult ListRecommendationsResult.
     */
    public function getListRecommendationsResult()
    {
        return $this->_fields['ListRecommendationsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListRecommendationsResult property.
     *
     * @param ListRecommendationsResult listRecommendationsResult
     * @return this instance
     */
    public function setListRecommendationsResult($value)
    {
        $this->_fields['ListRecommendationsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListRecommendationsResult is set.
     *
     * @return true if ListRecommendationsResult is set.
     */
    public function isSetListRecommendationsResult()
    {
        return !is_null($this->_fields['ListRecommendationsResult']['FieldValue']);
    }

    /**
     * Set the value of ListRecommendationsResult, return this.
     *
     * @param listRecommendationsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListRecommendationsResult($value)
    {
        $this->setListRecommendationsResult($value);
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
     * Construct ListRecommendationsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListRecommendationsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRecommendationsResponse']");
        if ($response->length == 1) {
            return new ListRecommendationsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListRecommendationsResponse from provided XML.
                                  Make sure that ListRecommendationsResponse is a root element");
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
        $xml .= "<ListRecommendationsResponse xmlns=\"https://mws.amazonservices.com/Recommendations/2013-04-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRecommendationsResponse>";
        return $xml;
    }
}
