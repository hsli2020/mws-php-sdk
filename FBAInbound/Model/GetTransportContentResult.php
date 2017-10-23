<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetTransportContentResult
 *
 * Properties:
 * <ul>
 * <li>TransportContent: TransportContent</li>
 * </ul>
 */
class GetTransportContentResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'TransportContent' => array('FieldValue' => null, 'FieldType' => 'TransportContent'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the TransportContent property.
     *
     * @return TransportContent TransportContent.
     */
    public function getTransportContent()
    {
        return $this->_fields['TransportContent']['FieldValue'];
    }

    /**
     * Set the value of the TransportContent property.
     *
     * @param TransportContent transportContent
     * @return this instance
     */
    public function setTransportContent($value)
    {
        $this->_fields['TransportContent']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TransportContent is set.
     *
     * @return true if TransportContent is set.
     */
    public function isSetTransportContent()
    {
        return !is_null($this->_fields['TransportContent']['FieldValue']);
    }

    /**
     * Set the value of TransportContent, return this.
     *
     * @param transportContent
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTransportContent($value)
    {
        $this->setTransportContent($value);
        return $this;
    }
}
