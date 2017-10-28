<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * LowestPrices
 *
 * Properties:
 * <ul>
 * <li>LowestPrice: array</li>
 * </ul>
 */
class LowestPrices extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'LowestPrice' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\LowestPriceType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestPrice property.
     *
     * @return List<LowestPriceType> LowestPrice.
     */
    public function getLowestPrice()
    {
        if ($this->_fields['LowestPrice']['FieldValue'] == null) {
            $this->_fields['LowestPrice']['FieldValue'] = array();
        }
        return $this->_fields['LowestPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestPrice property.
     *
     * @param array lowestPrice
     * @return this instance
     */
    public function setLowestPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['LowestPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear LowestPrice.
     */
    public function unsetLowestPrice()
    {
        $this->_fields['LowestPrice']['FieldValue'] = array();
    }

    /**
     * Check to see if LowestPrice is set.
     *
     * @return true if LowestPrice is set.
     */
    public function isSetLowestPrice()
    {
        return !empty($this->_fields['LowestPrice']['FieldValue']);
    }

    /**
     * Add values for LowestPrice, return this.
     *
     * @param lowestPrice
     *             New values to add.
     *
     * @return This instance.
     */
    public function withLowestPrice()
    {
        foreach (func_get_args() as $LowestPrice) {
            $this->_fields['LowestPrice']['FieldValue'][] = $LowestPrice;
        }
        return $this;
    }
}
