<?php

namespace Amazon\MWS\Subscriptions;

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
class Client implements SubscriptionsInterface
{
    const SERVICE_VERSION    = '2013-07-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array(
            'ServiceURL'       => null,
            'UserAgent'        => 'MWSSubscriptionsService PHP5 Library',
            'SignatureVersion' => 2,
            'SignatureMethod'  => 'HmacSHA256',
            'ProxyHost'        => null,
            'ProxyPort'        => -1,
            'ProxyUsername'    => null,
            'ProxyPassword'    => null,
            'MaxErrorRetry'    => 3,
            'Headers'          => array()
        );

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

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }

    private function setUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($attributes)) {
            $attributes = array ();
        }

        $this->_config['UserAgent'] =
            $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($applicationName) || $applicationName === "") {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent =
            $this->quoteApplicationName($applicationName)
            . '/'
            . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for $key cannot be null or empty.");
            }

            $userAgent .= '; '
                . $this->quoteAttributeName($key)
                . '='
                . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

   /**
    * Collapse multiple whitespace characters into a single ' ' character.
    * @param $s
    * @return string
    */
    private function collapseWhitespace($s)
    {
        return preg_replace('/ {2,}|\s/', ' ', $s);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\//', '\\/', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);

        return $quotedString;
    }

    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                throw new Exception(
                    array ('ErrorCode' => 'InvalidServiceURL',
                           'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status = $response['Status'];
                if ($status == 200) {
                    return array('ResponseBody' => $response['ResponseBody'],
                      'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'],
                    $status, $response['ResponseHeaderMetadata']);
            }
        } catch (Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if ($xmlBody !== false) {  // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }

        return new Exception($exProps);
    }

    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
                $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach ($allHeaders as $name => $val) {
            $str = $name . ": ";
            if (isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1) {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }

        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = "";
        $response = curl_exec($ch);

        if ($response === false) {
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            curl_close($ch);
            throw new Exception($exProps);
        }

        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }

    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     */
    private function _extractHeadersAndBody($response)
    {
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; $count < count($responseComponents) && $body == null; $count++) {

            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);

            if ($responseStatus != null && $this->_httpHeadersHaveContent($headers)){
                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }

        //If the body is null here then we were unable to parse the response and will throw an exception
        if ($body == null) {
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new Exception($exProps);
        }

        return array(
                'Status' => $responseStatus,
                'ResponseBody' => $body,
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

    /**
     * parse the status line of a header string for the proper format and
     * return the status code
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     */
    private function _extractHttpStatusCode($headers)
    {
    	$statusCode = null;
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
        	//The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2];
        }
        return $statusCode;
    }

    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header
     */
    private function _httpHeadersHaveContent($headers)
    {
        return (1 === preg_match("/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|$)/", $headers) ||
                1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|$)/i", $headers));
    }

   /**
    *  extract a ResponseHeaderMetadata object from the raw headers
    */
    private function _extractResponseHeaderMetadata($rawHeaders)
    {
        $inputHeaders = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers = array();
        $headers['x-mws-request-id'] = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp'] = null;
        $headers['x-mws-quota-max'] = null;
        $headers['x-mws-quota-remaining'] = null;
        $headers['x-mws-quota-resetsOn'] = null;

        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode (': ', $currentHeader);
            if (isset($keyValue[1])) {
                list ($key, $value) = $keyValue;
                if (isset($headers[$key]) && $headers[$key]!==null) {
                    $headers[$key] = $headers[$key] . "," . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }

        return new ResponseHeaderMetadata(
          $headers['x-mws-request-id'],
          $headers['x-mws-response-context'],
          $headers['x-mws-timestamp'],
          $headers['x-mws-quota-max'],
          $headers['x-mws-quota-remaining'],
          $headers['x-mws-quota-resetsOn']);
    }

    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     * @param $ch curl handle
     */
    protected function setSSLCurlOptions($ch)
    {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    }

    /**
     * Exponential sleep on failed request
     *
     * @param retries current retry
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000);
            usleep($delay);
            return true;
        }
        return false;
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }

}
