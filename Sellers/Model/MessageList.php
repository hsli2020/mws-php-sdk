<?php

namespace Amazon\MWS\Sellers\Model;

use Amazon\MWS\Sellers\Model;

/**
 * MessageList
 *
 * Properties:
 * <ul>
 * <li>Message: array</li>
 * </ul>
 */
class MessageList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Message' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\Message')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Message property.
     *
     * @return List<Message> Message.
     */
    public function getMessage()
    {
        if ($this->_fields['Message']['FieldValue'] == null) {
            $this->_fields['Message']['FieldValue'] = array();
        }
        return $this->_fields['Message']['FieldValue'];
    }

    /**
     * Set the value of the Message property.
     *
     * @param array message
     * @return this instance
     */
    public function setMessage($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['Message']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Message.
     */
    public function unsetMessage()
    {
        $this->_fields['Message']['FieldValue'] = array();
    }

    /**
     * Check to see if Message is set.
     *
     * @return true if Message is set.
     */
    public function isSetMessage()
    {
        return !empty($this->_fields['Message']['FieldValue']);
    }

    /**
     * Add values for Message, return this.
     *
     * @param message
     *             New values to add.
     *
     * @return This instance.
     */
    public function withMessage()
    {
        foreach (func_get_args() as $Message) {
            $this->_fields['Message']['FieldValue'][] = $Message;
        }
        return $this;
    }
}
