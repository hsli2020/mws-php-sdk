<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetBillOfLadingResponse
 *
 * Properties:
 * <ul>
 * <li>GetBillOfLadingResult: GetBillOfLadingResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class GetBillOfLadingResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'GetBillOfLadingResult'  => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetBillOfLadingResult'),
            'ResponseMetadata'       => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetBillOfLadingResult property.
     *
     * @return GetBillOfLadingResult GetBillOfLadingResult.
     */
    public function getGetBillOfLadingResult()
    {
        return $this->_fields['GetBillOfLadingResult']['FieldValue'];
    }

    /**
     * Set the value of the GetBillOfLadingResult property.
     *
     * @param GetBillOfLadingResult getBillOfLadingResult
     * @return this instance
     */
    public function setGetBillOfLadingResult($value)
    {
        $this->_fields['GetBillOfLadingResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetBillOfLadingResult is set.
     *
     * @return true if GetBillOfLadingResult is set.
     */
    public function isSetGetBillOfLadingResult()
    {
        return !is_null($this->_fields['GetBillOfLadingResult']['FieldValue']);
    }

    /**
     * Set the value of GetBillOfLadingResult, return this.
     *
     * @param getBillOfLadingResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetBillOfLadingResult($value)
    {
        $this->setGetBillOfLadingResult($value);
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
     * Construct GetBillOfLadingResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetBillOfLadingResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetBillOfLadingResponse']");
        if ($response->length == 1) {
            return new GetBillOfLadingResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetBillOfLadingResponse from provided XML.
                                  Make sure that GetBillOfLadingResponse is a root element");
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
        $xml .= "<GetBillOfLadingResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetBillOfLadingResponse>";
        return $xml;
    }
}
