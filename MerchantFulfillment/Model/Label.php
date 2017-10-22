<?php

namespace Amazon\MWS\MerchantFulfillment\Model;


/**
 * Label
 *
 * Properties:
 * <ul>
 *
 * <li>Dimensions: LabelDimensions</li>
 * <li>FileContents: FileContents</li>
 *
 * </ul>
 */

 class Label extends MWSMerchantFulfillmentService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Dimensions' => array('FieldValue' => null, 'FieldType' => 'LabelDimensions'),
    'FileContents' => array('FieldValue' => null, 'FieldType' => 'FileContents'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Dimensions property.
     *
     * @return LabelDimensions Dimensions.
     */
    public function getDimensions()
    {
        return $this->_fields['Dimensions']['FieldValue'];
    }

    /**
     * Set the value of the Dimensions property.
     *
     * @param LabelDimensions dimensions
     * @return this instance
     */
    public function setDimensions($value)
    {
        $this->_fields['Dimensions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Dimensions is set.
     *
     * @return true if Dimensions is set.
     */
    public function isSetDimensions()
    {
                return !is_null($this->_fields['Dimensions']['FieldValue']);
            }

    /**
     * Set the value of Dimensions, return this.
     *
     * @param dimensions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDimensions($value)
    {
        $this->setDimensions($value);
        return $this;
    }

    /**
     * Get the value of the FileContents property.
     *
     * @return FileContents FileContents.
     */
    public function getFileContents()
    {
        return $this->_fields['FileContents']['FieldValue'];
    }

    /**
     * Set the value of the FileContents property.
     *
     * @param FileContents fileContents
     * @return this instance
     */
    public function setFileContents($value)
    {
        $this->_fields['FileContents']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FileContents is set.
     *
     * @return true if FileContents is set.
     */
    public function isSetFileContents()
    {
                return !is_null($this->_fields['FileContents']['FieldValue']);
            }

    /**
     * Set the value of FileContents, return this.
     *
     * @param fileContents
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFileContents($value)
    {
        $this->setFileContents($value);
        return $this;
    }

}
