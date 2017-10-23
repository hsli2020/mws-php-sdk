<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * DeregisterDestinationResponse
 *
 * Properties:
 * <ul>
 * <li>DeregisterDestinationResult: DeregisterDestinationResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class DeregisterDestinationResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DeregisterDestinationResult' => array('FieldValue' => null, 'FieldType' => 'DeregisterDestinationResult'),
            'ResponseMetadata'            => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'      => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeregisterDestinationResult property.
     *
     * @return DeregisterDestinationResult DeregisterDestinationResult.
     */
    public function getDeregisterDestinationResult()
    {
        return $this->_fields['DeregisterDestinationResult']['FieldValue'];
    }

    /**
     * Set the value of the DeregisterDestinationResult property.
     *
     * @param DeregisterDestinationResult deregisterDestinationResult
     * @return this instance
     */
    public function setDeregisterDestinationResult($value)
    {
        $this->_fields['DeregisterDestinationResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeregisterDestinationResult is set.
     *
     * @return true if DeregisterDestinationResult is set.
     */
    public function isSetDeregisterDestinationResult()
    {
        return !is_null($this->_fields['DeregisterDestinationResult']['FieldValue']);
    }

    /**
     * Set the value of DeregisterDestinationResult, return this.
     *
     * @param deregisterDestinationResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeregisterDestinationResult($value)
    {
        $this->setDeregisterDestinationResult($value);
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
     * Construct DeregisterDestinationResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return DeregisterDestinationResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='DeregisterDestinationResponse']");
        if ($response->length == 1) {
            return new DeregisterDestinationResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct DeregisterDestinationResponse from provided XML.
                                  Make sure that DeregisterDestinationResponse is a root element");
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
        $xml .= "<DeregisterDestinationResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DeregisterDestinationResponse>";
        return $xml;
    }
}
