<?php

namespace Amazon\MWS\MerchantFulfillment\Model;

use Amazon\MWS\MerchantFulfillment\Model;

/**
 * ShippingServiceOptions
 *
 * Properties:
 * <ul>
 * <li>DeliveryExperience: string</li>
 * <li>DeclaredValue: CurrencyAmount</li>
 * <li>CarrierWillPickUp: bool</li>
 * </ul>
 */
class ShippingServiceOptions extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DeliveryExperience' => array('FieldValue' => null, 'FieldType' => 'string'),
            'DeclaredValue'      => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\CurrencyAmount'),
            'CarrierWillPickUp'  => array('FieldValue' => null, 'FieldType' => 'bool'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryExperience property.
     *
     * @return String DeliveryExperience.
     */
    public function getDeliveryExperience()
    {
        return $this->_fields['DeliveryExperience']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryExperience property.
     *
     * @param string deliveryExperience
     * @return this instance
     */
    public function setDeliveryExperience($value)
    {
        $this->_fields['DeliveryExperience']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryExperience is set.
     *
     * @return true if DeliveryExperience is set.
     */
    public function isSetDeliveryExperience()
    {
        return !is_null($this->_fields['DeliveryExperience']['FieldValue']);
    }

    /**
     * Set the value of DeliveryExperience, return this.
     *
     * @param deliveryExperience
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryExperience($value)
    {
        $this->setDeliveryExperience($value);
        return $this;
    }

    /**
     * Get the value of the DeclaredValue property.
     *
     * @return CurrencyAmount DeclaredValue.
     */
    public function getDeclaredValue()
    {
        return $this->_fields['DeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the DeclaredValue property.
     *
     * @param CurrencyAmount declaredValue
     * @return this instance
     */
    public function setDeclaredValue($value)
    {
        $this->_fields['DeclaredValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeclaredValue is set.
     *
     * @return true if DeclaredValue is set.
     */
    public function isSetDeclaredValue()
    {
        return !is_null($this->_fields['DeclaredValue']['FieldValue']);
    }

    /**
     * Set the value of DeclaredValue, return this.
     *
     * @param declaredValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeclaredValue($value)
    {
        $this->setDeclaredValue($value);
        return $this;
    }

    /**
     * Check the value of CarrierWillPickUp.
     *
     * @return true if CarrierWillPickUp is set to true.
     */
    public function isCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return boolean CarrierWillPickUp.
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param bool carrierWillPickUp
     * @return this instance
     */
    public function setCarrierWillPickUp($value)
    {
        $this->_fields['CarrierWillPickUp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierWillPickUp is set.
     *
     * @return true if CarrierWillPickUp is set.
     */
    public function isSetCarrierWillPickUp()
    {
        return !is_null($this->_fields['CarrierWillPickUp']['FieldValue']);
    }

    /**
     * Set the value of CarrierWillPickUp, return this.
     *
     * @param carrierWillPickUp
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierWillPickUp($value)
    {
        $this->setCarrierWillPickUp($value);
        return $this;
    }
}
