<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * CreateInboundShipmentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CreateInboundShipmentResult: CreateInboundShipmentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class CreateInboundShipmentResponse extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CreateInboundShipmentResult' => array('FieldValue' => null, 'FieldType' => 'CreateInboundShipmentResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CreateInboundShipmentResult property.
     *
     * @return CreateInboundShipmentResult CreateInboundShipmentResult.
     */
    public function getCreateInboundShipmentResult()
    {
        return $this->_fields['CreateInboundShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the CreateInboundShipmentResult property.
     *
     * @param CreateInboundShipmentResult createInboundShipmentResult
     * @return this instance
     */
    public function setCreateInboundShipmentResult($value)
    {
        $this->_fields['CreateInboundShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreateInboundShipmentResult is set.
     *
     * @return true if CreateInboundShipmentResult is set.
     */
    public function isSetCreateInboundShipmentResult()
    {
                return !is_null($this->_fields['CreateInboundShipmentResult']['FieldValue']);
            }

    /**
     * Set the value of CreateInboundShipmentResult, return this.
     *
     * @param createInboundShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCreateInboundShipmentResult($value)
    {
        $this->setCreateInboundShipmentResult($value);
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
     * Construct CreateInboundShipmentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return CreateInboundShipmentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CreateInboundShipmentResponse']");
        if ($response->length == 1) {
            return new CreateInboundShipmentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct CreateInboundShipmentResponse from provided XML.
                                  Make sure that CreateInboundShipmentResponse is a root element");
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
        $xml .= "<CreateInboundShipmentResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CreateInboundShipmentResponse>";
        return $xml;
    }

}
