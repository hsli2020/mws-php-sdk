<?php

namespace Amazon\MWS\Products\Model;


/**
 * OfferListingCountType
 *
 * Properties:
 * <ul>
 *
 * <li>Value: int</li>
 * <li>condition: string</li>
 *
 * </ul>
 */

 class OfferListingCountType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Value' => array('FieldValue' => null, 'FieldType' => 'int'),
    'condition' => array('FieldValue' => null, 'FieldType' => '@string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Value property.
     *
     * @return int Value.
     */
    public function getValue()
    {
        return $this->_fields['Value']['FieldValue'];
    }

    /**
     * Set the value of the Value property.
     *
     * @param int value
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

    /**
     * Get the value of the condition property.
     *
     * @return String condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set.
     */
    public function isSetcondition()
    {
                return !is_null($this->_fields['condition']['FieldValue']);
            }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withcondition($value)
    {
        $this->setcondition($value);
        return $this;
    }

}
