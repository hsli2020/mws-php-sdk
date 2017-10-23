<?php

namespace Amazon\MWS\Sellers\Model;

use Amazon\MWS\Sellers\Model;

/**
 * ListMarketplaceParticipationsResponse
 *
 * Properties:
 * <ul>
 * <li>ListMarketplaceParticipationsResult: ListMarketplaceParticipationsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListMarketplaceParticipationsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListMarketplaceParticipationsResult' => array('FieldValue' => null, 'FieldType' => 'ListMarketplaceParticipationsResult'),
            'ResponseMetadata'                    => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'              => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListMarketplaceParticipationsResult property.
     *
     * @return ListMarketplaceParticipationsResult ListMarketplaceParticipationsResult.
     */
    public function getListMarketplaceParticipationsResult()
    {
        return $this->_fields['ListMarketplaceParticipationsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListMarketplaceParticipationsResult property.
     *
     * @param ListMarketplaceParticipationsResult listMarketplaceParticipationsResult
     * @return this instance
     */
    public function setListMarketplaceParticipationsResult($value)
    {
        $this->_fields['ListMarketplaceParticipationsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListMarketplaceParticipationsResult is set.
     *
     * @return true if ListMarketplaceParticipationsResult is set.
     */
    public function isSetListMarketplaceParticipationsResult()
    {
        return !is_null($this->_fields['ListMarketplaceParticipationsResult']['FieldValue']);
    }

    /**
     * Set the value of ListMarketplaceParticipationsResult, return this.
     *
     * @param listMarketplaceParticipationsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListMarketplaceParticipationsResult($value)
    {
        $this->setListMarketplaceParticipationsResult($value);
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
     * Construct ListMarketplaceParticipationsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListMarketplaceParticipationsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListMarketplaceParticipationsResponse']");
        if ($response->length == 1) {
            return new ListMarketplaceParticipationsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListMarketplaceParticipationsResponse from provided XML.
                                  Make sure that ListMarketplaceParticipationsResponse is a root element");
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
        $xml .= "<ListMarketplaceParticipationsResponse xmlns=\"https://mws.amazonservices.com/Sellers/2011-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListMarketplaceParticipationsResponse>";
        return $xml;
    }
}
