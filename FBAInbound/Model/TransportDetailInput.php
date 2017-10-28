<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * TransportDetailInput
 *
 * Properties:
 * <ul>
 * <li>PartneredSmallParcelData: PartneredSmallParcelDataInput</li>
 * <li>NonPartneredSmallParcelData: NonPartneredSmallParcelDataInput</li>
 * <li>PartneredLtlData: PartneredLtlDataInput</li>
 * <li>NonPartneredLtlData: NonPartneredLtlDataInput</li>
 * </ul>
 */
class TransportDetailInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'PartneredSmallParcelData'    => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\PartneredSmallParcelDataInput'),
            'NonPartneredSmallParcelData' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\NonPartneredSmallParcelDataInput'),
            'PartneredLtlData'            => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\PartneredLtlDataInput'),
            'NonPartneredLtlData'         => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\NonPartneredLtlDataInput'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the PartneredSmallParcelData property.
     *
     * @return PartneredSmallParcelDataInput PartneredSmallParcelData.
     */
    public function getPartneredSmallParcelData()
    {
        return $this->_fields['PartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredSmallParcelData property.
     *
     * @param PartneredSmallParcelDataInput partneredSmallParcelData
     * @return this instance
     */
    public function setPartneredSmallParcelData($value)
    {
        $this->_fields['PartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredSmallParcelData is set.
     *
     * @return true if PartneredSmallParcelData is set.
     */
    public function isSetPartneredSmallParcelData()
    {
        return !is_null($this->_fields['PartneredSmallParcelData']['FieldValue']);
    }

    /**
     * Set the value of PartneredSmallParcelData, return this.
     *
     * @param partneredSmallParcelData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredSmallParcelData($value)
    {
        $this->setPartneredSmallParcelData($value);
        return $this;
    }

    /**
     * Get the value of the NonPartneredSmallParcelData property.
     *
     * @return NonPartneredSmallParcelDataInput NonPartneredSmallParcelData.
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->_fields['NonPartneredSmallParcelData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredSmallParcelData property.
     *
     * @param NonPartneredSmallParcelDataInput nonPartneredSmallParcelData
     * @return this instance
     */
    public function setNonPartneredSmallParcelData($value)
    {
        $this->_fields['NonPartneredSmallParcelData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NonPartneredSmallParcelData is set.
     *
     * @return true if NonPartneredSmallParcelData is set.
     */
    public function isSetNonPartneredSmallParcelData()
    {
        return !is_null($this->_fields['NonPartneredSmallParcelData']['FieldValue']);
    }

    /**
     * Set the value of NonPartneredSmallParcelData, return this.
     *
     * @param nonPartneredSmallParcelData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNonPartneredSmallParcelData($value)
    {
        $this->setNonPartneredSmallParcelData($value);
        return $this;
    }

    /**
     * Get the value of the PartneredLtlData property.
     *
     * @return PartneredLtlDataInput PartneredLtlData.
     */
    public function getPartneredLtlData()
    {
        return $this->_fields['PartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the PartneredLtlData property.
     *
     * @param PartneredLtlDataInput partneredLtlData
     * @return this instance
     */
    public function setPartneredLtlData($value)
    {
        $this->_fields['PartneredLtlData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredLtlData is set.
     *
     * @return true if PartneredLtlData is set.
     */
    public function isSetPartneredLtlData()
    {
        return !is_null($this->_fields['PartneredLtlData']['FieldValue']);
    }

    /**
     * Set the value of PartneredLtlData, return this.
     *
     * @param partneredLtlData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredLtlData($value)
    {
        $this->setPartneredLtlData($value);
        return $this;
    }

    /**
     * Get the value of the NonPartneredLtlData property.
     *
     * @return NonPartneredLtlDataInput NonPartneredLtlData.
     */
    public function getNonPartneredLtlData()
    {
        return $this->_fields['NonPartneredLtlData']['FieldValue'];
    }

    /**
     * Set the value of the NonPartneredLtlData property.
     *
     * @param NonPartneredLtlDataInput nonPartneredLtlData
     * @return this instance
     */
    public function setNonPartneredLtlData($value)
    {
        $this->_fields['NonPartneredLtlData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NonPartneredLtlData is set.
     *
     * @return true if NonPartneredLtlData is set.
     */
    public function isSetNonPartneredLtlData()
    {
        return !is_null($this->_fields['NonPartneredLtlData']['FieldValue']);
    }

    /**
     * Set the value of NonPartneredLtlData, return this.
     *
     * @param nonPartneredLtlData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNonPartneredLtlData($value)
    {
        $this->setNonPartneredLtlData($value);
        return $this;
    }
}
