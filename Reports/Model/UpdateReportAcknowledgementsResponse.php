<?php

namespace Amazon\MWS\Reports;




/**
 * UpdateReportAcknowledgementsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>UpdateReportAcknowledgementsResult: UpdateReportAcknowledgementsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class UpdateReportAcknowledgementsResponse extends MarketplaceWebService_Model
{


    /**
     * Construct new UpdateReportAcknowledgementsResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>UpdateReportAcknowledgementsResult: UpdateReportAcknowledgementsResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'UpdateReportAcknowledgementsResult' => array('FieldValue' => null, 'FieldType' => 'UpdateReportAcknowledgementsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct UpdateReportAcknowledgementsResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return UpdateReportAcknowledgementsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:UpdateReportAcknowledgementsResponse');
        if ($response->length == 1) {
            return new UpdateReportAcknowledgementsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct UpdateReportAcknowledgementsResponse from provided XML.
                                  Make sure that UpdateReportAcknowledgementsResponse is a root element");
        }

    }

    /**
     * Gets the value of the UpdateReportAcknowledgementsResult.
     *
     * @return UpdateReportAcknowledgementsResult UpdateReportAcknowledgementsResult
     */
    public function getUpdateReportAcknowledgementsResult()
    {
        return $this->fields['UpdateReportAcknowledgementsResult']['FieldValue'];
    }

    /**
     * Sets the value of the UpdateReportAcknowledgementsResult.
     *
     * @param UpdateReportAcknowledgementsResult UpdateReportAcknowledgementsResult
     * @return void
     */
    public function setUpdateReportAcknowledgementsResult($value)
    {
        $this->fields['UpdateReportAcknowledgementsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the UpdateReportAcknowledgementsResult  and returns this instance
     *
     * @param UpdateReportAcknowledgementsResult $value UpdateReportAcknowledgementsResult
     * @return UpdateReportAcknowledgementsResponse instance
     */
    public function withUpdateReportAcknowledgementsResult($value)
    {
        $this->setUpdateReportAcknowledgementsResult($value);
        return $this;
    }


    /**
     * Checks if UpdateReportAcknowledgementsResult  is set
     *
     * @return bool true if UpdateReportAcknowledgementsResult property is set
     */
    public function isSetUpdateReportAcknowledgementsResult()
    {
        return !is_null($this->fields['UpdateReportAcknowledgementsResult']['FieldValue']);

    }

    /**
     * Gets the value of the ResponseMetadata.
     *
     * @return ResponseMetadata ResponseMetadata
     */
    public function getResponseMetadata()
    {
        return $this->fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Sets the value of the ResponseMetadata.
     *
     * @param ResponseMetadata ResponseMetadata
     * @return void
     */
    public function setResponseMetadata($value)
    {
        $this->fields['ResponseMetadata']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ResponseMetadata  and returns this instance
     *
     * @param ResponseMetadata $value ResponseMetadata
     * @return UpdateReportAcknowledgementsResponse instance
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }


    /**
     * Checks if ResponseMetadata  is set
     *
     * @return bool true if ResponseMetadata property is set
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->fields['ResponseMetadata']['FieldValue']);

    }



    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<UpdateReportAcknowledgementsResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</UpdateReportAcknowledgementsResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata() {
      return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata) {
      return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
