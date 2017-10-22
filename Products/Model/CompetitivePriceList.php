<?php

namespace Amazon\MWS\Products\Model;


/**
 * CompetitivePriceList
 *
 * Properties:
 * <ul>
 *
 * <li>CompetitivePrice: array</li>
 *
 * </ul>
 */

 class CompetitivePriceList extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'CompetitivePrice' => array('FieldValue' => array(), 'FieldType' => array('CompetitivePriceType')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the CompetitivePrice property.
     *
     * @return List<CompetitivePriceType> CompetitivePrice.
     */
    public function getCompetitivePrice()
    {
        if ($this->_fields['CompetitivePrice']['FieldValue'] == null)
        {
            $this->_fields['CompetitivePrice']['FieldValue'] = array();
        }
        return $this->_fields['CompetitivePrice']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePrice property.
     *
     * @param array competitivePrice
     * @return this instance
     */
    public function setCompetitivePrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['CompetitivePrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear CompetitivePrice.
     */
    public function unsetCompetitivePrice()
    {
        $this->_fields['CompetitivePrice']['FieldValue'] = array();
    }

    /**
     * Check to see if CompetitivePrice is set.
     *
     * @return true if CompetitivePrice is set.
     */
    public function isSetCompetitivePrice()
    {
                return !empty($this->_fields['CompetitivePrice']['FieldValue']);
            }

    /**
     * Add values for CompetitivePrice, return this.
     *
     * @param competitivePrice
     *             New values to add.
     *
     * @return This instance.
     */
    public function withCompetitivePrice()
    {
        foreach (func_get_args() as $CompetitivePrice)
        {
            $this->_fields['CompetitivePrice']['FieldValue'][] = $CompetitivePrice;
        }
        return $this;
    }

}
