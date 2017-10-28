<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * AdjustmentEvent
 *
 * Properties:
 * <ul>
 * <li>AdjustmentType: string</li>
 * <li>AdjustmentAmount: Currency</li>
 * <li>AdjustmentItemList: array</li>
 * </ul>
 */
class AdjustmentEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'AdjustmentType'     => array('FieldValue' => null, 'FieldType' => 'string'),
            'AdjustmentAmount'   => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
            'AdjustmentItemList' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\AdjustmentItem'), 'ListMemberName' => 'AdjustmentItem'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the AdjustmentType property.
     *
     * @return String AdjustmentType.
     */
    public function getAdjustmentType()
    {
        return $this->_fields['AdjustmentType']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentType property.
     *
     * @param string adjustmentType
     * @return this instance
     */
    public function setAdjustmentType($value)
    {
        $this->_fields['AdjustmentType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdjustmentType is set.
     *
     * @return true if AdjustmentType is set.
     */
    public function isSetAdjustmentType()
    {
        return !is_null($this->_fields['AdjustmentType']['FieldValue']);
    }

    /**
     * Set the value of AdjustmentType, return this.
     *
     * @param adjustmentType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdjustmentType($value)
    {
        $this->setAdjustmentType($value);
        return $this;
    }

    /**
     * Get the value of the AdjustmentAmount property.
     *
     * @return Currency AdjustmentAmount.
     */
    public function getAdjustmentAmount()
    {
        return $this->_fields['AdjustmentAmount']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentAmount property.
     *
     * @param Currency adjustmentAmount
     * @return this instance
     */
    public function setAdjustmentAmount($value)
    {
        $this->_fields['AdjustmentAmount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AdjustmentAmount is set.
     *
     * @return true if AdjustmentAmount is set.
     */
    public function isSetAdjustmentAmount()
    {
        return !is_null($this->_fields['AdjustmentAmount']['FieldValue']);
    }

    /**
     * Set the value of AdjustmentAmount, return this.
     *
     * @param adjustmentAmount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAdjustmentAmount($value)
    {
        $this->setAdjustmentAmount($value);
        return $this;
    }

    /**
     * Get the value of the AdjustmentItemList property.
     *
     * @return List<AdjustmentItem> AdjustmentItemList.
     */
    public function getAdjustmentItemList()
    {
        if ($this->_fields['AdjustmentItemList']['FieldValue'] == null) {
            $this->_fields['AdjustmentItemList']['FieldValue'] = array();
        }
        return $this->_fields['AdjustmentItemList']['FieldValue'];
    }

    /**
     * Set the value of the AdjustmentItemList property.
     *
     * @param array adjustmentItemList
     * @return this instance
     */
    public function setAdjustmentItemList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['AdjustmentItemList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear AdjustmentItemList.
     */
    public function unsetAdjustmentItemList()
    {
        $this->_fields['AdjustmentItemList']['FieldValue'] = array();
    }

    /**
     * Check to see if AdjustmentItemList is set.
     *
     * @return true if AdjustmentItemList is set.
     */
    public function isSetAdjustmentItemList()
    {
        return !empty($this->_fields['AdjustmentItemList']['FieldValue']);
    }

    /**
     * Add values for AdjustmentItemList, return this.
     *
     * @param adjustmentItemList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withAdjustmentItemList()
    {
        foreach (func_get_args() as $AdjustmentItemList) {
            $this->_fields['AdjustmentItemList']['FieldValue'][] = $AdjustmentItemList;
        }
        return $this;
    }
}
