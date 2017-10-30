<?php

namespace Amazon\MWS\Subscriptions;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Subscriptions\Exception as SubscriptionsException;
use Amazon\MWS\Subscriptions\Model\CreateSubscriptionInput;
use Amazon\MWS\Subscriptions\Model\CreateSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\DeleteSubscriptionInput;
use Amazon\MWS\Subscriptions\Model\DeleteSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\DeregisterDestinationInput;
use Amazon\MWS\Subscriptions\Model\DeregisterDestinationResponse;
use Amazon\MWS\Subscriptions\Model\GetServiceStatusRequest;
use Amazon\MWS\Subscriptions\Model\GetServiceStatusResponse;
use Amazon\MWS\Subscriptions\Model\GetSubscriptionInput;
use Amazon\MWS\Subscriptions\Model\GetSubscriptionResponse;
use Amazon\MWS\Subscriptions\Model\ListRegisteredDestinationsInput;
use Amazon\MWS\Subscriptions\Model\ListRegisteredDestinationsResponse;
use Amazon\MWS\Subscriptions\Model\ListSubscriptionsInput;
use Amazon\MWS\Subscriptions\Model\ListSubscriptionsResponse;
use Amazon\MWS\Subscriptions\Model\RegisterDestinationInput;
use Amazon\MWS\Subscriptions\Model\RegisterDestinationResponse;
use Amazon\MWS\Subscriptions\Model\ResponseHeaderMetadata;
use Amazon\MWS\Subscriptions\Model\SendTestNotificationToDestinationInput;
use Amazon\MWS\Subscriptions\Model\SendTestNotificationToDestinationResponse;
use Amazon\MWS\Subscriptions\Model\UpdateSubscriptionInput;
use Amazon\MWS\Subscriptions\Model\UpdateSubscriptionResponse;

/**
 * Subscriptions\Client is an implementation of SubscriptionsInterface
 */
