<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * Contact
 *
 * Properties:
 * <ul>
 * <li>Name: string</li>
 * <li>Phone: string</li>
 * <li>Email: string</li>
 * <li>Fax: string</li>
 * </ul>
 */
class Contact extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Name'  => array('FieldValue' => null, 'FieldType' => 'string'),
            'Phone' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Email' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Fax'   => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Name property.
     *
     * @return String Name.
     */
    public function getName()
    {
        return $this->_fields['Name']['FieldValue'];
    }

    /**
     * Set the value of the Name property.
     *
     * @param string name
     * @return this instance
     */
    public function setName($value)
    {
        $this->_fields['Name']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Name is set.
     *
     * @return true if Name is set.
     */
    public function isSetName()
    {
        return !is_null($this->_fields['Name']['FieldValue']);
    }

    /**
     * Set the value of Name, return this.
     *
     * @param name
     *        The new value to set.
     *
     * @return This instance.
     */
    public function withName($value)
    {
        $this->setName($value);
        return $this;
    }

    /**
     * Get the value of the Phone property.
     *
     * @return String Phone.
     */
    public function getPhone()
    {
        return $this->_fields['Phone']['FieldValue'];
    }

    /**
     * Set the value of the Phone property.
     *
     * @param string phone
     * @return this instance
     */
    public function setPhone($value)
    {
        $this->_fields['Phone']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Phone is set.
     *
     * @return true if Phone is set.
     */
    public function isSetPhone()
    {
        return !is_null($this->_fields['Phone']['FieldValue']);
    }

    /**
     * Set the value of Phone, return this.
     *
     * @param phone
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPhone($value)
    {
        $this->setPhone($value);
        return $this;
    }

    /**
     * Get the value of the Email property.
     *
     * @return String Email.
     */
    public function getEmail()
    {
        return $this->_fields['Email']['FieldValue'];
    }

    /**
     * Set the value of the Email property.
     *
     * @param string email
     * @return this instance
     */
    public function setEmail($value)
    {
        $this->_fields['Email']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Email is set.
     *
     * @return true if Email is set.
     */
    public function isSetEmail()
    {
        return !is_null($this->_fields['Email']['FieldValue']);
    }

    /**
     * Set the value of Email, return this.
     *
     * @param email
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEmail($value)
    {
        $this->setEmail($value);
        return $this;
    }

    /**
     * Get the value of the Fax property.
     *
     * @return String Fax.
     */
    public function getFax()
    {
        return $this->_fields['Fax']['FieldValue'];
    }

    /**
     * Set the value of the Fax property.
     *
     * @param string fax
     * @return this instance
     */
    public function setFax($value)
    {
        $this->_fields['Fax']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Fax is set.
     *
     * @return true if Fax is set.
     */
    public function isSetFax()
    {
        return !is_null($this->_fields['Fax']['FieldValue']);
    }

    /**
     * Set the value of Fax, return this.
     *
     * @param fax
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFax($value)
    {
        $this->setFax($value);
        return $this;
    }
}
