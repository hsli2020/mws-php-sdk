<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * GetPackageTrackingDetailsResponse
 *
 * Properties:
 * <ul>
 * <li>GetPackageTrackingDetailsResult: GetPackageTrackingDetailsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetPackageTrackingDetailsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetPackageTrackingDetailsResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetPackageTrackingDetailsResult'),
            'ResponseMetadata'                => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetPackageTrackingDetailsResult property.
     *
     * @return GetPackageTrackingDetailsResult GetPackageTrackingDetailsResult.
     */
    public function getGetPackageTrackingDetailsResult()
    {
        return $this->_fields['GetPackageTrackingDetailsResult']['FieldValue'];
    }

    /**
     * Set the value of the GetPackageTrackingDetailsResult property.
     *
     * @param GetPackageTrackingDetailsResult getPackageTrackingDetailsResult
     * @return this instance
     */
    public function setGetPackageTrackingDetailsResult($value)
    {
        $this->_fields['GetPackageTrackingDetailsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetPackageTrackingDetailsResult is set.
     *
     * @return true if GetPackageTrackingDetailsResult is set.
     */
    public function isSetGetPackageTrackingDetailsResult()
    {
                return !is_null($this->_fields['GetPackageTrackingDetailsResult']['FieldValue']);
            }

    /**
     * Set the value of GetPackageTrackingDetailsResult, return this.
     *
     * @param getPackageTrackingDetailsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetPackageTrackingDetailsResult($value)
    {
        $this->setGetPackageTrackingDetailsResult($value);
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
     * Construct GetPackageTrackingDetailsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetPackageTrackingDetailsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetPackageTrackingDetailsResponse']");
        if ($response->length == 1) {
            return new GetPackageTrackingDetailsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetPackageTrackingDetailsResponse from provided XML.
                                  Make sure that GetPackageTrackingDetailsResponse is a root element");
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
        $xml .= "<GetPackageTrackingDetailsResponse xmlns=\"http://mws.amazonaws.com/FulfillmentOutboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetPackageTrackingDetailsResponse>";
        return $xml;
    }

}
