<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetUniquePackageLabelsResponse
 *
 * Properties:
 * <ul>
 * <li>GetUniquePackageLabelsResult: GetUniquePackageLabelsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetUniquePackageLabelsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetUniquePackageLabelsResult' => array('FieldValue' => null, 'FieldType' => 'GetUniquePackageLabelsResult'),
            'ResponseMetadata'             => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'       => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetUniquePackageLabelsResult property.
     *
     * @return GetUniquePackageLabelsResult GetUniquePackageLabelsResult.
     */
    public function getGetUniquePackageLabelsResult()
    {
        return $this->_fields['GetUniquePackageLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetUniquePackageLabelsResult property.
     *
     * @param GetUniquePackageLabelsResult getUniquePackageLabelsResult
     * @return this instance
     */
    public function setGetUniquePackageLabelsResult($value)
    {
        $this->_fields['GetUniquePackageLabelsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetUniquePackageLabelsResult is set.
     *
     * @return true if GetUniquePackageLabelsResult is set.
     */
    public function isSetGetUniquePackageLabelsResult()
    {
        return !is_null($this->_fields['GetUniquePackageLabelsResult']['FieldValue']);
    }

    /**
     * Set the value of GetUniquePackageLabelsResult, return this.
     *
     * @param getUniquePackageLabelsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetUniquePackageLabelsResult($value)
    {
        $this->setGetUniquePackageLabelsResult($value);
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
     * Construct GetUniquePackageLabelsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetUniquePackageLabelsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetUniquePackageLabelsResponse']");
        if ($response->length == 1) {
            return new GetUniquePackageLabelsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetUniquePackageLabelsResponse from provided XML.
                                  Make sure that GetUniquePackageLabelsResponse is a root element");
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
        $xml .= "<GetUniquePackageLabelsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetUniquePackageLabelsResponse>";
        return $xml;
    }
}
