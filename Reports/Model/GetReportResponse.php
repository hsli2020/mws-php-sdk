<?php

namespace Amazon\MWS\Reports;




/**
 * GetReportResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetReportResult: GetReportResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetReportResponse extends MarketplaceWebService_Model
{


    /**
     * Construct new GetReportResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetReportResult: GetReportResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'GetReportResult' => array('FieldValue' => null, 'FieldType' => 'GetReportResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct GetReportResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return GetReportResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportResponse');
        if ($response->length == 1) {
            return new GetReportResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetReportResponse from provided XML.
                                  Make sure that GetReportResponse is a root element");
        }

    }

    /**
     * Gets the value of the GetReportResult.
     *
     * @return GetReportResult GetReportResult
     */
    public function getGetReportResult()
    {
        return $this->fields['GetReportResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportResult.
     *
     * @param GetReportResult GetReportResult
     * @return void
     */
    public function setGetReportResult($value)
    {
        $this->fields['GetReportResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportResult  and returns this instance
     *
     * @param GetReportResult $value GetReportResult
     * @return GetReportResponse instance
     */
    public function withGetReportResult($value)
    {
        $this->setGetReportResult($value);
        return $this;
    }


    /**
     * Checks if GetReportResult  is set
     *
     * @return bool true if GetReportResult property is set
     */
    public function isSetGetReportResult()
    {
        return !is_null($this->fields['GetReportResult']['FieldValue']);

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
     * @return GetReportResponse instance
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
        $xml .= "<GetReportResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportResponse>";
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
