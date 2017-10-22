<?php

namespace Amazon\MWS\Products\Model;


/**
 * ShippingTimeType
 *
 * Properties:
 * <ul>
 *
 * <li>Max: string</li>
 *
 * </ul>
 */

 class ShippingTimeType extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Max' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Max property.
     *
     * @return String Max.
     */
    public function getMax()
    {
        return $this->_fields['Max']['FieldValue'];
    }

    /**
     * Set the value of the Max property.
     *
     * @param string max
     * @return this instance
     */
    public function setMax($value)
    {
        $this->_fields['Max']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Max is set.
     *
     * @return true if Max is set.
     */
    public function isSetMax()
    {
                return !is_null($this->_fields['Max']['FieldValue']);
            }

    /**
     * Set the value of Max, return this.
     *
     * @param max
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMax($value)
    {
        $this->setMax($value);
        return $this;
    }

}
