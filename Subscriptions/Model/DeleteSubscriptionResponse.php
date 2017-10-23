<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * DeleteSubscriptionResponse
 *
 * Properties:
 * <ul>
 * <li>DeleteSubscriptionResult: DeleteSubscriptionResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class DeleteSubscriptionResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DeleteSubscriptionResult' => array('FieldValue' => null, 'FieldType' => 'DeleteSubscriptionResult'),
            'ResponseMetadata'         => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
            'ResponseHeaderMetadata'   => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeleteSubscriptionResult property.
     *
     * @return DeleteSubscriptionResult DeleteSubscriptionResult.
     */
    public function getDeleteSubscriptionResult()
    {
        return $this->_fields['DeleteSubscriptionResult']['FieldValue'];
    }

    /**
     * Set the value of the DeleteSubscriptionResult property.
     *
     * @param DeleteSubscriptionResult deleteSubscriptionResult
     * @return this instance
     */
    public function setDeleteSubscriptionResult($value)
    {
        $this->_fields['DeleteSubscriptionResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeleteSubscriptionResult is set.
     *
     * @return true if DeleteSubscriptionResult is set.
     */
    public function isSetDeleteSubscriptionResult()
    {
        return !is_null($this->_fields['DeleteSubscriptionResult']['FieldValue']);
    }

    /**
     * Set the value of DeleteSubscriptionResult, return this.
     *
     * @param deleteSubscriptionResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeleteSubscriptionResult($value)
    {
        $this->setDeleteSubscriptionResult($value);
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
     * Construct DeleteSubscriptionResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return DeleteSubscriptionResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='DeleteSubscriptionResponse']");
        if ($response->length == 1) {
            return new DeleteSubscriptionResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct DeleteSubscriptionResponse from provided XML.
                                  Make sure that DeleteSubscriptionResponse is a root element");
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
        $xml .= "<DeleteSubscriptionResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</DeleteSubscriptionResponse>";
        return $xml;
    }
}
