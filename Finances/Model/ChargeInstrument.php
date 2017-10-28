<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ChargeInstrument
 *
 * Properties:
 * <ul>
 * <li>Description: string</li>
 * <li>Tail: string</li>
 * <li>Amount: Currency</li>
 * </ul>
 */
class ChargeInstrument extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Tail'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'Amount'      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Description property.
     *
     * @return String Description.
     */
    public function getDescription()
    {
        return $this->_fields['Description']['FieldValue'];
    }

    /**
     * Set the value of the Description property.
     *
     * @param string description
     * @return this instance
     */
    public function setDescription($value)
    {
        $this->_fields['Description']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Description is set.
     *
     * @return true if Description is set.
     */
    public function isSetDescription()
    {
        return !is_null($this->_fields['Description']['FieldValue']);
    }

    /**
     * Set the value of Description, return this.
     *
     * @param description
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDescription($value)
    {
        $this->setDescription($value);
        return $this;
    }

    /**
     * Get the value of the Tail property.
     *
     * @return String Tail.
     */
    public function getTail()
    {
        return $this->_fields['Tail']['FieldValue'];
    }

    /**
     * Set the value of the Tail property.
     *
     * @param string tail
     * @return this instance
     */
    public function setTail($value)
    {
        $this->_fields['Tail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Tail is set.
     *
     * @return true if Tail is set.
     */
    public function isSetTail()
    {
        return !is_null($this->_fields['Tail']['FieldValue']);
    }

    /**
     * Set the value of Tail, return this.
     *
     * @param tail
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTail($value)
    {
        $this->setTail($value);
        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Currency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Currency amount
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
}
