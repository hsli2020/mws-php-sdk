<?php

namespace Amazon\MWS\MerchantFulfillment;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\MerchantFulfillment\Exception as MerchantFulfillmentException;
use Amazon\MWS\MerchantFulfillment\Model\CancelShipmentRequest;
use Amazon\MWS\MerchantFulfillment\Model\CancelShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\CreateShipmentRequest;
use Amazon\MWS\MerchantFulfillment\Model\CreateShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetEligibleShippingServicesRequest;
use Amazon\MWS\MerchantFulfillment\Model\GetEligibleShippingServicesResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetServiceStatusRequest;
use Amazon\MWS\MerchantFulfillment\Model\GetServiceStatusResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetShipmentRequest;
use Amazon\MWS\MerchantFulfillment\Model\GetShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\ResponseHeaderMetadata;

/**
 * MerchantFulfillment\Client is an implementation of MerchantFulfillmentService
 */
class Client extends BaseClient implements MerchantFulfillmentInterface
{
    const SERVICE_VERSION    = '2015-06-01';
    const MWS_CLIENT_VERSION = '2016-03-30';

    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for CancelShipment request or CancelShipment object itself
     * @see CancelShipmentRequest
     * @return CancelShipmentResponse
     *
     * @throws Exception
     */
    public function cancelShipment($request)
    {
        if (!($request instanceof CancelShipmentRequest)) {
            $request = new CancelShipmentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CancelShipment';
        $httpResponse = $this->_invoke($parameters);

        $response = CancelShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CancelShipmentRequest to name value pairs
     */
    private function _convertCancelShipment($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CancelShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for CreateShipment request or CreateShipment object itself
     * @see CreateShipmentRequest
     * @return CreateShipmentResponse
     *
     * @throws Exception
     */
    public function createShipment($request)
    {
        if (!($request instanceof CreateShipmentRequest)) {
            $request = new CreateShipmentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateShipment';
        $httpResponse = $this->_invoke($parameters);

        $response = CreateShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CreateShipmentRequest to name value pairs
     */
    private function _convertCreateShipment($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CreateShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentRequestDetails()) {
            $ShipmentRequestDetailsCreateShipmentRequest = $request->getShipmentRequestDetails();
            foreach  ($ShipmentRequestDetailsCreateShipmentRequest->getAmazonOrderId() as $AmazonOrderIdShipmentRequestDetailsIndex => $AmazonOrderIdShipmentRequestDetails) {
                $parameters['ShipmentRequestDetails' . '.' . 'AmazonOrderId' . '.'  . ($AmazonOrderIdShipmentRequestDetailsIndex + 1)] =  $AmazonOrderIdShipmentRequestDetails;
            }
        }
        if ($request->isSetShippingServiceId()) {
            $parameters['ShippingServiceId'] =  $request->getShippingServiceId();
        }
        if ($request->isSetShippingServiceOfferId()) {
            $parameters['ShippingServiceOfferId'] =  $request->getShippingServiceOfferId();
        }

        return $parameters;
    }

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for GetEligibleShippingServices request or GetEligibleShippingServices object itself
     * @see GetEligibleShippingServicesRequest
     * @return GetEligibleShippingServicesResponse
     *
     * @throws Exception
     */
    public function getEligibleShippingServices($request)
    {
        if (!($request instanceof GetEligibleShippingServicesRequest)) {
            $request = new GetEligibleShippingServicesRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetEligibleShippingServices';
        $httpResponse = $this->_invoke($parameters);

        $response = GetEligibleShippingServicesResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetEligibleShippingServicesRequest to name value pairs
     */
    private function _convertGetEligibleShippingServices($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetEligibleShippingServices';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentRequestDetails()) {
            $ShipmentRequestDetailsGetEligibleShippingServicesRequest = $request->getShipmentRequestDetails();
            foreach  ($ShipmentRequestDetailsGetEligibleShippingServicesRequest->getAmazonOrderId() as $AmazonOrderIdShipmentRequestDetailsIndex => $AmazonOrderIdShipmentRequestDetails) {
                $parameters['ShipmentRequestDetails' . '.' . 'AmazonOrderId' . '.'  . ($AmazonOrderIdShipmentRequestDetailsIndex + 1)] =  $AmazonOrderIdShipmentRequestDetails;
            }
        }

        return $parameters;
    }

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for GetShipment request or GetShipment object itself
     * @see GetShipmentRequest
     * @return GetShipmentResponse
     *
     * @throws Exception
     */
    public function getShipment($request)
    {
        if (!($request instanceof GetShipmentRequest)) {
            $request = new GetShipmentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetShipment';
        $httpResponse = $this->_invoke($parameters);

        $response = GetShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetShipmentRequest to name value pairs
     */
    private function _convertGetShipment($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws Exception
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
        if ($body == null){
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new Exception($exProps);
        }

        return array(
                'Status' => $responseStatus,
                'ResponseBody' => $body,
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

}
