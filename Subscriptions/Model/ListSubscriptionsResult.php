<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * ListSubscriptionsResult
 *
 * Properties:
 * <ul>
 * <li>SubscriptionList: SubscriptionList</li>
 * </ul>
 */
class ListSubscriptionsResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SubscriptionList' => array('FieldValue' => null, 'FieldType' => 'SubscriptionList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SubscriptionList property.
     *
     * @return SubscriptionList SubscriptionList.
     */
    public function getSubscriptionList()
    {
        return $this->_fields['SubscriptionList']['FieldValue'];
    }

    /**
     * Set the value of the SubscriptionList property.
     *
     * @param SubscriptionList subscriptionList
     * @return this instance
     */
    public function setSubscriptionList($value)
    {
        $this->_fields['SubscriptionList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SubscriptionList is set.
     *
     * @return true if SubscriptionList is set.
     */
    public function isSetSubscriptionList()
    {
        return !is_null($this->_fields['SubscriptionList']['FieldValue']);
    }

    /**
     * Set the value of SubscriptionList, return this.
     *
     * @param subscriptionList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscriptionList($value)
    {
        $this->setSubscriptionList($value);
        return $this;
    }
}