class Client extends BaseClient implements SubscriptionsInterface
{
    const SERVICE_VERSION    = '2013-07-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for CreateSubscription request or CreateSubscription object itself
     * @see CreateSubscriptionInput
     * @return CreateSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function createSubscription($request)
    {
        if (!($request instanceof CreateSubscriptionInput)) {
            $request = new CreateSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateSubscription';
        $httpResponse = $this->_invoke($parameters);

        $response = CreateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CreateSubscriptionInput to name value pairs
     */
    private function _convertCreateSubscription($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CreateSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSubscription()) {
            $SubscriptionCreateSubscriptionInput = $request->getSubscription();
            foreach  ($SubscriptionCreateSubscriptionInput->getNotificationType() as $NotificationTypeSubscriptionIndex => $NotificationTypeSubscription) {
                $parameters['Subscription' . '.' . 'NotificationType' . '.'  . ($NotificationTypeSubscriptionIndex + 1)] =  $NotificationTypeSubscription;
            }
        }

        return $parameters;
    }

    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for DeleteSubscription request or DeleteSubscription object itself
     * @see DeleteSubscriptionInput
     * @return DeleteSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function deleteSubscription($request)
    {
        if (!($request instanceof DeleteSubscriptionInput)) {
            $request = new DeleteSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeleteSubscription';
        $httpResponse = $this->_invoke($parameters);

        $response = DeleteSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert DeleteSubscriptionInput to name value pairs
     */
    private function _convertDeleteSubscription($request)
    {
        $parameters = array();
        $parameters['Action'] = 'DeleteSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetNotificationType()) {
            $parameters['NotificationType'] =  $request->getNotificationType();
        }
        if ($request->isSetDestination()) {
            $DestinationDeleteSubscriptionInput = $request->getDestination();
            foreach  ($DestinationDeleteSubscriptionInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }

    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for DeregisterDestination request or DeregisterDestination object itself
     * @see DeregisterDestinationInput
     * @return DeregisterDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function deregisterDestination($request)
    {
        if (!($request instanceof DeregisterDestinationInput)) {
            $request = new DeregisterDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'DeregisterDestination';
        $httpResponse = $this->_invoke($parameters);

        $response = DeregisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert DeregisterDestinationInput to name value pairs
     */
    private function _convertDeregisterDestination($request)
    {
        $parameters = array();
        $parameters['Action'] = 'DeregisterDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationDeregisterDestinationInput = $request->getDestination();
            foreach  ($DestinationDeregisterDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }

    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for GetSubscription request or GetSubscription object itself
     * @see GetSubscriptionInput
     * @return GetSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function getSubscription($request)
    {
        if (!($request instanceof GetSubscriptionInput)) {
            $request = new GetSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetSubscription';
        $httpResponse = $this->_invoke($parameters);

        $response = GetSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetSubscriptionInput to name value pairs
     */
    private function _convertGetSubscription($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetNotificationType()) {
            $parameters['NotificationType'] =  $request->getNotificationType();
        }
        if ($request->isSetDestination()) {
            $DestinationGetSubscriptionInput = $request->getDestination();
            foreach  ($DestinationGetSubscriptionInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }

    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for ListRegisteredDestinations request or ListRegisteredDestinations object itself
     * @see ListRegisteredDestinationsInput
     * @return ListRegisteredDestinationsResponse
     *
     * @throws SubscriptionsException
     */
    public function listRegisteredDestinations($request)
    {
        if (!($request instanceof ListRegisteredDestinationsInput)) {
            $request = new ListRegisteredDestinationsInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRegisteredDestinations';
        $httpResponse = $this->_invoke($parameters);

        $response = ListRegisteredDestinationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListRegisteredDestinationsInput to name value pairs
     */
    private function _convertListRegisteredDestinations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListRegisteredDestinations';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }

    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for ListSubscriptions request or ListSubscriptions object itself
     * @see ListSubscriptionsInput
     * @return ListSubscriptionsResponse
     *
     * @throws SubscriptionsException
     */
    public function listSubscriptions($request)
    {
        if (!($request instanceof ListSubscriptionsInput)) {
            $request = new ListSubscriptionsInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListSubscriptions';
        $httpResponse = $this->_invoke($parameters);

        $response = ListSubscriptionsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListSubscriptionsInput to name value pairs
     */
    private function _convertListSubscriptions($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListSubscriptions';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }

        return $parameters;
    }

    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for RegisterDestination request or RegisterDestination object itself
     * @see RegisterDestinationInput
     * @return RegisterDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function registerDestination($request)
    {
        if (!($request instanceof RegisterDestinationInput)) {
            $request = new RegisterDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'RegisterDestination';
        $httpResponse = $this->_invoke($parameters);

        $response = RegisterDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert RegisterDestinationInput to name value pairs
     */
    private function _convertRegisterDestination($request)
    {
        $parameters = array();
        $parameters['Action'] = 'RegisterDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationRegisterDestinationInput = $request->getDestination();
            foreach  ($DestinationRegisterDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }

    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for SendTestNotificationToDestination request or SendTestNotificationToDestination object itself
     * @see SendTestNotificationToDestinationInput
     * @return SendTestNotificationToDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function sendTestNotificationToDestination($request)
    {
        if (!($request instanceof SendTestNotificationToDestinationInput)) {
            $request = new SendTestNotificationToDestinationInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'SendTestNotificationToDestination';
        $httpResponse = $this->_invoke($parameters);

        $response = SendTestNotificationToDestinationResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert SendTestNotificationToDestinationInput to name value pairs
     */
    private function _convertSendTestNotificationToDestination($request)
    {
        $parameters = array();
        $parameters['Action'] = 'SendTestNotificationToDestination';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetDestination()) {
            $DestinationSendTestNotificationToDestinationInput = $request->getDestination();
            foreach  ($DestinationSendTestNotificationToDestinationInput->getDeliveryChannel() as $DeliveryChannelDestinationIndex => $DeliveryChannelDestination) {
                $parameters['Destination' . '.' . 'DeliveryChannel' . '.'  . ($DeliveryChannelDestinationIndex + 1)] =  $DeliveryChannelDestination;
            }
        }

        return $parameters;
    }

    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for UpdateSubscription request or UpdateSubscription object itself
     * @see UpdateSubscriptionInput
     * @return UpdateSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function updateSubscription($request)
    {
        if (!($request instanceof UpdateSubscriptionInput)) {
            $request = new UpdateSubscriptionInput($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateSubscription';
        $httpResponse = $this->_invoke($parameters);

        $response = UpdateSubscriptionResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert UpdateSubscriptionInput to name value pairs
     */
    private function _convertUpdateSubscription($request)
    {
        $parameters = array();
        $parameters['Action'] = 'UpdateSubscription';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSubscription()) {
            $SubscriptionUpdateSubscriptionInput = $request->getSubscription();
            foreach  ($SubscriptionUpdateSubscriptionInput->getNotificationType() as $NotificationTypeSubscriptionIndex => $NotificationTypeSubscription) {
                $parameters['Subscription' . '.' . 'NotificationType' . '.'  . ($NotificationTypeSubscriptionIndex + 1)] =  $NotificationTypeSubscription;
            }
        }

        return $parameters;
    }

    /**
     * Get Service Status
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws SubscriptionsException
     */
    public function getServiceStatus($request)
    {
        if (!($request instanceof GetServiceStatusRequest)) {
            $request = new GetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);

        $response = GetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }

        return $parameters;
    }

    // Private API ------------------------------------------------------------//

}
