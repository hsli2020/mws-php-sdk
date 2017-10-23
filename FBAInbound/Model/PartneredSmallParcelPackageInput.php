<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * PartneredSmallParcelPackageInput
 *
 * Properties:
 * <ul>
 * <li>Dimensions: Dimensions</li>
 * <li>Weight: Weight</li>
 * </ul>
 */
class PartneredSmallParcelPackageInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Dimensions' => array('FieldValue' => null, 'FieldType' => 'Dimensions'),
            'Weight'     => array('FieldValue' => null, 'FieldType' => 'Weight'),
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
}
