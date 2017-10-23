<?php

namespace Amazon\MWS\Orders\Model;

use Amazon\MWS\Orders\Model;

/**
 * BuyerCustomizedInfoDetail
 *
 * Properties:
 * <ul>
 * <li>CustomizedURL: string</li>
 * </ul>
 */
class BuyerCustomizedInfoDetail extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'CustomizedURL' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CustomizedURL property.
     *
     * @return String CustomizedURL.
     */
    public function getCustomizedURL()
    {
        return $this->_fields['CustomizedURL']['FieldValue'];
    }

    /**
     * Set the value of the CustomizedURL property.
     *
     * @param string customizedURL
     * @return this instance
     */
    public function setCustomizedURL($value)
    {
        $this->_fields['CustomizedURL']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CustomizedURL is set.
     *
     * @return true if CustomizedURL is set.
     */
    public function isSetCustomizedURL()
    {
        return !is_null($this->_fields['CustomizedURL']['FieldValue']);
    }

    /**
     * Set the value of CustomizedURL, return this.
     *
     * @param customizedURL
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCustomizedURL($value)
    {
        $this->setCustomizedURL($value);
        return $this;
    }
}
