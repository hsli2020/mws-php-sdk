<?php

namespace Amazon\MWS\FBAOutbound\Model;


/**
 * GetFulfillmentOrderResult
 *
 * Properties:
 * <ul>
 *
 * <li>FulfillmentOrder: FulfillmentOrder</li>
 * <li>FulfillmentOrderItem: FulfillmentOrderItemList</li>
 * <li>FulfillmentShipment: FulfillmentShipmentList</li>
 *
 * </ul>
 */

 class GetFulfillmentOrderResult extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FulfillmentOrder' => array('FieldValue' => null, 'FieldType' => 'FulfillmentOrder'),
    'FulfillmentOrderItem' => array('FieldValue' => null, 'FieldType' => 'FulfillmentOrderItemList'),
    'FulfillmentShipment' => array('FieldValue' => null, 'FieldType' => 'FulfillmentShipmentList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentOrder property.
     *
     * @return FulfillmentOrder FulfillmentOrder.
     */
    public function getFulfillmentOrder()
    {
        return $this->_fields['FulfillmentOrder']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrder property.
     *
     * @param FulfillmentOrder fulfillmentOrder
     * @return this instance
     */
    public function setFulfillmentOrder($value)
    {
        $this->_fields['FulfillmentOrder']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrder is set.
     *
     * @return true if FulfillmentOrder is set.
     */
    public function isSetFulfillmentOrder()
    {
                return !is_null($this->_fields['FulfillmentOrder']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentOrder, return this.
     *
     * @param fulfillmentOrder
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentOrder($value)
    {
        $this->setFulfillmentOrder($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentOrderItem property.
     *
     * @return FulfillmentOrderItemList FulfillmentOrderItem.
     */
    public function getFulfillmentOrderItem()
    {
        return $this->_fields['FulfillmentOrderItem']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrderItem property.
     *
     * @param FulfillmentOrderItemList fulfillmentOrderItem
     * @return this instance
     */
    public function setFulfillmentOrderItem($value)
    {
        $this->_fields['FulfillmentOrderItem']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrderItem is set.
     *
     * @return true if FulfillmentOrderItem is set.
     */
    public function isSetFulfillmentOrderItem()
    {
                return !is_null($this->_fields['FulfillmentOrderItem']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentOrderItem, return this.
     *
     * @param fulfillmentOrderItem
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentOrderItem($value)
    {
        $this->setFulfillmentOrderItem($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentShipment property.
     *
     * @return FulfillmentShipmentList FulfillmentShipment.
     */
    public function getFulfillmentShipment()
    {
        return $this->_fields['FulfillmentShipment']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentShipment property.
     *
     * @param FulfillmentShipmentList fulfillmentShipment
     * @return this instance
     */
    public function setFulfillmentShipment($value)
    {
        $this->_fields['FulfillmentShipment']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentShipment is set.
     *
     * @return true if FulfillmentShipment is set.
     */
    public function isSetFulfillmentShipment()
    {
                return !is_null($this->_fields['FulfillmentShipment']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentShipment, return this.
     *
     * @param fulfillmentShipment
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentShipment($value)
    {
        $this->setFulfillmentShipment($value);
        return $this;
    }

}
