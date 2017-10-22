<?php

namespace Amazon\MWS\Products\Model;


/**
 * GetMyFeesEstimateResult
 *
 * Properties:
 * <ul>
 *
 * <li>FeesEstimateResultList: FeesEstimateResultList</li>
 *
 * </ul>
 */

 class GetMyFeesEstimateResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeesEstimateResultList' => array('FieldValue' => null, 'FieldType' => 'FeesEstimateResultList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateResultList property.
     *
     * @return FeesEstimateResultList FeesEstimateResultList.
     */
    public function getFeesEstimateResultList()
    {
        return $this->_fields['FeesEstimateResultList']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateResultList property.
     *
     * @param FeesEstimateResultList feesEstimateResultList
     * @return this instance
     */
    public function setFeesEstimateResultList($value)
    {
        $this->_fields['FeesEstimateResultList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimateResultList is set.
     *
     * @return true if FeesEstimateResultList is set.
     */
    public function isSetFeesEstimateResultList()
    {
                return !is_null($this->_fields['FeesEstimateResultList']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimateResultList, return this.
     *
     * @param feesEstimateResultList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimateResultList($value)
    {
        $this->setFeesEstimateResultList($value);
        return $this;
    }

}
