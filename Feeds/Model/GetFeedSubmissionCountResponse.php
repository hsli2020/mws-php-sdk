<?php

namespace Amazon\MWS\Feeds\Model;

use Amazon\MWS\Feeds\Model;

/**
 * GetFeedSubmissionCountResponse
 *
 * Properties:
 * <ul>
 * <li>GetFeedSubmissionCountResult: GetFeedSubmissionCountResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * </ul>
 */
class GetFeedSubmissionCountResponse extends Model
{
    /**
     * Construct new GetFeedSubmissionCountResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     * <li>GetFeedSubmissionCountResult: GetFeedSubmissionCountResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'GetFeedSubmissionCountResult' => array('FieldValue' => null, 'FieldType' => 'GetFeedSubmissionCountResult'),
            'ResponseMetadata'             => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct GetFeedSubmissionCountResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return GetFeedSubmissionCountResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:GetFeedSubmissionCountResponse');
        if ($response->length == 1) {
            return new GetFeedSubmissionCountResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct GetFeedSubmissionCountResponse from provided XML.
                                  Make sure that GetFeedSubmissionCountResponse is a root element");
        }
    }

    /**
     * Gets the value of the GetFeedSubmissionCountResult.
     *
     * @return GetFeedSubmissionCountResult GetFeedSubmissionCountResult
     */
    public function getGetFeedSubmissionCountResult()
    {
        return $this->fields['GetFeedSubmissionCountResult']['FieldValue'];
    }

    /**
     * Sets the value of the GetFeedSubmissionCountResult.
     *
     * @param GetFeedSubmissionCountResult GetFeedSubmissionCountResult
     * @return void
     */
    public function setGetFeedSubmissionCountResult($value)
    {
        $this->fields['GetFeedSubmissionCountResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the GetFeedSubmissionCountResult  and returns this instance
     *
     * @param GetFeedSubmissionCountResult $value GetFeedSubmissionCountResult
     * @return GetFeedSubmissionCountResponse instance
     */
    public function withGetFeedSubmissionCountResult($value)
    {
        $this->setGetFeedSubmissionCountResult($value);
        return $this;
    }


    /**
     * Checks if GetFeedSubmissionCountResult  is set
     *
     * @return bool true if GetFeedSubmissionCountResult property is set
     */
    public function isSetGetFeedSubmissionCountResult()
    {
        return !is_null($this->fields['GetFeedSubmissionCountResult']['FieldValue']);

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
     * @return GetFeedSubmissionCountResponse instance
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
        $xml .= "<GetFeedSubmissionCountResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetFeedSubmissionCountResponse>";
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
