<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * ASINListType
 *
 * Properties:
 * <ul>
 * <li>ASIN: array</li>
 * </ul>
 */
class ASINListType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ASIN' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return List<String> ASIN.
     */
    public function getASIN()
    {
        if ($this->_fields['ASIN']['FieldValue'] == null) {
            $this->_fields['ASIN']['FieldValue'] = array();
        }
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param array asin
     * @return this instance
     */
    public function setASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ASIN.
     */
    public function unsetASIN()
    {
        $this->_fields['ASIN']['FieldValue'] = array();
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !empty($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Add values for ASIN, return this.
     *
     * @param asin
     *             New values to add.
     *
     * @return This instance.
     */
    public function withASIN()
    {
        foreach (func_get_args() as $ASIN) {
            $this->_fields['ASIN']['FieldValue'][] = $ASIN;
        }
        return $this;
    }
}
