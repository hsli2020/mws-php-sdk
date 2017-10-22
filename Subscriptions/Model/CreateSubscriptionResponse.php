<?php

namespace Amazon\MWS\Subscriptions\Model;

/**
 * CreateSubscriptionResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CreateSubscriptionResult: CreateSubscriptionResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class CreateSubscriptionResponse extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CreateSubscriptionResult' => array('FieldValue' => null, 'FieldType' => 'CreateSubscriptionResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CreateSubscriptionResult property.
     *
     * @return CreateSubscriptionResult CreateSubscriptionResult.
     */
    public function getCreateSubscriptionResult()
    {
        return $this->_fields['CreateSubscriptionResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateSubscriptionResult property.
     *
     * @param CreateSubscriptionResult createSubscriptionResult
     * @return this instance
     */
    public function setCreateSubscriptionResult($value)
    {
        $this->_fields['CreateSubscriptionResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateSubscriptionResult is set.
     *
     * @return true if CreateSubscriptionResult is set.
     */
    public function isSetCreateSubscriptionResult()
    {
                return !is_null($this->_fields['CreateSubscriptionResult']['FieldValue']);
            }

    /**
     * Set the value of CreateSubscriptionResult, return this.
     *
     * @param createSubscriptionResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateSubscriptionResult($value)
    {
        $this->setCreateSubscriptionResult($value);
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
     * Construct CreateSubscriptionResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return CreateSubscriptionResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateSubscriptionResponse']");
        if ($response->length == 1) {
            return new CreateSubscriptionResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct CreateSubscriptionResponse from provided XML.
                                  Make sure that CreateSubscriptionResponse is a root element");
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
        $xml .= "<CreateSubscriptionResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateSubscriptionResponse>";
        return $xml;
    }

}
