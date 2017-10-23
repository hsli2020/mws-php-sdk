<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * ASINPrepInstructionsList
 *
 * Properties:
 * <ul>
 * <li>ASINPrepInstructions: array</li>
 * </ul>
 */
class ASINPrepInstructionsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ASINPrepInstructions' => array('FieldValue' => array(), 'FieldType' => array('ASINPrepInstructions')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ASINPrepInstructions property.
     *
     * @return List<ASINPrepInstructions> ASINPrepInstructions.
     */
    public function getASINPrepInstructions()
    {
        if ($this->_fields['ASINPrepInstructions']['FieldValue'] == null) {
            $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
        }
        return $this->_fields['ASINPrepInstructions']['FieldValue'];
    }

    /**
     * Set the value of the ASINPrepInstructions property.
     *
     * @param array asinPrepInstructions
     * @return this instance
     */
    public function setASINPrepInstructions($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ASINPrepInstructions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ASINPrepInstructions.
     */
    public function unsetASINPrepInstructions()
    {
        $this->_fields['ASINPrepInstructions']['FieldValue'] = array();
    }

    /**
     * Check to see if ASINPrepInstructions is set.
     *
     * @return true if ASINPrepInstructions is set.
     */
    public function isSetASINPrepInstructions()
    {
        return !empty($this->_fields['ASINPrepInstructions']['FieldValue']);
    }

    /**
     * Add values for ASINPrepInstructions, return this.
     *
     * @param asinPrepInstructions
     *             New values to add.
     *
     * @return This instance.
     */
    public function withASINPrepInstructions()
    {
        foreach (func_get_args() as $ASINPrepInstructions) {
            $this->_fields['ASINPrepInstructions']['FieldValue'][] = $ASINPrepInstructions;
        }
        return $this;
    }
}
