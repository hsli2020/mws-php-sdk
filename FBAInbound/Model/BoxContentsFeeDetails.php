<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * BoxContentsFeeDetails
 *
 * Properties:
 * <ul>
 * <li>TotalUnits: int</li>
 * <li>FeePerUnit: Amount</li>
 * <li>TotalFee: Amount</li>
 * </ul>
 */
class BoxContentsFeeDetails extends Model 
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'TotalUnits' => array('FieldValue' => null, 'FieldType' => 'int'),
            'FeePerUnit' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Amount'),
            'TotalFee'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Amount'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the TotalUnits property.
     *
     * @return Integer TotalUnits.
     */
    public function getTotalUnits()
    {
        return $this->_fields['TotalUnits']['FieldValue'];
    }

    /**
     * Set the value of the TotalUnits property.
     *
     * @param int totalUnits
     * @return this instance
     */
    public function setTotalUnits($value)
    {
        $this->_fields['TotalUnits']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalUnits is set.
     *
     * @return true if TotalUnits is set.
     */
    public function isSetTotalUnits()
    {
        return !is_null($this->_fields['TotalUnits']['FieldValue']);
    }

    /**
     * Set the value of TotalUnits, return this.
     *
     * @param totalUnits
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalUnits($value)
    {
        $this->setTotalUnits($value);
        return $this;
    }

    /**
     * Get the value of the FeePerUnit property.
     *
     * @return Amount FeePerUnit.
     */
    public function getFeePerUnit()
    {
        return $this->_fields['FeePerUnit']['FieldValue'];
    }

    /**
     * Set the value of the FeePerUnit property.
     *
     * @param Amount feePerUnit
     * @return this instance
     */
    public function setFeePerUnit($value)
    {
        $this->_fields['FeePerUnit']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeePerUnit is set.
     *
     * @return true if FeePerUnit is set.
     */
    public function isSetFeePerUnit()
    {
        return !is_null($this->_fields['FeePerUnit']['FieldValue']);
    }

    /**
     * Set the value of FeePerUnit, return this.
     *
     * @param feePerUnit
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeePerUnit($value)
    {
        $this->setFeePerUnit($value);
        return $this;
    }

    /**
     * Get the value of the TotalFee property.
     *
     * @return Amount TotalFee.
     */
    public function getTotalFee()
    {
        return $this->_fields['TotalFee']['FieldValue'];
    }

    /**
     * Set the value of the TotalFee property.
     *
     * @param Amount totalFee
     * @return this instance
     */
    public function setTotalFee($value)
    {
        $this->_fields['TotalFee']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TotalFee is set.
     *
     * @return true if TotalFee is set.
     */
    public function isSetTotalFee()
    {
        return !is_null($this->_fields['TotalFee']['FieldValue']);
    }

    /**
     * Set the value of TotalFee, return this.
     *
     * @param totalFee
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTotalFee($value)
    {
        $this->setTotalFee($value);
        return $this;
    }
}
