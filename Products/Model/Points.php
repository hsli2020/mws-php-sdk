<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * Points
 *
 * Properties:
 * <ul>
 * <li>PointsNumber: int</li>
 * <li>PointsMonetaryValue: MoneyType</li>
 * </ul>
 */
class Points extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'PointsNumber'        => array('FieldValue' => null, 'FieldType' => 'int'),
            'PointsMonetaryValue' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the PointsNumber property.
     *
     * @return Integer PointsNumber.
     */
    public function getPointsNumber()
    {
        return $this->_fields['PointsNumber']['FieldValue'];
    }

    /**
     * Set the value of the PointsNumber property.
     *
     * @param int pointsNumber
     * @return this instance
     */
    public function setPointsNumber($value)
    {
        $this->_fields['PointsNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PointsNumber is set.
     *
     * @return true if PointsNumber is set.
     */
    public function isSetPointsNumber()
    {
        return !is_null($this->_fields['PointsNumber']['FieldValue']);
    }

    /**
     * Set the value of PointsNumber, return this.
     *
     * @param pointsNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPointsNumber($value)
    {
        $this->setPointsNumber($value);
        return $this;
    }

    /**
     * Get the value of the PointsMonetaryValue property.
     *
     * @return MoneyType PointsMonetaryValue.
     */
    public function getPointsMonetaryValue()
    {
        return $this->_fields['PointsMonetaryValue']['FieldValue'];
    }

    /**
     * Set the value of the PointsMonetaryValue property.
     *
     * @param MoneyType pointsMonetaryValue
     * @return this instance
     */
    public function setPointsMonetaryValue($value)
    {
        $this->_fields['PointsMonetaryValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PointsMonetaryValue is set.
     *
     * @return true if PointsMonetaryValue is set.
     */
    public function isSetPointsMonetaryValue()
    {
        return !is_null($this->_fields['PointsMonetaryValue']['FieldValue']);
    }

    /**
     * Set the value of PointsMonetaryValue, return this.
     *
     * @param pointsMonetaryValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPointsMonetaryValue($value)
    {
        $this->setPointsMonetaryValue($value);
        return $this;
    }
}
