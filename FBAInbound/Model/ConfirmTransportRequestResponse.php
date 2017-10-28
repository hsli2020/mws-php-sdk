<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * ConfirmTransportRequestResponse
 *
 * Properties:
 * <ul>
 * <li>ConfirmTransportRequestResult: ConfirmTransportRequestResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ConfirmTransportRequestResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ConfirmTransportRequestResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ConfirmTransportRequestResult'),
            'ResponseMetadata'              => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'        => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ConfirmTransportRequestResult property.
     *
     * @return ConfirmTransportRequestResult ConfirmTransportRequestResult.
     */
    public function getConfirmTransportRequestResult()
    {
        return $this->_fields['ConfirmTransportRequestResult']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmTransportRequestResult property.
     *
     * @param ConfirmTransportRequestResult confirmTransportRequestResult
     * @return this instance
     */
    public function setConfirmTransportRequestResult($value)
    {
        $this->_fields['ConfirmTransportRequestResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmTransportRequestResult is set.
     *
     * @return true if ConfirmTransportRequestResult is set.
     */
    public function isSetConfirmTransportRequestResult()
    {
        return !is_null($this->_fields['ConfirmTransportRequestResult']['FieldValue']);
    }

    /**
     * Set the value of ConfirmTransportRequestResult, return this.
     *
     * @param confirmTransportRequestResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConfirmTransportRequestResult($value)
    {
        $this->setConfirmTransportRequestResult($value);
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
     * Construct ConfirmTransportRequestResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ConfirmTransportRequestResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ConfirmTransportRequestResponse']");
        if ($response->length == 1) {
            return new ConfirmTransportRequestResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ConfirmTransportRequestResponse from provided XML.
                                  Make sure that ConfirmTransportRequestResponse is a root element");
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
        $xml .= "<ConfirmTransportRequestResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ConfirmTransportRequestResponse>";
        return $xml;
    }
}
