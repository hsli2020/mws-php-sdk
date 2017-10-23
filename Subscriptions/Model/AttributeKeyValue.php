<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * AttributeKeyValue
 *
 * Properties:
 * <ul>
 * <li>Key: string</li>
 * <li>Value: string</li>
 * </ul>
 */
class AttributeKeyValue extends Model 
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Key'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'Value' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Key property.
     *
     * @return String Key.
     */
    public function getKey()
    {
        return $this->_fields['Key']['FieldValue'];
    }

    /**
     * Set the value of the Key property.
     *
     * @param string key
     * @return this instance
     */
    public function setKey($value)
    {
        $this->_fields['Key']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Key is set.
     *
     * @return true if Key is set.
     */
    public function isSetKey()
    {
        return !is_null($this->_fields['Key']['FieldValue']);
    }

    /**
     * Set the value of Key, return this.
     *
     * @param key
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withKey($value)
    {
        $this->setKey($value);
        return $this;
    }

    /**
     * Get the value of the Value property.
     *
     * @return String Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param string value
     * @return this instance
     */
    public function setValue($value)
    {
        $this->_fields['Value']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Value is set.
     *
     * @return true if Value is set.
     */
    public function isSetValue()
    {
        return !is_null($this->_fields['Value']['FieldValue']);
    }

    /**
     * Set the value of Value, return this.
     *
     * @param value
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withValue($value)
    {
        $this->setValue($value);
        return $this;
    }
}
