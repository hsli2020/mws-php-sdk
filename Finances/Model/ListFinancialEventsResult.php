<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * ListFinancialEventsResult
 *
 * Properties:
 * <ul>
 * <li>NextToken: string</li>
 * <li>FinancialEvents: FinancialEvents</li>
 * </ul>
 */
class ListFinancialEventsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'NextToken'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'FinancialEvents' => array('FieldValue' => null, 'FieldType' => 'FinancialEvents'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

    /**
     * Get the value of the FinancialEvents property.
     *
     * @return FinancialEvents FinancialEvents.
     */
    public function getFinancialEvents()
    {
        return $this->_fields['FinancialEvents']['FieldValue'];
    }

    /**
     * Set the value of the FinancialEvents property.
     *
     * @param FinancialEvents financialEvents
     * @return this instance
     */
    public function setFinancialEvents($value)
    {
        $this->_fields['FinancialEvents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FinancialEvents is set.
     *
     * @return true if FinancialEvents is set.
     */
    public function isSetFinancialEvents()
    {
        return !is_null($this->_fields['FinancialEvents']['FieldValue']);
    }

    /**
     * Set the value of FinancialEvents, return this.
     *
     * @param financialEvents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFinancialEvents($value)
    {
        $this->setFinancialEvents($value);
        return $this;
    }
}
