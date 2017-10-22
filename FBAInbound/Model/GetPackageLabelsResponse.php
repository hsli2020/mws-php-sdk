<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * GetPackageLabelsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetPackageLabelsResult: GetPackageLabelsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class GetPackageLabelsResponse extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'GetPackageLabelsResult' => array('FieldValue' => null, 'FieldType' => 'GetPackageLabelsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the GetPackageLabelsResult property.
     *
     * @return GetPackageLabelsResult GetPackageLabelsResult.
     */
    public function getGetPackageLabelsResult()
    {
        return $this->_fields['GetPackageLabelsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetPackageLabelsResult property.
     *
     * @param GetPackageLabelsResult getPackageLabelsResult
     * @return this instance
     */
    public function setGetPackageLabelsResult($value)
    {
        $this->_fields['GetPackageLabelsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetPackageLabelsResult is set.
     *
     * @return true if GetPackageLabelsResult is set.
     */
    public function isSetGetPackageLabelsResult()
    {
                return !is_null($this->_fields['GetPackageLabelsResult']['FieldValue']);
            }

    /**
     * Set the value of GetPackageLabelsResult, return this.
     *
     * @param getPackageLabelsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetPackageLabelsResult($value)
    {
        $this->setGetPackageLabelsResult($value);
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
     * Construct GetPackageLabelsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetPackageLabelsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetPackageLabelsResponse']");
        if ($response->length == 1) {
            return new GetPackageLabelsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetPackageLabelsResponse from provided XML.
                                  Make sure that GetPackageLabelsResponse is a root element");
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
        $xml .= "<GetPackageLabelsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetPackageLabelsResponse>";
        return $xml;
    }

}
