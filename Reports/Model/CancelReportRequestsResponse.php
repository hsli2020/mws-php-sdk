<?php

namespace Amazon\MWS\Reports;




/**
 * CancelReportRequestsResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CancelReportRequestsResult: CancelReportRequestsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class CancelReportRequestsResponse extends MarketplaceWebService_Model
{


    /**
     * Construct new CancelReportRequestsResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>CancelReportRequestsResult: CancelReportRequestsResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'CancelReportRequestsResult' => array('FieldValue' => null, 'FieldType' => 'CancelReportRequestsResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct CancelReportRequestsResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return CancelReportRequestsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:CancelReportRequestsResponse');
        if ($response->length == 1) {
            return new CancelReportRequestsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct CancelReportRequestsResponse from provided XML.
                                  Make sure that CancelReportRequestsResponse is a root element");
        }

    }

    /**
     * Gets the value of the CancelReportRequestsResult.
     *
     * @return CancelReportRequestsResult CancelReportRequestsResult
     */
    public function getCancelReportRequestsResult()
    {
        return $this->fields['CancelReportRequestsResult']['FieldValue'];
    }

    /**
     * Sets the value of the CancelReportRequestsResult.
     *
     * @param CancelReportRequestsResult CancelReportRequestsResult
     * @return void
     */
    public function setCancelReportRequestsResult($value)
    {
        $this->fields['CancelReportRequestsResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the CancelReportRequestsResult  and returns this instance
     *
     * @param CancelReportRequestsResult $value CancelReportRequestsResult
     * @return CancelReportRequestsResponse instance
     */
    public function withCancelReportRequestsResult($value)
    {
        $this->setCancelReportRequestsResult($value);
        return $this;
    }


    /**
     * Checks if CancelReportRequestsResult  is set
     *
     * @return bool true if CancelReportRequestsResult property is set
     */
    public function isSetCancelReportRequestsResult()
    {
        return !is_null($this->fields['CancelReportRequestsResult']['FieldValue']);

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
     * @return CancelReportRequestsResponse instance
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
        $xml .= "<CancelReportRequestsResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelReportRequestsResponse>";
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
