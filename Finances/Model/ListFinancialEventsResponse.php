<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ListFinancialEventsResponse
 *
 * Properties:
 * <ul>
 * <li>ListFinancialEventsResult: ListFinancialEventsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListFinancialEventsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListFinancialEventsResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListFinancialEventsResult'),
            'ResponseMetadata'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'    => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventsResult property.
     *
     * @return ListFinancialEventsResult ListFinancialEventsResult.
     */
    public function getListFinancialEventsResult()
    {
        return $this->_fields['ListFinancialEventsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventsResult property.
     *
     * @param ListFinancialEventsResult listFinancialEventsResult
     * @return this instance
     */
    public function setListFinancialEventsResult($value)
    {
        $this->_fields['ListFinancialEventsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListFinancialEventsResult is set.
     *
     * @return true if ListFinancialEventsResult is set.
     */
    public function isSetListFinancialEventsResult()
    {
        return !is_null($this->_fields['ListFinancialEventsResult']['FieldValue']);
    }

    /**
     * Set the value of ListFinancialEventsResult, return this.
     *
     * @param listFinancialEventsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListFinancialEventsResult($value)
    {
        $this->setListFinancialEventsResult($value);
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
     * Construct ListFinancialEventsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListFinancialEventsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventsResponse']");
        if ($response->length == 1) {
            return new ListFinancialEventsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListFinancialEventsResponse from provided XML.
                                  Make sure that ListFinancialEventsResponse is a root element");
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
        $xml .= "<ListFinancialEventsResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventsResponse>";
        return $xml;
    }
}
