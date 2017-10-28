<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetPrepInstructionsForSKUResult
 *
 * Properties:
 * <ul>
 * <li>SKUPrepInstructionsList: SKUPrepInstructionsList</li>
 * <li>InvalidSKUList: InvalidSKUList</li>
 * </ul>
 */
class GetPrepInstructionsForSKUResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SKUPrepInstructionsList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\SKUPrepInstructionsList'),
            'InvalidSKUList'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\InvalidSKUList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SKUPrepInstructionsList property.
     *
     * @return SKUPrepInstructionsList SKUPrepInstructionsList.
     */
    public function getSKUPrepInstructionsList()
    {
        return $this->_fields['SKUPrepInstructionsList']['FieldValue'];
    }

    /**
     * Set the value of the SKUPrepInstructionsList property.
     *
     * @param SKUPrepInstructionsList skuPrepInstructionsList
     * @return this instance
     */
    public function setSKUPrepInstructionsList($value)
    {
        $this->_fields['SKUPrepInstructionsList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SKUPrepInstructionsList is set.
     *
     * @return true if SKUPrepInstructionsList is set.
     */
    public function isSetSKUPrepInstructionsList()
    {
        return !is_null($this->_fields['SKUPrepInstructionsList']['FieldValue']);
    }

    /**
     * Set the value of SKUPrepInstructionsList, return this.
     *
     * @param skuPrepInstructionsList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSKUPrepInstructionsList($value)
    {
        $this->setSKUPrepInstructionsList($value);
        return $this;
    }

    /**
     * Get the value of the InvalidSKUList property.
     *
     * @return InvalidSKUList InvalidSKUList.
     */
    public function getInvalidSKUList()
    {
        return $this->_fields['InvalidSKUList']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKUList property.
     *
     * @param InvalidSKUList invalidSKUList
     * @return this instance
     */
    public function setInvalidSKUList($value)
    {
        $this->_fields['InvalidSKUList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InvalidSKUList is set.
     *
     * @return true if InvalidSKUList is set.
     */
    public function isSetInvalidSKUList()
    {
        return !is_null($this->_fields['InvalidSKUList']['FieldValue']);
    }

    /**
     * Set the value of InvalidSKUList, return this.
     *
     * @param invalidSKUList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInvalidSKUList($value)
    {
        $this->setInvalidSKUList($value);
        return $this;
    }
}
