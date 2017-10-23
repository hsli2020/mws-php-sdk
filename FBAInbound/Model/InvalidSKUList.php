<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;


/**
 * InvalidSKUList
 *
 * Properties:
 * <ul>
 * <li>InvalidSKU: array</li>
 * </ul>
 */
class InvalidSKUList extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array (
            'InvalidSKU' => array('FieldValue' => array(), 'FieldType' => array('InvalidSKU')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the InvalidSKU property.
     *
     * @return List<InvalidSKU> InvalidSKU.
     */
    public function getInvalidSKU()
    {
        if ($this->_fields['InvalidSKU']['FieldValue'] == null) {
            $this->_fields['InvalidSKU']['FieldValue'] = array();
        }
        return $this->_fields['InvalidSKU']['FieldValue'];
    }

    /**
     * Set the value of the InvalidSKU property.
     *
     * @param array invalidSKU
     * @return this instance
     */
    public function setInvalidSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['InvalidSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear InvalidSKU.
     */
    public function unsetInvalidSKU()
    {
        $this->_fields['InvalidSKU']['FieldValue'] = array();
    }

    /**
     * Check to see if InvalidSKU is set.
     *
     * @return true if InvalidSKU is set.
     */
    public function isSetInvalidSKU()
    {
        return !empty($this->_fields['InvalidSKU']['FieldValue']);
    }

    /**
     * Add values for InvalidSKU, return this.
     *
     * @param invalidSKU
     *             New values to add.
     *
     * @return This instance.
     */
    public function withInvalidSKU()
    {
        foreach (func_get_args() as $InvalidSKU) {
            $this->_fields['InvalidSKU']['FieldValue'][] = $InvalidSKU;
        }
        return $this;
    }
}
