<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * NonPartneredSmallParcelPackageOutput
 *
 * Properties:
 * <ul>
 * <li>CarrierName: string</li>
 * <li>TrackingId: string</li>
 * <li>PackageStatus: string</li>
 * </ul>
 */
class NonPartneredSmallParcelPackageOutput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'CarrierName'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'TrackingId'    => array('FieldValue' => null, 'FieldType' => 'string'),
            'PackageStatus' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
