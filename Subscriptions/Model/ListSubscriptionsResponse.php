<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * ListSubscriptionsResponse
 *
 * Properties:
 * <ul>
 * <li>ListSubscriptionsResult: ListSubscriptionsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListSubscriptionsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListSubscriptionsResult' => array('FieldValue' => null, 'FieldType' => 'ListSubscriptionsResult'),
            'ResponseMetadata'        => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'  => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListSubscriptionsResult property.
     *
     * @return ListSubscriptionsResult ListSubscriptionsResult.
     */
    public function getListSubscriptionsResult()
    {
        return $this->_fields['ListSubscriptionsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListSubscriptionsResult property.
     *
     * @param ListSubscriptionsResult listSubscriptionsResult
     * @return this instance
     */
    public function setListSubscriptionsResult($value)
    {
        $this->_fields['ListSubscriptionsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListSubscriptionsResult is set.
     *
     * @return true if ListSubscriptionsResult is set.
     */
    public function isSetListSubscriptionsResult()
    {
        return !is_null($this->_fields['ListSubscriptionsResult']['FieldValue']);
    }

    /**
     * Set the value of ListSubscriptionsResult, return this.
     *
     * @param listSubscriptionsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListSubscriptionsResult($value)
    {
        $this->setListSubscriptionsResult($value);
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
     * Construct ListSubscriptionsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListSubscriptionsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListSubscriptionsResponse']");
        if ($response->length == 1) {
            return new ListSubscriptionsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListSubscriptionsResponse from provided XML.
                                  Make sure that ListSubscriptionsResponse is a root element");
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
        $xml .= "<ListSubscriptionsResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListSubscriptionsResponse>";
        return $xml;
    }
}
