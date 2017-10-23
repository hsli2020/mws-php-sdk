<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ListFinancialEventsByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>ListFinancialEventsByNextTokenResult: ListFinancialEventsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListFinancialEventsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListFinancialEventsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'ListFinancialEventsByNextTokenResult'),
            'ResponseMetadata'                     => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'               => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventsByNextTokenResult property.
     *
     * @return ListFinancialEventsByNextTokenResult ListFinancialEventsByNextTokenResult.
     */
    public function getListFinancialEventsByNextTokenResult()
    {
        return $this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventsByNextTokenResult property.
     *
     * @param ListFinancialEventsByNextTokenResult listFinancialEventsByNextTokenResult
     * @return this instance
     */
    public function setListFinancialEventsByNextTokenResult($value)
    {
        $this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListFinancialEventsByNextTokenResult is set.
     *
     * @return true if ListFinancialEventsByNextTokenResult is set.
     */
    public function isSetListFinancialEventsByNextTokenResult()
    {
        return !is_null($this->_fields['ListFinancialEventsByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListFinancialEventsByNextTokenResult, return this.
     *
     * @param listFinancialEventsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListFinancialEventsByNextTokenResult($value)
    {
        $this->setListFinancialEventsByNextTokenResult($value);
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
     * Construct ListFinancialEventsByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListFinancialEventsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventsByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListFinancialEventsByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListFinancialEventsByNextTokenResponse from provided XML.
                                  Make sure that ListFinancialEventsByNextTokenResponse is a root element");
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
        $xml .= "<ListFinancialEventsByNextTokenResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventsByNextTokenResponse>";
        return $xml;
    }
}
