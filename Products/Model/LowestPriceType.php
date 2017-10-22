<?php

namespace Amazon\MWS\Products\Model;


/**
 * LowestPriceType
 *
 * Properties:
 * <ul>
 *
 * <li>condition: string</li>
 * <li>fulfillmentChannel: string</li>
 * <li>LandedPrice: MoneyType</li>
 * <li>ListingPrice: MoneyType</li>
 * <li>Shipping: MoneyType</li>
 * <li>Points: Points</li>
 *
 * </ul>
 */

 class LowestPriceType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'condition' => array('FieldValue' => null, 'FieldType' => '@string'),
    'fulfillmentChannel' => array('FieldValue' => null, 'FieldType' => '@string'),
    'LandedPrice' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'Shipping' => array('FieldValue' => null, 'FieldType' => 'MoneyType'),
    'Points' => array('FieldValue' => null, 'FieldType' => 'Points'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the condition property.
     *
     * @return String condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return this instance
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set.
     */
    public function isSetcondition()
    {
                return !is_null($this->_fields['condition']['FieldValue']);
            }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withcondition($value)
    {
        $this->setcondition($value);
        return $this;
    }

    /**
     * Get the value of the fulfillmentChannel property.
     *
     * @return String fulfillmentChannel.
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return this instance
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set.
     */
    public function isSetfulfillmentChannel()
    {
                return !is_null($this->_fields['fulfillmentChannel']['FieldValue']);
            }

    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withfulfillmentChannel($value)
    {
        $this->setfulfillmentChannel($value);
        return $this;
    }

    /**
     * Get the value of the LandedPrice property.
     *
     * @return MoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Set the value of the LandedPrice property.
     *
     * @param MoneyType landedPrice
     * @return this instance
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
                return !is_null($this->_fields['LandedPrice']['FieldValue']);
            }

    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MoneyType listingPrice
     * @return this instance
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
                return !is_null($this->_fields['ListingPrice']['FieldValue']);
            }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MoneyType shipping
     * @return this instance
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
                return !is_null($this->_fields['Shipping']['FieldValue']);
            }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }

    /**
     * Get the value of the Points property.
     *
     * @return Points Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }

    /**
     * Set the value of the Points property.
     *
     * @param Points points
     * @return this instance
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
                return !is_null($this->_fields['Points']['FieldValue']);
            }

    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPoints($value)
    {
        $this->setPoints($value);
        return $this;
    }

}
