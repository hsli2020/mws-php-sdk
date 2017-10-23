<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * ListRegisteredDestinationsResult
 *
 * Properties:
 * <ul>
 * <li>DestinationList: DestinationList</li>
 * </ul>
 */
class ListRegisteredDestinationsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'DestinationList' => array('FieldValue' => null, 'FieldType' => 'DestinationList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DestinationList property.
     *
     * @return DestinationList DestinationList.
     */
    public function getDestinationList()
    {
        return $this->_fields['DestinationList']['FieldValue'];
    }

    /**
     * Set the value of the DestinationList property.
     *
     * @param DestinationList destinationList
     * @return this instance
     */
    public function setDestinationList($value)
    {
        $this->_fields['DestinationList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DestinationList is set.
     *
     * @return true if DestinationList is set.
     */
    public function isSetDestinationList()
    {
        return !is_null($this->_fields['DestinationList']['FieldValue']);
    }

    /**
     * Set the value of DestinationList, return this.
     *
     * @param destinationList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDestinationList($value)
    {
        $this->setDestinationList($value);
        return $this;
    }
}
