<?php

namespace Amazon\MWS\Subscriptions;

use Amazon\MWS\Subscriptions\Model\CreateSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\DeleteSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\DeregisterDestinationResponse;
use Amazon\MWS\Subscriptions\Model\GetSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\ListRegisteredDestinationsResponse;
use Amazon\MWS\Subscriptions\Model\ListSubscriptionsResponse;
use Amazon\MWS\Subscriptions\Model\RegisterDestinationResponse;
use Amazon\MWS\Subscriptions\Model\SendTestNotificationToDestinationResponse;
use Amazon\MWS\Subscriptions\Model\UpdateSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\GetServiceStatusResponse;

class Mock implements SubscriptionsInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for CreateSubscription request or CreateSubscription object itself
     * @see CreateSubscription
     * @return CreateSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function createSubscription($request)
    {
        return CreateSubscriptionResponse::fromXML($this->_invoke('CreateSubscription'));
    }

    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for DeleteSubscription request or DeleteSubscription object itself
     * @see DeleteSubscription
     * @return DeleteSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function deleteSubscription($request)
    {
        return DeleteSubscriptionResponse::fromXML($this->_invoke('DeleteSubscription'));
    }

    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for DeregisterDestination request or DeregisterDestination object itself
     * @see DeregisterDestination
     * @return DeregisterDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function deregisterDestination($request)
    {
        return DeregisterDestinationResponse::fromXML($this->_invoke('DeregisterDestination'));
    }

    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for GetSubscription request or GetSubscription object itself
     * @see GetSubscription
     * @return GetSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function getSubscription($request)
    {
        return GetSubscriptionResponse::fromXML($this->_invoke('GetSubscription'));
    }

    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for ListRegisteredDestinations request or ListRegisteredDestinations object itself
     * @see ListRegisteredDestinations
     * @return ListRegisteredDestinationsResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function listRegisteredDestinations($request)
    {
        return ListRegisteredDestinationsResponse::fromXML($this->_invoke('ListRegisteredDestinations'));
    }

    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for ListSubscriptions request or ListSubscriptions object itself
     * @see ListSubscriptions
     * @return ListSubscriptionsResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function listSubscriptions($request)
    {
        return ListSubscriptionsResponse::fromXML($this->_invoke('ListSubscriptions'));
    }

    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for RegisterDestination request or RegisterDestination object itself
     * @see RegisterDestination
     * @return RegisterDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function registerDestination($request)
    {
        return RegisterDestinationResponse::fromXML($this->_invoke('RegisterDestination'));
    }

    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for SendTestNotificationToDestination request or SendTestNotificationToDestination object itself
     * @see SendTestNotificationToDestination
     * @return SendTestNotificationToDestinationResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function sendTestNotificationToDestination($request)
    {
        return SendTestNotificationToDestinationResponse::fromXML($this->_invoke('SendTestNotificationToDestination'));
    }

    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for UpdateSubscription request or UpdateSubscription object itself
     * @see UpdateSubscription
     * @return UpdateSubscriptionResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function updateSubscription($request)
    {
        return UpdateSubscriptionResponse::fromXML($this->_invoke('UpdateSubscription'));
    }

    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MWSSubscriptionsService_Exception
     */
    public function getServiceStatus($request)
    {
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
