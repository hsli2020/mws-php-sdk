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

}
