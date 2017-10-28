<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ChargeComponent
 *
 * Properties:
 * <ul>
 * <li>ChargeType: string</li>
 * <li>ChargeAmount: Currency</li>
 * </ul>
 */
class ChargeComponent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ChargeType'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'ChargeAmount' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ChargeType property.
     *
     * @return String ChargeType.
     */
    public function getChargeType()
    {
        return $this->_fields['ChargeType']['FieldValue'];
    }

    /**
     * Set the value of the ChargeType property.
     *
     * @param string chargeType
     * @return this instance
     */
    public function setChargeType($value)
    {
        $this->_fields['ChargeType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ChargeType is set.
     *
     * @return true if ChargeType is set.
     */
    public function isSetChargeType()
    {
        return !is_null($this->_fields['ChargeType']['FieldValue']);
    }

    /**
     * Set the value of ChargeType, return this.
     *
     * @param chargeType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChargeType($value)
    {
        $this->setChargeType($value);
        return $this;
    }

    /**
     * Get the value of the ChargeAmount property.
     *
     * @return Currency ChargeAmount.
     */
    public function getChargeAmount()
    {
        return $this->_fields['ChargeAmount']['FieldValue'];
    }

    /**
     * Set the value of the ChargeAmount property.
     *
     * @param Currency chargeAmount
     * @return this instance
     */
    public function setChargeAmount($value)
    {
        $this->_fields['ChargeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ChargeAmount is set.
     *
     * @return true if ChargeAmount is set.
     */
    public function isSetChargeAmount()
    {
        return !is_null($this->_fields['ChargeAmount']['FieldValue']);
    }

    /**
     * Set the value of ChargeAmount, return this.
     *
     * @param chargeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChargeAmount($value)
    {
        $this->setChargeAmount($value);
        return $this;
    }
}
