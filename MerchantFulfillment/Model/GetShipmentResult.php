<?php

namespace Amazon\MWS\MerchantFulfillment\Model;


/**
 * GetShipmentResult
 *
 * Properties:
 * <ul>
 *
 * <li>Shipment: Shipment</li>
 *
 * </ul>
 */

 class GetShipmentResult extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Shipment' => array('FieldValue' => null, 'FieldType' => 'Shipment'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Shipment property.
     *
     * @return Shipment Shipment.
     */
    public function getShipment()
    {
        return $this->_fields['Shipment']['FieldValue'];
    }

    /**
     * Set the value of the Shipment property.
     *
     * @param Shipment shipment
     * @return this instance
     */
    public function setShipment($value)
    {
        $this->_fields['Shipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Shipment is set.
     *
     * @return true if Shipment is set.
     */
    public function isSetShipment()
    {
                return !is_null($this->_fields['Shipment']['FieldValue']);
            }

    /**
     * Set the value of Shipment, return this.
     *
     * @param shipment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipment($value)
    {
        $this->setShipment($value);
        return $this;
    }

}
