<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;


/**
 * InvalidASINList
 *
 * Properties:
 * <ul>
 * <li>InvalidASIN: array</li>
 * </ul>
 */
class InvalidASINList extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array (
            'InvalidASIN' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\InvalidASIN')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the InvalidASIN property.
     *
     * @return List<InvalidASIN> InvalidASIN.
     */
    public function getInvalidASIN()
    {
        if ($this->_fields['InvalidASIN']['FieldValue'] == null) {
            $this->_fields['InvalidASIN']['FieldValue'] = array();
        }
        return $this->_fields['InvalidASIN']['FieldValue'];
    }

    /**
     * Set the value of the InvalidASIN property.
     *
     * @param array invalidASIN
     * @return this instance
     */
    public function setInvalidASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['InvalidASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear InvalidASIN.
     */
    public function unsetInvalidASIN()
    {
        $this->_fields['InvalidASIN']['FieldValue'] = array();
    }

    /**
     * Check to see if InvalidASIN is set.
     *
     * @return true if InvalidASIN is set.
     */
    public function isSetInvalidASIN()
    {
        return !empty($this->_fields['InvalidASIN']['FieldValue']);
    }

    /**
     * Add values for InvalidASIN, return this.
     *
     * @param invalidASIN
     *             New values to add.
     *
     * @return This instance.
     */
    public function withInvalidASIN()
    {
        foreach (func_get_args() as $InvalidASIN) {
            $this->_fields['InvalidASIN']['FieldValue'][] = $InvalidASIN;
        }
        return $this;
    }
}
