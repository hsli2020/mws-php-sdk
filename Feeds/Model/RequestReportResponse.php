<?php

namespace Amazon\MWS\Feeds\Model;

/**
 * RequestReportResponse
 *
 * Properties:
 * <ul>
 *
 * <li>RequestReportResult: RequestReportResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class RequestReportResponse extends MarketplaceWebService_Model
{


    /**
     * Construct new RequestReportResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>RequestReportResult: RequestReportResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'RequestReportResult' => array('FieldValue' => null, 'FieldType' => 'RequestReportResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct RequestReportResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return RequestReportResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:RequestReportResponse');
        if ($response->length == 1) {
            return new RequestReportResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct RequestReportResponse from provided XML.
                                  Make sure that RequestReportResponse is a root element");
        }

    }

    /**
     * Gets the value of the RequestReportResult.
     *
     * @return RequestReportResult RequestReportResult
     */
    public function getRequestReportResult()
    {
        return $this->fields['RequestReportResult']['FieldValue'];
    }

    /**
     * Sets the value of the RequestReportResult.
     *
     * @param RequestReportResult RequestReportResult
     * @return void
     */
    public function setRequestReportResult($value)
    {
        $this->fields['RequestReportResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the RequestReportResult  and returns this instance
     *
     * @param RequestReportResult $value RequestReportResult
     * @return RequestReportResponse instance
     */
    public function withRequestReportResult($value)
    {
        $this->setRequestReportResult($value);
        return $this;
    }


    /**
     * Checks if RequestReportResult  is set
     *
     * @return bool true if RequestReportResult property is set
     */
    public function isSetRequestReportResult()
    {
        return !is_null($this->fields['RequestReportResult']['FieldValue']);

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
     * @return RequestReportResponse instance
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
        $xml .= "<RequestReportResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</RequestReportResponse>";
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
