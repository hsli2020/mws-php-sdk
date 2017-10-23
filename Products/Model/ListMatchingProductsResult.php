<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * ListMatchingProductsResult
 *
 * Properties:
 * <ul>
 * <li>Products: ProductList</li>
 * </ul>
 */
class ListMatchingProductsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Products' => array('FieldValue' => null, 'FieldType' => 'ProductList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Products property.
     *
     * @return ProductList Products.
     */
    public function getProducts()
    {
        return $this->_fields['Products']['FieldValue'];
    }

    /**
     * Set the value of the Products property.
     *
     * @param ProductList products
     * @return this instance
     */
    public function setProducts($value)
    {
        $this->_fields['Products']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Products is set.
     *
     * @return true if Products is set.
     */
    public function isSetProducts()
    {
        return !is_null($this->_fields['Products']['FieldValue']);
    }

    /**
     * Set the value of Products, return this.
     *
     * @param products
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProducts($value)
    {
        $this->setProducts($value);
        return $this;
    }
}
