<?php

namespace Amazon\MWS\Products\Model;


/**
 * BuyBoxPrices
 *
 * Properties:
 * <ul>
 *
 * <li>BuyBoxPrice: array</li>
 *
 * </ul>
 */

 class BuyBoxPrices extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'BuyBoxPrice' => array('FieldValue' => array(), 'FieldType' => array('BuyBoxPriceType')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the BuyBoxPrice property.
     *
     * @return List<BuyBoxPriceType> BuyBoxPrice.
     */
    public function getBuyBoxPrice()
    {
        if ($this->_fields['BuyBoxPrice']['FieldValue'] == null)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'] = array();
        }
        return $this->_fields['BuyBoxPrice']['FieldValue'];
    }

    /**
     * Set the value of the BuyBoxPrice property.
     *
     * @param array buyBoxPrice
     * @return this instance
     */
    public function setBuyBoxPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['BuyBoxPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear BuyBoxPrice.
     */
    public function unsetBuyBoxPrice()
    {
        $this->_fields['BuyBoxPrice']['FieldValue'] = array();
    }

    /**
     * Check to see if BuyBoxPrice is set.
     *
     * @return true if BuyBoxPrice is set.
     */
    public function isSetBuyBoxPrice()
    {
                return !empty($this->_fields['BuyBoxPrice']['FieldValue']);
            }

    /**
     * Add values for BuyBoxPrice, return this.
     *
     * @param buyBoxPrice
     *             New values to add.
     *
     * @return This instance.
     */
    public function withBuyBoxPrice()
    {
        foreach (func_get_args() as $BuyBoxPrice)
        {
            $this->_fields['BuyBoxPrice']['FieldValue'][] = $BuyBoxPrice;
        }
        return $this;
    }

}
