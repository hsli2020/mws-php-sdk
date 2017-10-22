<?php

namespace Amazon\MWS\FBAOutbound\Model;


/**
 * ListAllFulfillmentOrdersByNextTokenResult
 *
 * Properties:
 * <ul>
 *
 * <li>NextToken: string</li>
 * <li>FulfillmentOrders: FulfillmentOrderList</li>
 *
 * </ul>
 */

 class ListAllFulfillmentOrdersByNextTokenResult extends FBAOutboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FulfillmentOrders' => array('FieldValue' => null, 'FieldType' => 'FulfillmentOrderList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
                return !is_null($this->_fields['NextToken']['FieldValue']);
            }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }

    /**
     * Get the value of the FulfillmentOrders property.
     *
     * @return FulfillmentOrderList FulfillmentOrders.
     */
    public function getFulfillmentOrders()
    {
        return $this->_fields['FulfillmentOrders']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentOrders property.
     *
     * @param FulfillmentOrderList fulfillmentOrders
     * @return this instance
     */
    public function setFulfillmentOrders($value)
    {
        $this->_fields['FulfillmentOrders']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentOrders is set.
     *
     * @return true if FulfillmentOrders is set.
     */
    public function isSetFulfillmentOrders()
    {
                return !is_null($this->_fields['FulfillmentOrders']['FieldValue']);
            }

    /**
     * Set the value of FulfillmentOrders, return this.
     *
     * @param fulfillmentOrders
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentOrders($value)
    {
        $this->setFulfillmentOrders($value);
        return $this;
    }

}
