<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * FeeComponent
 *
 * Properties:
 * <ul>
 * <li>FeeType: string</li>
 * <li>FeeAmount: Currency</li>
 * </ul>
 */
class FeeComponent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'FeeType'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'FeeAmount' => array('FieldValue' => null, 'FieldType' => 'Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the FeeType property.
     *
     * @return String FeeType.
     */
    public function getFeeType()
    {
        return $this->_fields['FeeType']['FieldValue'];
    }

    /**
     * Set the value of the FeeType property.
     *
     * @param string feeType
     * @return this instance
     */
    public function setFeeType($value)
    {
        $this->_fields['FeeType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeType is set.
     *
     * @return true if FeeType is set.
     */
    public function isSetFeeType()
    {
        return !is_null($this->_fields['FeeType']['FieldValue']);
    }

    /**
     * Set the value of FeeType, return this.
     *
     * @param feeType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeType($value)
    {
        $this->setFeeType($value);
        return $this;
    }

    /**
     * Get the value of the FeeAmount property.
     *
     * @return Currency FeeAmount.
     */
    public function getFeeAmount()
    {
        return $this->_fields['FeeAmount']['FieldValue'];
    }

    /**
     * Set the value of the FeeAmount property.
     *
     * @param Currency feeAmount
     * @return this instance
     */
    public function setFeeAmount($value)
    {
        $this->_fields['FeeAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeeAmount is set.
     *
     * @return true if FeeAmount is set.
     */
    public function isSetFeeAmount()
    {
        return !is_null($this->_fields['FeeAmount']['FieldValue']);
    }

    /**
     * Set the value of FeeAmount, return this.
     *
     * @param feeAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeeAmount($value)
    {
        $this->setFeeAmount($value);
        return $this;
    }
}
