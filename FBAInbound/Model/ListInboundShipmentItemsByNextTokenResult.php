<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * ListInboundShipmentItemsByNextTokenResult
 *
 * Properties:
 * <ul>
 *
 * <li>ItemData: InboundShipmentItemList</li>
 * <li>NextToken: string</li>
 *
 * </ul>
 */

 class ListInboundShipmentItemsByNextTokenResult extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ItemData' => array('FieldValue' => null, 'FieldType' => 'InboundShipmentItemList'),
    'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ItemData property.
     *
     * @return InboundShipmentItemList ItemData.
     */
    public function getItemData()
    {
        return $this->_fields['ItemData']['FieldValue'];
    }

    /**
     * Set the value of the ItemData property.
     *
     * @param InboundShipmentItemList itemData
     * @return this instance
     */
    public function setItemData($value)
    {
        $this->_fields['ItemData']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ItemData is set.
     *
     * @return true if ItemData is set.
     */
    public function isSetItemData()
    {
                return !is_null($this->_fields['ItemData']['FieldValue']);
            }

    /**
     * Set the value of ItemData, return this.
     *
     * @param itemData
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withItemData($value)
    {
        $this->setItemData($value);
        return $this;
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

}
