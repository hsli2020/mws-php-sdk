<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * NonPartneredSmallParcelPackageInputList
 *
 * Properties:
 * <ul>
 *
 * <li>member: array</li>
 *
 * </ul>
 */

 class NonPartneredSmallParcelPackageInputList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'member' => array('FieldValue' => array(), 'FieldType' => array('NonPartneredSmallParcelPackageInput')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the member property.
     *
     * @return List<NonPartneredSmallParcelPackageInput> member.
     */
    public function getmember()
    {
        if ($this->_fields['member']['FieldValue'] == null)
        {
            $this->_fields['member']['FieldValue'] = array();
        }
        return $this->_fields['member']['FieldValue'];
    }

    /**
     * Set the value of the member property.
     *
     * @param array member
     * @return this instance
     */
    public function setmember($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['member']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear member.
     */
    public function unsetmember()
    {
        $this->_fields['member']['FieldValue'] = array();
    }

    /**
     * Check to see if member is set.
     *
     * @return true if member is set.
     */
    public function isSetmember()
    {
                return !empty($this->_fields['member']['FieldValue']);
            }

    /**
     * Add values for member, return this.
     *
     * @param member
     *             New values to add.
     *
     * @return This instance.
     */
    public function withmember()
    {
        foreach (func_get_args() as $member)
        {
            $this->_fields['member']['FieldValue'][] = $member;
        }
        return $this;
    }

}
