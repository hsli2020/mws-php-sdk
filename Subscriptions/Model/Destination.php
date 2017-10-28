<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * Destination
 *
 * Properties:
 * <ul>
 * <li>DeliveryChannel: string</li>
 * <li>AttributeList: AttributeKeyValueList</li>
 * </ul>
 */
class Destination extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DeliveryChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AttributeList'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\AttributeKeyValueList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryChannel property.
     *
     * @return String DeliveryChannel.
     */
    public function getDeliveryChannel()
    {
        return $this->_fields['DeliveryChannel']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryChannel property.
     *
     * @param string deliveryChannel
     * @return this instance
     */
    public function setDeliveryChannel($value)
    {
        $this->_fields['DeliveryChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryChannel is set.
     *
     * @return true if DeliveryChannel is set.
     */
    public function isSetDeliveryChannel()
    {
        return !is_null($this->_fields['DeliveryChannel']['FieldValue']);
    }

    /**
     * Set the value of DeliveryChannel, return this.
     *
     * @param deliveryChannel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryChannel($value)
    {
        $this->setDeliveryChannel($value);
        return $this;
    }

    /**
     * Get the value of the AttributeList property.
     *
     * @return AttributeKeyValueList AttributeList.
     */
    public function getAttributeList()
    {
        return $this->_fields['AttributeList']['FieldValue'];
    }

    /**
     * Set the value of the AttributeList property.
     *
     * @param AttributeKeyValueList attributeList
     * @return this instance
     */
    public function setAttributeList($value)
    {
        $this->_fields['AttributeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AttributeList is set.
     *
     * @return true if AttributeList is set.
     */
    public function isSetAttributeList()
    {
        return !is_null($this->_fields['AttributeList']['FieldValue']);
    }

    /**
     * Set the value of AttributeList, return this.
     *
     * @param attributeList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAttributeList($value)
    {
        $this->setAttributeList($value);
        return $this;
    }
}
