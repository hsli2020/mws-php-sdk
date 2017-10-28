<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * PartneredEstimate
 *
 * Properties:
 * <ul>
 * <li>Amount: Amount</li>
 * <li>ConfirmDeadline: string</li>
 * <li>VoidDeadline: string</li>
 * </ul>
 */
class PartneredEstimate extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Amount'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Amount'),
            'ConfirmDeadline' => array('FieldValue' => null, 'FieldType' => 'string'),
            'VoidDeadline'    => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Amount Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Amount amount
     * @return this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }

    /**
     * Get the value of the ConfirmDeadline property.
     *
     * @return String ConfirmDeadline.
     */
    public function getConfirmDeadline()
    {
        return $this->_fields['ConfirmDeadline']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmDeadline property.
     *
     * @param string confirmDeadline
     * @return this instance
     */
    public function setConfirmDeadline($value)
    {
        $this->_fields['ConfirmDeadline']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmDeadline is set.
     *
     * @return true if ConfirmDeadline is set.
     */
    public function isSetConfirmDeadline()
    {
        return !is_null($this->_fields['ConfirmDeadline']['FieldValue']);
    }

    /**
     * Set the value of ConfirmDeadline, return this.
     *
     * @param confirmDeadline
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withConfirmDeadline($value)
    {
        $this->setConfirmDeadline($value);
        return $this;
    }

    /**
     * Get the value of the VoidDeadline property.
     *
     * @return String VoidDeadline.
     */
    public function getVoidDeadline()
    {
        return $this->_fields['VoidDeadline']['FieldValue'];
    }

    /**
     * Set the value of the VoidDeadline property.
     *
     * @param string voidDeadline
     * @return this instance
     */
    public function setVoidDeadline($value)
    {
        $this->_fields['VoidDeadline']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if VoidDeadline is set.
     *
     * @return true if VoidDeadline is set.
     */
    public function isSetVoidDeadline()
    {
        return !is_null($this->_fields['VoidDeadline']['FieldValue']);
    }

    /**
     * Set the value of VoidDeadline, return this.
     *
     * @param voidDeadline
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withVoidDeadline($value)
    {
        $this->setVoidDeadline($value);
        return $this;
    }
}
