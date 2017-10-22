<?php

namespace Amazon\MWS\Products\Model;


/**
 * GetProductCategoriesForSKUResult
 *
 * Properties:
 * <ul>
 *
 * <li>Self: array</li>
 *
 * </ul>
 */

 class GetProductCategoriesForSKUResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Self' => array('FieldValue' => array(), 'FieldType' => array('Categories')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Self property.
     *
     * @return List<Categories> Self.
     */
    public function getSelf()
    {
        if ($this->_fields['Self']['FieldValue'] == null)
        {
            $this->_fields['Self']['FieldValue'] = array();
        }
        return $this->_fields['Self']['FieldValue'];
    }

    /**
     * Set the value of the Self property.
     *
     * @param array self
     * @return this instance
     */
    public function setSelf($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Self']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Self.
     */
    public function unsetSelf()
    {
        $this->_fields['Self']['FieldValue'] = array();
    }

    /**
     * Check to see if Self is set.
     *
     * @return true if Self is set.
     */
    public function isSetSelf()
    {
                return !empty($this->_fields['Self']['FieldValue']);
            }

    /**
     * Add values for Self, return this.
     *
     * @param self
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSelf()
    {
        foreach (func_get_args() as $Self)
        {
            $this->_fields['Self']['FieldValue'][] = $Self;
        }
        return $this;
    }

}
