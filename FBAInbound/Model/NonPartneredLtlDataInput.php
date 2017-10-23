<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * NonPartneredLtlDataInput
 *
 * Properties:
 * <ul>
 * <li>CarrierName: string</li>
 * <li>ProNumber: string</li>
 * </ul>
 */
class NonPartneredLtlDataInput extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'CarrierName' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ProNumber'   => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * Get the value of the ProNumber property.
     *
     * @return String ProNumber.
     */
    public function getProNumber()
    {
        return $this->_fields['ProNumber']['FieldValue'];
    }

    /**
     * Set the value of the ProNumber property.
     *
     * @param string proNumber
     * @return this instance
     */
    public function setProNumber($value)
    {
        $this->_fields['ProNumber']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ProNumber is set.
     *
     * @return true if ProNumber is set.
     */
    public function isSetProNumber()
    {
        return !is_null($this->_fields['ProNumber']['FieldValue']);
    }

    /**
     * Set the value of ProNumber, return this.
     *
     * @param proNumber
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProNumber($value)
    {
        $this->setProNumber($value);
        return $this;
    }
}
