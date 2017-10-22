<?php

namespace Amazon\MWS\Sellers\Model;

/**
 * ListMarketplaces
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: array</li>
 *
 * </ul>
 */

 class ListMarketplaces extends MarketplaceWebServiceSellers_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Marketplace' => array('FieldValue' => array(), 'FieldType' => array('Marketplace')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return List<Marketplace> Marketplace.
     */
    public function getMarketplace()
    {
        if ($this->_fields['Marketplace']['FieldValue'] == null)
        {
            $this->_fields['Marketplace']['FieldValue'] = array();
        }
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param array marketplace
     * @return this instance
     */
    public function setMarketplace($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Marketplace.
     */
    public function unsetMarketplace()
    {
        $this->_fields['Marketplace']['FieldValue'] = array();
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
                return !empty($this->_fields['Marketplace']['FieldValue']);
            }

    /**
     * Add values for Marketplace, return this.
     *
     * @param marketplace
     *             New values to add.
     *
     * @return This instance.
     */
    public function withMarketplace()
    {
        foreach (func_get_args() as $Marketplace)
        {
            $this->_fields['Marketplace']['FieldValue'][] = $Marketplace;
        }
        return $this;
    }

}
