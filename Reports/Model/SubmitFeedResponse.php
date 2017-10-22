<?php

namespace Amazon\MWS\Reports;




/**
 * SubmitFeedResponse
 *
 * Properties:
 * <ul>
 *
 * <li>SubmitFeedResult: SubmitFeedResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 *
 * </ul>
 */
class SubmitFeedResponse extends MarketplaceWebService_Model
{


    /**
     * Construct new SubmitFeedResponse
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>SubmitFeedResult: SubmitFeedResult</li>
     * <li>ResponseMetadata: ResponseMetadata</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'SubmitFeedResult' => array('FieldValue' => null, 'FieldType' => 'SubmitFeedResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        );
        parent::__construct($data);
    }


    /**
     * Construct SubmitFeedResponse from XML string
     *
     * @param string $xml XML string to construct from
     * @return SubmitFeedResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
    	$xpath->registerNamespace('a', 'http://mws.amazonaws.com/doc/2009-01-01/');
        $response = $xpath->query('//a:SubmitFeedResponse');
        if ($response->length == 1) {
            return new SubmitFeedResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct SubmitFeedResponse from provided XML.
                                  Make sure that SubmitFeedResponse is a root element");
        }

    }

    /**
     * Gets the value of the SubmitFeedResult.
     *
     * @return SubmitFeedResult SubmitFeedResult
     */
    public function getSubmitFeedResult()
    {
        return $this->fields['SubmitFeedResult']['FieldValue'];
    }

    /**
     * Sets the value of the SubmitFeedResult.
     *
     * @param SubmitFeedResult SubmitFeedResult
     * @return void
     */
    public function setSubmitFeedResult($value)
    {
        $this->fields['SubmitFeedResult']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the SubmitFeedResult  and returns this instance
     *
     * @param SubmitFeedResult $value SubmitFeedResult
     * @return SubmitFeedResponse instance
     */
    public function withSubmitFeedResult($value)
    {
        $this->setSubmitFeedResult($value);
        return $this;
    }


    /**
     * Checks if SubmitFeedResult  is set
     *
     * @return bool true if SubmitFeedResult property is set
     */
    public function isSetSubmitFeedResult()
    {
        return !is_null($this->fields['SubmitFeedResult']['FieldValue']);

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
     * @return SubmitFeedResponse instance
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
        $xml .= "<SubmitFeedResponse xmlns=\"http://mws.amazonaws.com/doc/2009-01-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</SubmitFeedResponse>";
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
