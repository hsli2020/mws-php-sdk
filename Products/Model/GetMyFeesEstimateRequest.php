<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * GetMyFeesEstimateRequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>FeesEstimateRequestList: FeesEstimateRequestList</li>
 * </ul>
 */
class GetMyFeesEstimateRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'                => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'            => array('FieldValue' => null, 'FieldType' => 'string'),
            'FeesEstimateRequestList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\FeesEstimateRequestList'),
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
     * Get the value of the FeesEstimateRequestList property.
     *
     * @return FeesEstimateRequestList FeesEstimateRequestList.
     */
    public function getFeesEstimateRequestList()
    {
        return $this->_fields['FeesEstimateRequestList']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateRequestList property.
     *
     * @param FeesEstimateRequestList feesEstimateRequestList
     * @return this instance
     */
    public function setFeesEstimateRequestList($value)
    {
        $this->_fields['FeesEstimateRequestList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimateRequestList is set.
     *
     * @return true if FeesEstimateRequestList is set.
     */
    public function isSetFeesEstimateRequestList()
    {
        return !is_null($this->_fields['FeesEstimateRequestList']['FieldValue']);
    }

    /**
     * Set the value of FeesEstimateRequestList, return this.
     *
     * @param feesEstimateRequestList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimateRequestList($value)
    {
        $this->setFeesEstimateRequestList($value);
        return $this;
    }
}
