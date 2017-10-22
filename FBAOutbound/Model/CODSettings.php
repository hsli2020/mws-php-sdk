<?php

namespace Amazon\MWS\FBAOutbound\Model;

/**
 * CODSettings
 *
 * Properties:
 * <ul>
 * <li>IsCODRequired: bool</li>
 * <li>CODCharge: Currency</li>
 * <li>CODChargeTax: Currency</li>
 * <li>ShippingCharge: Currency</li>
 * <li>ShippingChargeTax: Currency</li>
 * </ul>
 */
class CODSettings extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'IsCODRequired' => array('FieldValue' => null, 'FieldType' => 'bool'),
    'CODCharge' => array('FieldValue' => null, 'FieldType' => 'Currency'),
    'CODChargeTax' => array('FieldValue' => null, 'FieldType' => 'Currency'),
    'ShippingCharge' => array('FieldValue' => null, 'FieldType' => 'Currency'),
    'ShippingChargeTax' => array('FieldValue' => null, 'FieldType' => 'Currency'),
    );
    parent::__construct($data);
    }

    /**
     * Check the value of IsCODRequired.
     *
     * @return true if IsCODRequired is set to true.
     */
    public function isIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }

    /**
     * Get the value of the IsCODRequired property.
     *
     * @return boolean IsCODRequired.
     */
    public function getIsCODRequired()
    {
        return $this->_fields['IsCODRequired']['FieldValue'];
    }

    /**
     * Set the value of the IsCODRequired property.
     *
     * @param bool isCODRequired
     * @return this instance
     */
    public function setIsCODRequired($value)
    {
        $this->_fields['IsCODRequired']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsCODRequired is set.
     *
     * @return true if IsCODRequired is set.
     */
    public function isSetIsCODRequired()
    {
                return !is_null($this->_fields['IsCODRequired']['FieldValue']);
            }

    /**
     * Set the value of IsCODRequired, return this.
     *
     * @param isCODRequired
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsCODRequired($value)
    {
        $this->setIsCODRequired($value);
        return $this;
    }

    /**
     * Get the value of the CODCharge property.
     *
     * @return Currency CODCharge.
     */
    public function getCODCharge()
    {
        return $this->_fields['CODCharge']['FieldValue'];
    }

    /**
     * Set the value of the CODCharge property.
     *
     * @param Currency codCharge
     * @return this instance
     */
    public function setCODCharge($value)
    {
        $this->_fields['CODCharge']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CODCharge is set.
     *
     * @return true if CODCharge is set.
     */
    public function isSetCODCharge()
    {
                return !is_null($this->_fields['CODCharge']['FieldValue']);
            }

    /**
     * Set the value of CODCharge, return this.
     *
     * @param codCharge
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCODCharge($value)
    {
        $this->setCODCharge($value);
        return $this;
    }

    /**
     * Get the value of the CODChargeTax property.
     *
     * @return Currency CODChargeTax.
     */
    public function getCODChargeTax()
    {
        return $this->_fields['CODChargeTax']['FieldValue'];
    }

    /**
     * Set the value of the CODChargeTax property.
     *
     * @param Currency codChargeTax
     * @return this instance
     */
    public function setCODChargeTax($value)
    {
        $this->_fields['CODChargeTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CODChargeTax is set.
     *
     * @return true if CODChargeTax is set.
     */
    public function isSetCODChargeTax()
    {
                return !is_null($this->_fields['CODChargeTax']['FieldValue']);
            }

    /**
     * Set the value of CODChargeTax, return this.
     *
     * @param codChargeTax
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCODChargeTax($value)
    {
        $this->setCODChargeTax($value);
        return $this;
    }

    /**
     * Get the value of the ShippingCharge property.
     *
     * @return Currency ShippingCharge.
     */
    public function getShippingCharge()
    {
        return $this->_fields['ShippingCharge']['FieldValue'];
    }

    /**
     * Set the value of the ShippingCharge property.
     *
     * @param Currency shippingCharge
     * @return this instance
     */
    public function setShippingCharge($value)
    {
        $this->_fields['ShippingCharge']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingCharge is set.
     *
     * @return true if ShippingCharge is set.
     */
    public function isSetShippingCharge()
    {
                return !is_null($this->_fields['ShippingCharge']['FieldValue']);
            }

    /**
     * Set the value of ShippingCharge, return this.
     *
     * @param shippingCharge
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingCharge($value)
    {
        $this->setShippingCharge($value);
        return $this;
    }

    /**
     * Get the value of the ShippingChargeTax property.
     *
     * @return Currency ShippingChargeTax.
     */
    public function getShippingChargeTax()
    {
        return $this->_fields['ShippingChargeTax']['FieldValue'];
    }

    /**
     * Set the value of the ShippingChargeTax property.
     *
     * @param Currency shippingChargeTax
     * @return this instance
     */
    public function setShippingChargeTax($value)
    {
        $this->_fields['ShippingChargeTax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingChargeTax is set.
     *
     * @return true if ShippingChargeTax is set.
     */
    public function isSetShippingChargeTax()
    {
                return !is_null($this->_fields['ShippingChargeTax']['FieldValue']);
            }

    /**
     * Set the value of ShippingChargeTax, return this.
     *
     * @param shippingChargeTax
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingChargeTax($value)
    {
        $this->setShippingChargeTax($value);
        return $this;
    }

}
