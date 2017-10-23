<?php

namespace Amazon\MWS\Subscriptions\Model;

use Amazon\MWS\Subscriptions\Model;

/**
 * GetSubscriptionResult
 *
 * Properties:
 * <ul>
 * <li>Subscription: Subscription</li>
 * </ul>
 */
class GetSubscriptionResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'Subscription' => array('FieldValue' => null, 'FieldType' => 'Subscription'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Subscription property.
     *
     * @return Subscription Subscription.
     */
    public function getSubscription()
    {
        return $this->_fields['Subscription']['FieldValue'];
    }

    /**
     * Set the value of the Subscription property.
     *
     * @param Subscription subscription
     * @return this instance
     */
    public function setSubscription($value)
    {
        $this->_fields['Subscription']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Subscription is set.
     *
     * @return true if Subscription is set.
     */
    public function isSetSubscription()
    {
        return !is_null($this->_fields['Subscription']['FieldValue']);
    }

    /**
     * Set the value of Subscription, return this.
     *
     * @param subscription
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSubscription($value)
    {
        $this->setSubscription($value);
        return $this;
    }
}
