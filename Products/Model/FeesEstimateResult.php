<?php

namespace Amazon\MWS\Products\Model;


/**
 * FeesEstimateResult
 *
 * Properties:
 * <ul>
 *
 * <li>Status: string</li>
 * <li>FeesEstimateIdentifier: FeesEstimateIdentifier</li>
 * <li>FeesEstimate: FeesEstimate</li>
 * <li>Error: Error</li>
 *
 * </ul>
 */

 class FeesEstimateResult extends MarketplaceWebServiceProducts_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Status' => array('FieldValue' => null, 'FieldType' => 'string'),
    'FeesEstimateIdentifier' => array('FieldValue' => null, 'FieldType' => 'FeesEstimateIdentifier'),
    'FeesEstimate' => array('FieldValue' => null, 'FieldType' => 'FeesEstimate'),
    'Error' => array('FieldValue' => null, 'FieldType' => 'Error'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Status property.
     *
     * @return String Status.
     */
    public function getStatus()
    {
        return $this->_fields['Status']['FieldValue'];
    }

    /**
     * Set the value of the Status property.
     *
     * @param string status
     * @return this instance
     */
    public function setStatus($value)
    {
        $this->_fields['Status']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Status is set.
     *
     * @return true if Status is set.
     */
    public function isSetStatus()
    {
                return !is_null($this->_fields['Status']['FieldValue']);
            }

    /**
     * Set the value of Status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withStatus($value)
    {
        $this->setStatus($value);
        return $this;
    }

    /**
     * Get the value of the FeesEstimateIdentifier property.
     *
     * @return FeesEstimateIdentifier FeesEstimateIdentifier.
     */
    public function getFeesEstimateIdentifier()
    {
        return $this->_fields['FeesEstimateIdentifier']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimateIdentifier property.
     *
     * @param FeesEstimateIdentifier feesEstimateIdentifier
     * @return this instance
     */
    public function setFeesEstimateIdentifier($value)
    {
        $this->_fields['FeesEstimateIdentifier']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimateIdentifier is set.
     *
     * @return true if FeesEstimateIdentifier is set.
     */
    public function isSetFeesEstimateIdentifier()
    {
                return !is_null($this->_fields['FeesEstimateIdentifier']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimateIdentifier, return this.
     *
     * @param feesEstimateIdentifier
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimateIdentifier($value)
    {
        $this->setFeesEstimateIdentifier($value);
        return $this;
    }

    /**
     * Get the value of the FeesEstimate property.
     *
     * @return FeesEstimate FeesEstimate.
     */
    public function getFeesEstimate()
    {
        return $this->_fields['FeesEstimate']['FieldValue'];
    }

    /**
     * Set the value of the FeesEstimate property.
     *
     * @param FeesEstimate feesEstimate
     * @return this instance
     */
    public function setFeesEstimate($value)
    {
        $this->_fields['FeesEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeesEstimate is set.
     *
     * @return true if FeesEstimate is set.
     */
    public function isSetFeesEstimate()
    {
                return !is_null($this->_fields['FeesEstimate']['FieldValue']);
            }

    /**
     * Set the value of FeesEstimate, return this.
     *
     * @param feesEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeesEstimate($value)
    {
        $this->setFeesEstimate($value);
        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return Error Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Set the value of the Error property.
     *
     * @param Error error
     * @return this instance
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set.
     */
    public function isSetError()
    {
                return !is_null($this->_fields['Error']['FieldValue']);
            }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }

}
