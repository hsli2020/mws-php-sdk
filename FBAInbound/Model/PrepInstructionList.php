<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * PrepInstructionList
 *
 * Properties:
 * <ul>
 *
 * <li>PrepInstruction: array</li>
 *
 * </ul>
 */

 class PrepInstructionList extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PrepInstruction' => array('FieldValue' => array(), 'FieldType' => array('string')),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PrepInstruction property.
     *
     * @return List<String> PrepInstruction.
     */
    public function getPrepInstruction()
    {
        if ($this->_fields['PrepInstruction']['FieldValue'] == null)
        {
            $this->_fields['PrepInstruction']['FieldValue'] = array();
        }
        return $this->_fields['PrepInstruction']['FieldValue'];
    }

    /**
     * Set the value of the PrepInstruction property.
     *
     * @param array prepInstruction
     * @return this instance
     */
    public function setPrepInstruction($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['PrepInstruction']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PrepInstruction.
     */
    public function unsetPrepInstruction()
    {
        $this->_fields['PrepInstruction']['FieldValue'] = array();
    }

    /**
     * Check to see if PrepInstruction is set.
     *
     * @return true if PrepInstruction is set.
     */
    public function isSetPrepInstruction()
    {
                return !empty($this->_fields['PrepInstruction']['FieldValue']);
            }

    /**
     * Add values for PrepInstruction, return this.
     *
     * @param prepInstruction
     *             New values to add.
     *
     * @return This instance.
     */
    public function withPrepInstruction()
    {
        foreach (func_get_args() as $PrepInstruction)
        {
            $this->_fields['PrepInstruction']['FieldValue'][] = $PrepInstruction;
        }
        return $this;
    }

}
