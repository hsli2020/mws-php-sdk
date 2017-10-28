<?php

namespace Amazon\MWS\Feeds\Model;

use Amazon\MWS\Feeds\Model;

/**
 * GetFeedSubmissionResultResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetFeedSubmissionResultResult: GetFeedSubmissionResultResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class GetFeedSubmissionResultResponse extends Model
{
    /**
     * Construct new GetFeedSubmissionResultResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>GetFeedSubmissionResultResult: GetFeedSubmissionResultResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'GetFeedSubmissionResultResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\GetFeedSubmissionResultResult'),
            'ResponseMetadata'              => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct GetFeedSubmissionResultResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return GetFeedSubmissionResultResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetFeedSubmissionResultResponse');
        if ($response->length == 1) {
            return new GetFeedSubmissionResultResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetFeedSubmissionResultResponse from provided XML.
                                  Make sure that GetFeedSubmissionResultResponse is a root element");
        }
    }

    /**
     * Gets the value of the GetFeedSubmissionResultResult.
     *
     * @return GetFeedSubmissionResultResult GetFeedSubmissionResultResult
     */
    public function getGetFeedSubmissionResultResult()
    {
        return $this->fields['GetFeedSubmissionResultResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFeedSubmissionResultResult.
     *
     * @param GetFeedSubmissionResultResult GetFeedSubmissionResultResult
     * @return void
     */
    public function setGetFeedSubmissionResultResult($value)
    {
        $this->fields['GetFeedSubmissionResultResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFeedSubmissionResultResult  and returns this instance
     *
     * @param GetFeedSubmissionResultResult $value GetFeedSubmissionResultResult
     * @return GetFeedSubmissionResultResponse instance
     */
    public function withGetFeedSubmissionResultResult($value)
    {
        $this->setGetFeedSubmissionResultResult($value);
        return $this;
    }


    /**
     * Checks if GetFeedSubmissionResultResult  is set
     *
     * @return bool true if GetFeedSubmissionResultResult property is set
     */
    public function isSetGetFeedSubmissionResultResult()
    {
        return !is_null($this->fields['GetFeedSubmissionResultResult']['FieldValue']);

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
     * @return GetFeedSubmissionResultResponse instance
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
        $xml .= "<GetFeedSubmissionResultResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFeedSubmissionResultResponse>";
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
