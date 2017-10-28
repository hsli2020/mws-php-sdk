<?php

namespace Amazon\MWS\FBAInventory\Model;

use Amazon\MWS\FBAInventory\Model;

/**
 * ListInventorySupplyRequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>Marketplace: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SellerSkus: SellerSkuList</li>
 * <li>QueryStartDateTime: string</li>
 * <li>ResponseGroup: string</li>
 * </ul>
 */
class ListInventorySupplyRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'           => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'Marketplace'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'MarketplaceId'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerSkus'         => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\SellerSkuList'),
            'QueryStartDateTime' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ResponseGroup'      => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the Marketplace property.
     *
     * @return String Marketplace.
     */
    public function getMarketplace()
    {
        return $this->_fields['Marketplace']['FieldValue'];
    }

    /**
     * Set the value of the Marketplace property.
     *
     * @param string marketplace
     * @return this instance
     */
    public function setMarketplace($value)
    {
        $this->_fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Marketplace is set.
     *
     * @return true if Marketplace is set.
     */
    public function isSetMarketplace()
    {
        return !is_null($this->_fields['Marketplace']['FieldValue']);
    }

    /**
     * Set the value of Marketplace, return this.
     *
     * @param marketplace
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the SellerSkus property.
     *
     * @return SellerSkuList SellerSkus.
     */
    public function getSellerSkus()
    {
        return $this->_fields['SellerSkus']['FieldValue'];
    }

    /**
     * Set the value of the SellerSkus property.
     *
     * @param SellerSkuList sellerSkus
     * @return this instance
     */
    public function setSellerSkus($value)
    {
        $this->_fields['SellerSkus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSkus is set.
     *
     * @return true if SellerSkus is set.
     */
    public function isSetSellerSkus()
    {
        return !is_null($this->_fields['SellerSkus']['FieldValue']);
    }

    /**
     * Set the value of SellerSkus, return this.
     *
     * @param sellerSkus
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSkus($value)
    {
        $this->setSellerSkus($value);
        return $this;
    }

    /**
     * Get the value of the QueryStartDateTime property.
     *
     * @return XMLGregorianCalendar QueryStartDateTime.
     */
    public function getQueryStartDateTime()
    {
        return $this->_fields['QueryStartDateTime']['FieldValue'];
    }

    /**
     * Set the value of the QueryStartDateTime property.
     *
     * @param string queryStartDateTime
     * @return this instance
     */
    public function setQueryStartDateTime($value)
    {
        $this->_fields['QueryStartDateTime']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if QueryStartDateTime is set.
     *
     * @return true if QueryStartDateTime is set.
     */
    public function isSetQueryStartDateTime()
    {
        return !is_null($this->_fields['QueryStartDateTime']['FieldValue']);
    }

    /**
     * Set the value of QueryStartDateTime, return this.
     *
     * @param queryStartDateTime
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQueryStartDateTime($value)
    {
        $this->setQueryStartDateTime($value);
        return $this;
    }

    /**
     * Get the value of the ResponseGroup property.
     *
     * @return String ResponseGroup.
     */
    public function getResponseGroup()
    {
        return $this->_fields['ResponseGroup']['FieldValue'];
    }

    /**
     * Set the value of the ResponseGroup property.
     *
     * @param string responseGroup
     * @return this instance
     */
    public function setResponseGroup($value)
    {
        $this->_fields['ResponseGroup']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseGroup is set.
     *
     * @return true if ResponseGroup is set.
     */
    public function isSetResponseGroup()
    {
        return !is_null($this->_fields['ResponseGroup']['FieldValue']);
    }

    /**
     * Set the value of ResponseGroup, return this.
     *
     * @param responseGroup
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseGroup($value)
    {
        $this->setResponseGroup($value);
        return $this;
    }
}
