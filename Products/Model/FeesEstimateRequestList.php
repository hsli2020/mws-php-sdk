<?php

namespace Amazon\MWS\Products\Model;


/**
 * FeesEstimateRequestList
 *
 * Properties:
 * <ul>
 *
 * <li>FeesEstimateRequest: array</li>
 *
 * </ul>
 */

 class FeesEstimateRequestList extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'FeesEstimateRequest' => array('FieldValue' => array(), 'FieldType' => array('FeesEstimateRequest')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the FeesEstimateRequest property.
     *
     * @return List<FeesEstimateRequest> FeesEstimateRequest.
     */
    public function getFeesEstimateRequest()
    {
        if ($this->_fields['FeesEstimateRequest']['FieldValue'] == null)
        {
            $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
        }
        return $this->_fields['FeesEstimateRequest']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateRequest property.
     *
     * @param array feesEstimateRequest
     * @return this instance
     */
    public function setFeesEstimateRequest($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['FeesEstimateRequest']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FeesEstimateRequest.
     */
    public function unsetFeesEstimateRequest()
    {
        $this->_fields['FeesEstimateRequest']['FieldValue'] = array();
    }

    /**
     * Check to see if FeesEstimateRequest is set.
     *
     * @return true if FeesEstimateRequest is set.
     */
    public function isSetFeesEstimateRequest()
    {
                return !empty($this->_fields['FeesEstimateRequest']['FieldValue']);
            }

    /**
     * Add values for FeesEstimateRequest, return this.
     *
     * @param feesEstimateRequest
     *             New values to add.
     *
     * @return This instance.
     */
    public function withFeesEstimateRequest()
    {
        foreach (func_get_args() as $FeesEstimateRequest)
        {
            $this->_fields['FeesEstimateRequest']['FieldValue'][] = $FeesEstimateRequest;
        }
        return $this;
    }

}
