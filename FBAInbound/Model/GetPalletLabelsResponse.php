<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetPalletLabelsResponse
 *
 * Properties:
 * <ul>
 * <li>GetPalletLabelsResult: GetPalletLabelsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetPalletLabelsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetPalletLabelsResult'  => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetPalletLabelsResult'),
            'ResponseMetadata'       => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetPalletLabelsResult property.
     *
     * @return GetPalletLabelsResult GetPalletLabelsResult.
     */
    public function getGetPalletLabelsResult()
    {
        return $this->_fields['GetPalletLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetPalletLabelsResult property.
     *
     * @param GetPalletLabelsResult getPalletLabelsResult
     * @return this instance
     */
    public function setGetPalletLabelsResult($value)
    {
        $this->_fields['GetPalletLabelsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetPalletLabelsResult is set.
     *
     * @return true if GetPalletLabelsResult is set.
     */
    public function isSetGetPalletLabelsResult()
    {
        return !is_null($this->_fields['GetPalletLabelsResult']['FieldValue']);
    }

    /**
     * Set the value of GetPalletLabelsResult, return this.
     *
     * @param getPalletLabelsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetPalletLabelsResult($value)
    {
        $this->setGetPalletLabelsResult($value);
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
     * Construct GetPalletLabelsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetPalletLabelsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetPalletLabelsResponse']");
        if ($response->length == 1) {
            return new GetPalletLabelsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetPalletLabelsResponse from provided XML.
                                  Make sure that GetPalletLabelsResponse is a root element");
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
        $xml .= "<GetPalletLabelsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetPalletLabelsResponse>";
        return $xml;
    }
}
