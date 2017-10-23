<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * ScheduledDeliveryInfo
 *
 * Properties:
 * <ul>
 * <li>DeliveryTimeZone: string</li>
 * <li>DeliveryWindows: DeliveryWindowList</li>
 * </ul>
 */
class ScheduledDeliveryInfo extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DeliveryTimeZone' => array('FieldValue' => null, 'FieldType' => 'string'),
            'DeliveryWindows'  => array('FieldValue' => null, 'FieldType' => 'DeliveryWindowList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryTimeZone property.
     *
     * @return String DeliveryTimeZone.
     */
    public function getDeliveryTimeZone()
    {
        return $this->_fields['DeliveryTimeZone']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryTimeZone property.
     *
     * @param string deliveryTimeZone
     * @return this instance
     */
    public function setDeliveryTimeZone($value)
    {
        $this->_fields['DeliveryTimeZone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryTimeZone is set.
     *
     * @return true if DeliveryTimeZone is set.
     */
    public function isSetDeliveryTimeZone()
    {
        return !is_null($this->_fields['DeliveryTimeZone']['FieldValue']);
    }

    /**
     * Set the value of DeliveryTimeZone, return this.
     *
     * @param deliveryTimeZone
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryTimeZone($value)
    {
        $this->setDeliveryTimeZone($value);
        return $this;
    }

    /**
     * Get the value of the DeliveryWindows property.
     *
     * @return DeliveryWindowList DeliveryWindows.
     */
    public function getDeliveryWindows()
    {
        return $this->_fields['DeliveryWindows']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryWindows property.
     *
     * @param DeliveryWindowList deliveryWindows
     * @return this instance
     */
    public function setDeliveryWindows($value)
    {
        $this->_fields['DeliveryWindows']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryWindows is set.
     *
     * @return true if DeliveryWindows is set.
     */
    public function isSetDeliveryWindows()
    {
        return !is_null($this->_fields['DeliveryWindows']['FieldValue']);
    }

    /**
     * Set the value of DeliveryWindows, return this.
     *
     * @param deliveryWindows
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryWindows($value)
    {
        $this->setDeliveryWindows($value);
        return $this;
    }
}
