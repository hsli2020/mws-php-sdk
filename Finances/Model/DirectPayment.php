<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * DirectPayment
 *
 * Properties:
 * <ul>
 * <li>DirectPaymentType: string</li>
 * <li>DirectPaymentAmount: Currency</li>
 * </ul>
 */
class DirectPayment extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DirectPaymentType'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'DirectPaymentAmount' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DirectPaymentType property.
     *
     * @return String DirectPaymentType.
     */
    public function getDirectPaymentType()
    {
        return $this->_fields['DirectPaymentType']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentType property.
     *
     * @param string directPaymentType
     * @return this instance
     */
    public function setDirectPaymentType($value)
    {
        $this->_fields['DirectPaymentType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DirectPaymentType is set.
     *
     * @return true if DirectPaymentType is set.
     */
    public function isSetDirectPaymentType()
    {
        return !is_null($this->_fields['DirectPaymentType']['FieldValue']);
    }

    /**
     * Set the value of DirectPaymentType, return this.
     *
     * @param directPaymentType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDirectPaymentType($value)
    {
        $this->setDirectPaymentType($value);
        return $this;
    }

    /**
     * Get the value of the DirectPaymentAmount property.
     *
     * @return Currency DirectPaymentAmount.
     */
    public function getDirectPaymentAmount()
    {
        return $this->_fields['DirectPaymentAmount']['FieldValue'];
    }

    /**
     * Set the value of the DirectPaymentAmount property.
     *
     * @param Currency directPaymentAmount
     * @return this instance
     */
    public function setDirectPaymentAmount($value)
    {
        $this->_fields['DirectPaymentAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DirectPaymentAmount is set.
     *
     * @return true if DirectPaymentAmount is set.
     */
    public function isSetDirectPaymentAmount()
    {
        return !is_null($this->_fields['DirectPaymentAmount']['FieldValue']);
    }

    /**
     * Set the value of DirectPaymentAmount, return this.
     *
     * @param directPaymentAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDirectPaymentAmount($value)
    {
        $this->setDirectPaymentAmount($value);
        return $this;
    }
}
