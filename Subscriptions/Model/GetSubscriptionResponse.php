<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * GetSubscriptionResponse
 *
 * Properties:
 * <ul>
 * <li>GetSubscriptionResult: GetSubscriptionResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetSubscriptionResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetSubscriptionResult'  => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetSubscriptionResult'),
            'ResponseMetadata'       => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetSubscriptionResult property.
     *
     * @return GetSubscriptionResult GetSubscriptionResult.
     */
    public function getGetSubscriptionResult()
    {
        return $this->_fields['GetSubscriptionResult']['FieldValue'];
    }

    /**
     * Set the value of the GetSubscriptionResult property.
     *
     * @param GetSubscriptionResult getSubscriptionResult
     * @return this instance
     */
    public function setGetSubscriptionResult($value)
    {
        $this->_fields['GetSubscriptionResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetSubscriptionResult is set.
     *
     * @return true if GetSubscriptionResult is set.
     */
    public function isSetGetSubscriptionResult()
    {
        return !is_null($this->_fields['GetSubscriptionResult']['FieldValue']);
    }

    /**
     * Set the value of GetSubscriptionResult, return this.
     *
     * @param getSubscriptionResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetSubscriptionResult($value)
    {
        $this->setGetSubscriptionResult($value);
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
     * Construct GetSubscriptionResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetSubscriptionResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetSubscriptionResponse']");
        if ($response->length == 1) {
            return new GetSubscriptionResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetSubscriptionResponse from provided XML.
                                  Make sure that GetSubscriptionResponse is a root element");
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
        $xml .= "<GetSubscriptionResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetSubscriptionResponse>";
        return $xml;
    }
}
