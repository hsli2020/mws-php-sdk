<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * PartneredSmallParcelPackageOutput
 *
 * Properties:
 * <ul>
 * <li>Dimensions: Dimensions</li>
 * <li>Weight: Weight</li>
 * <li>CarrierName: string</li>
 * <li>TrackingId: string</li>
 * <li>PackageStatus: string</li>
 * </ul>
 */
class PartneredSmallParcelPackageOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Dimensions'    => array('FieldValue' => null, 'FieldType' => 'Dimensions'),
            'Weight'        => array('FieldValue' => null, 'FieldType' => 'Weight'),
            'CarrierName'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'TrackingId'    => array('FieldValue' => null, 'FieldType' => 'string'),
            'PackageStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the TrackingId property.
     *
     * @return String TrackingId.
     */
    public function getTrackingId()
    {
        return $this->_fields['TrackingId']['FieldValue'];
    }

    /**
     * Set the value of the TrackingId property.
     *
     * @param string trackingId
     * @return this instance
     */
    public function setTrackingId($value)
    {
        $this->_fields['TrackingId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if TrackingId is set.
     *
     * @return true if TrackingId is set.
     */
    public function isSetTrackingId()
    {
        return !is_null($this->_fields['TrackingId']['FieldValue']);
    }

    /**
     * Set the value of TrackingId, return this.
     *
     * @param trackingId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withTrackingId($value)
    {
        $this->setTrackingId($value);
        return $this;
    }

    /**
     * Get the value of the PackageStatus property.
     *
     * @return String PackageStatus.
     */
    public function getPackageStatus()
    {
        return $this->_fields['PackageStatus']['FieldValue'];
    }

    /**
     * Set the value of the PackageStatus property.
     *
     * @param string packageStatus
     * @return this instance
     */
    public function setPackageStatus($value)
    {
        $this->_fields['PackageStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageStatus is set.
     *
     * @return true if PackageStatus is set.
     */
    public function isSetPackageStatus()
    {
        return !is_null($this->_fields['PackageStatus']['FieldValue']);
    }

    /**
     * Set the value of PackageStatus, return this.
     *
     * @param packageStatus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageStatus($value)
    {
        $this->setPackageStatus($value);
        return $this;
    }
}
