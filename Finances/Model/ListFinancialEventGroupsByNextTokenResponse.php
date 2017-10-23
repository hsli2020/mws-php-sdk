<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ListFinancialEventGroupsByNextTokenResponse
 *
 * Properties:
 * <ul>
 * <li>ListFinancialEventGroupsByNextTokenResult: ListFinancialEventGroupsByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListFinancialEventGroupsByNextTokenResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListFinancialEventGroupsByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'ListFinancialEventGroupsByNextTokenResult'),
            'ResponseMetadata'                          => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'                    => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventGroupsByNextTokenResult property.
     *
     * @return ListFinancialEventGroupsByNextTokenResult ListFinancialEventGroupsByNextTokenResult.
     */
    public function getListFinancialEventGroupsByNextTokenResult()
    {
        return $this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventGroupsByNextTokenResult property.
     *
     * @param ListFinancialEventGroupsByNextTokenResult listFinancialEventGroupsByNextTokenResult
     * @return this instance
     */
    public function setListFinancialEventGroupsByNextTokenResult($value)
    {
        $this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListFinancialEventGroupsByNextTokenResult is set.
     *
     * @return true if ListFinancialEventGroupsByNextTokenResult is set.
     */
    public function isSetListFinancialEventGroupsByNextTokenResult()
    {
        return !is_null($this->_fields['ListFinancialEventGroupsByNextTokenResult']['FieldValue']);
    }

    /**
     * Set the value of ListFinancialEventGroupsByNextTokenResult, return this.
     *
     * @param listFinancialEventGroupsByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListFinancialEventGroupsByNextTokenResult($value)
    {
        $this->setListFinancialEventGroupsByNextTokenResult($value);
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
     * Construct ListFinancialEventGroupsByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListFinancialEventGroupsByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventGroupsByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListFinancialEventGroupsByNextTokenResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListFinancialEventGroupsByNextTokenResponse from provided XML.
                                  Make sure that ListFinancialEventGroupsByNextTokenResponse is a root element");
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
        $xml .= "<ListFinancialEventGroupsByNextTokenResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventGroupsByNextTokenResponse>";
        return $xml;
    }
}
