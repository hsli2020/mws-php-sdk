<?php

namespace Amazon\MWS\Reports\Model;

use Amazon\MWS\Reports\Model;

/**
 * GetReportRequestListResponse
 *
 * Properties:
 * <ul>
 * <li>GetReportRequestListResult: GetReportRequestListResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * </ul>
 */
class GetReportRequestListResponse extends Model
{
    /**
     * Construct new GetReportRequestListResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     * <li>GetReportRequestListResult: GetReportRequestListResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'GetReportRequestListResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetReportRequestListResult'),
            'ResponseMetadata'           => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct GetReportRequestListResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return GetReportRequestListResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetReportRequestListResponse');
        if ($response->length == 1) {
            return new GetReportRequestListResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetReportRequestListResponse from provided XML.
                                  Make sure that GetReportRequestListResponse is a root element");
        }

    }

    /**
     * Gets the value of the GetReportRequestListResult.
     *
     * @return GetReportRequestListResult GetReportRequestListResult
     */
    public function getGetReportRequestListResult()
    {
        return $this->fields['GetReportRequestListResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetReportRequestListResult.
     *
     * @param GetReportRequestListResult GetReportRequestListResult
     * @return void
     */
    public function setGetReportRequestListResult($value)
    {
        $this->fields['GetReportRequestListResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetReportRequestListResult  and returns this instance
     *
     * @param GetReportRequestListResult $value GetReportRequestListResult
     * @return GetReportRequestListResponse instance
     */
    public function withGetReportRequestListResult($value)
    {
        $this->setGetReportRequestListResult($value);
        return $this;
    }


    /**
     * Checks if GetReportRequestListResult  is set
     *
     * @return bool true if GetReportRequestListResult property is set
     */
    public function isSetGetReportRequestListResult()
    {
        return !is_null($this->fields['GetReportRequestListResult']['FieldValue']);
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
     * @return GetReportRequestListResponse instance
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
        $xml .= "<GetReportRequestListResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetReportRequestListResponse>";
        return $xml;
    }

    private $_responseHeaderMetadata = null;

    public function getResponseHeaderMetadata()
    {
        return $this->_responseHeaderMetadata;
    }

    public function setResponseHeaderMetadata($responseHeaderMetadata)
    {
        return $this->_responseHeaderMetadata = $responseHeaderMetadata;
    }
}
