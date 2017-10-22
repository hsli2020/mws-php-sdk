<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * PutTransportContentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>PutTransportContentResult: PutTransportContentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class PutTransportContentResponse extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PutTransportContentResult' => array('FieldValue' => null, 'FieldType' => 'PutTransportContentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PutTransportContentResult property.
     *
     * @return PutTransportContentResult PutTransportContentResult.
     */
    public function getPutTransportContentResult()
    {
        return $this->_fields['PutTransportContentResult']['FieldValue'];
    }

    /**
     * Set the value of the PutTransportContentResult property.
     *
     * @param PutTransportContentResult putTransportContentResult
     * @return this instance
     */
    public function setPutTransportContentResult($value)
    {
        $this->_fields['PutTransportContentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PutTransportContentResult is set.
     *
     * @return true if PutTransportContentResult is set.
     */
    public function isSetPutTransportContentResult()
    {
                return !is_null($this->_fields['PutTransportContentResult']['FieldValue']);
            }

    /**
     * Set the value of PutTransportContentResult, return this.
     *
     * @param putTransportContentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPutTransportContentResult($value)
    {
        $this->setPutTransportContentResult($value);
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
     * Construct PutTransportContentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return PutTransportContentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='PutTransportContentResponse']");
        if ($response->length == 1) {
            return new PutTransportContentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct PutTransportContentResponse from provided XML.
                                  Make sure that PutTransportContentResponse is a root element");
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
        $xml .= "<PutTransportContentResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</PutTransportContentResponse>";
        return $xml;
    }

}
