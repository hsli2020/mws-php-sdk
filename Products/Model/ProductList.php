<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * ProductList
 *
 * Properties:
 * <ul>
 * <li>Product: array</li>
 * </ul>
 */
class ProductList extends MarketplaceWebServiceProducts_Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Product' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\Product')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Product property.
     *
     * @return List<Product> Product.
     */
    public function getProduct()
    {
        if ($this->_fields['Product']['FieldValue'] == null) {
            $this->_fields['Product']['FieldValue'] = array();
        }
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Set the value of the Product property.
     *
     * @param array product
     * @return this instance
     */
    public function setProduct($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Product.
     */
    public function unsetProduct()
    {
        $this->_fields['Product']['FieldValue'] = array();
    }

    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set.
     */
    public function isSetProduct()
    {
        return !empty($this->_fields['Product']['FieldValue']);
    }

    /**
     * Add values for Product, return this.
     *
     * @param product
     *             New values to add.
     *
     * @return This instance.
     */
    public function withProduct()
    {
        foreach (func_get_args() as $Product) {
            $this->_fields['Product']['FieldValue'][] = $Product;
        }
        return $this;
    }
}
