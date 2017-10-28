<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;


/**
 * CompetitivePricingType
 *
 * Properties:
 * <ul>
 * <li>CompetitivePrices: CompetitivePriceList</li>
 * <li>NumberOfOfferListings: NumberOfOfferListingsList</li>
 * <li>TradeInValue: MoneyType</li>
 * </ul>
 */
class CompetitivePricingType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'CompetitivePrices'     => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\CompetitivePriceList'),
            'NumberOfOfferListings' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\NumberOfOfferListingsList'),
            'TradeInValue'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\MoneyType'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CompetitivePrices property.
     *
     * @return CompetitivePriceList CompetitivePrices.
     */
    public function getCompetitivePrices()
    {
        return $this->_fields['CompetitivePrices']['FieldValue'];
    }

    /**
     * Set the value of the CompetitivePrices property.
     *
     * @param CompetitivePriceList competitivePrices
     * @return this instance
     */
    public function setCompetitivePrices($value)
    {
        $this->_fields['CompetitivePrices']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CompetitivePrices is set.
     *
     * @return true if CompetitivePrices is set.
     */
    public function isSetCompetitivePrices()
    {
        return !is_null($this->_fields['CompetitivePrices']['FieldValue']);
    }

    /**
     * Set the value of CompetitivePrices, return this.
     *
     * @param competitivePrices
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCompetitivePrices($value)
    {
        $this->setCompetitivePrices($value);
        return $this;
    }

    /**
     * Get the value of the NumberOfOfferListings property.
     *
     * @return NumberOfOfferListingsList NumberOfOfferListings.
     */
    public function getNumberOfOfferListings()
    {
        return $this->_fields['NumberOfOfferListings']['FieldValue'];
    }

    /**
     * Set the value of the NumberOfOfferListings property.
     *
     * @param NumberOfOfferListingsList numberOfOfferListings
     * @return this instance
     */
    public function setNumberOfOfferListings($value)
    {
        $this->_fields['NumberOfOfferListings']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NumberOfOfferListings is set.
     *
     * @return true if NumberOfOfferListings is set.
     */
    public function isSetNumberOfOfferListings()
    {
        return !is_null($this->_fields['NumberOfOfferListings']['FieldValue']);
    }

    /**
     * Set the value of NumberOfOfferListings, return this.
     *
     * @param numberOfOfferListings
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNumberOfOfferListings($value)
    {
        $this->setNumberOfOfferListings($value);
        return $this;
    }

    /**
     * Get the value of the TradeInValue property.
     *
     * @return MoneyType TradeInValue.
     */
    public function getTradeInValue()
    {
        return $this->_fields['TradeInValue']['FieldValue'];
    }

    /**
     * Set the value of the TradeInValue property.
     *
     * @param MoneyType tradeInValue
     * @return this instance
     */
    public function setTradeInValue($value)
    {
        $this->_fields['TradeInValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TradeInValue is set.
     *
     * @return true if TradeInValue is set.
     */
    public function isSetTradeInValue()
    {
        return !is_null($this->_fields['TradeInValue']['FieldValue']);
    }

    /**
     * Set the value of TradeInValue, return this.
     *
     * @param tradeInValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTradeInValue($value)
    {
        $this->setTradeInValue($value);
        return $this;
    }
}
