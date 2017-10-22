<?php

namespace Amazon\MWS\Subscriptions\Model;

/**
 * RegisterDestinationResponse
 *
 * Properties:
 * <ul>
 *
 * <li>RegisterDestinationResult: RegisterDestinationResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class RegisterDestinationResponse extends MWSSubscriptionsService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'RegisterDestinationResult' => array('FieldValue' => null, 'FieldType' => 'RegisterDestinationResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the RegisterDestinationResult property.
     *
     * @return RegisterDestinationResult RegisterDestinationResult.
     */
    public function getRegisterDestinationResult()
    {
        return $this->_fields['RegisterDestinationResult']['FieldValue'];
    }

    /**
     * Set the value of the RegisterDestinationResult property.
     *
     * @param RegisterDestinationResult registerDestinationResult
     * @return this instance
     */
    public function setRegisterDestinationResult($value)
    {
        $this->_fields['RegisterDestinationResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RegisterDestinationResult is set.
     *
     * @return true if RegisterDestinationResult is set.
     */
    public function isSetRegisterDestinationResult()
    {
                return !is_null($this->_fields['RegisterDestinationResult']['FieldValue']);
            }

    /**
     * Set the value of RegisterDestinationResult, return this.
     *
     * @param registerDestinationResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRegisterDestinationResult($value)
    {
        $this->setRegisterDestinationResult($value);
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
     * Construct RegisterDestinationResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return RegisterDestinationResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='RegisterDestinationResponse']");
        if ($response->length == 1) {
            return new RegisterDestinationResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct RegisterDestinationResponse from provided XML.
                                  Make sure that RegisterDestinationResponse is a root element");
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
        $xml .= "<RegisterDestinationResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</RegisterDestinationResponse>";
        return $xml;
    }

}
