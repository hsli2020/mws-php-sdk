<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * Pallet
 *
 * Properties:
 * <ul>
 *
 * <li>Dimensions: Dimensions</li>
 * <li>Weight: Weight</li>
 * <li>IsStacked: bool</li>
 *
 * </ul>
 */

 class Pallet extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Dimensions' => array('FieldValue' => null, 'FieldType' => 'Dimensions'),
    'Weight' => array('FieldValue' => null, 'FieldType' => 'Weight'),
    'IsStacked' => array('FieldValue' => null, 'FieldType' => 'bool'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return Dimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param Dimensions dimensions
     * @return this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set.
     */
    public function isSetDimensions()
    {
                return !is_null($this->_fields['Dimensions']['FieldValue']);
            }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }

    /**
     * Get the value of the Weight property.
     *
     * @return Weight Weight.
     */
    public function getWeight()
    {
        return $this->_fields['Weight']['FieldValue'];
    }

    /**
     * Set the value of the Weight property.
     *
     * @param Weight weight
     * @return this instance
     */
    public function setWeight($value)
    {
        $this->_fields['Weight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Weight is set.
     *
     * @return true if Weight is set.
     */
    public function isSetWeight()
    {
                return !is_null($this->_fields['Weight']['FieldValue']);
            }

    /**
     * Set the value of Weight, return this.
     *
     * @param weight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withWeight($value)
    {
        $this->setWeight($value);
        return $this;
    }

    /**
     * Check the value of IsStacked.
     *
     * @return true if IsStacked is set to true.
     */
    public function isIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Get the value of the IsStacked property.
     *
     * @return boolean IsStacked.
     */
    public function getIsStacked()
    {
        return $this->_fields['IsStacked']['FieldValue'];
    }

    /**
     * Set the value of the IsStacked property.
     *
     * @param bool isStacked
     * @return this instance
     */
    public function setIsStacked($value)
    {
        $this->_fields['IsStacked']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsStacked is set.
     *
     * @return true if IsStacked is set.
     */
    public function isSetIsStacked()
    {
                return !is_null($this->_fields['IsStacked']['FieldValue']);
            }

    /**
     * Set the value of IsStacked, return this.
     *
     * @param isStacked
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withIsStacked($value)
    {
        $this->setIsStacked($value);
        return $this;
    }

}
