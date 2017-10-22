<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * PartneredSmallParcelDataOutput
 *
 * Properties:
 * <ul>
 *
 * <li>PackageList: PartneredSmallParcelPackageOutputList</li>
 * <li>PartneredEstimate: PartneredEstimate</li>
 *
 * </ul>
 */

 class PartneredSmallParcelDataOutput extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PackageList' => array('FieldValue' => null, 'FieldType' => 'PartneredSmallParcelPackageOutputList'),
    'PartneredEstimate' => array('FieldValue' => null, 'FieldType' => 'PartneredEstimate'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PackageList property.
     *
     * @return PartneredSmallParcelPackageOutputList PackageList.
     */
    public function getPackageList()
    {
        return $this->_fields['PackageList']['FieldValue'];
    }

    /**
     * Set the value of the PackageList property.
     *
     * @param PartneredSmallParcelPackageOutputList packageList
     * @return this instance
     */
    public function setPackageList($value)
    {
        $this->_fields['PackageList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PackageList is set.
     *
     * @return true if PackageList is set.
     */
    public function isSetPackageList()
    {
                return !is_null($this->_fields['PackageList']['FieldValue']);
            }

    /**
     * Set the value of PackageList, return this.
     *
     * @param packageList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPackageList($value)
    {
        $this->setPackageList($value);
        return $this;
    }

    /**
     * Get the value of the PartneredEstimate property.
     *
     * @return PartneredEstimate PartneredEstimate.
     */
    public function getPartneredEstimate()
    {
        return $this->_fields['PartneredEstimate']['FieldValue'];
    }

    /**
     * Set the value of the PartneredEstimate property.
     *
     * @param PartneredEstimate partneredEstimate
     * @return this instance
     */
    public function setPartneredEstimate($value)
    {
        $this->_fields['PartneredEstimate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PartneredEstimate is set.
     *
     * @return true if PartneredEstimate is set.
     */
    public function isSetPartneredEstimate()
    {
                return !is_null($this->_fields['PartneredEstimate']['FieldValue']);
            }

    /**
     * Set the value of PartneredEstimate, return this.
     *
     * @param partneredEstimate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPartneredEstimate($value)
    {
        $this->setPartneredEstimate($value);
        return $this;
    }

}
