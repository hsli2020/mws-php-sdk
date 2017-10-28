<?php

namespace Amazon\MWS\MerchantFulfillment;

use Amazon\MWS\MerchantFulfillment\Model\CancelShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\CreateShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetEligibleShippingServicesResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetShipmentResponse;
use Amazon\MWS\MerchantFulfillment\Model\GetServiceStatusResponse;

class Mock implements MerchantFulfillmentInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for CancelShipment request or CancelShipment object itself
     * @see CancelShipment
     * @return CancelShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function cancelShipment($request)
    {
        return CancelShipmentResponse::fromXML($this->_invoke('CancelShipment'));
    }

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for CreateShipment request or CreateShipment object itself
     * @see CreateShipment
     * @return CreateShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function createShipment($request)
    {
        return CreateShipmentResponse::fromXML($this->_invoke('CreateShipment'));
    }

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for GetEligibleShippingServices request or GetEligibleShippingServices object itself
     * @see GetEligibleShippingServices
     * @return GetEligibleShippingServicesResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getEligibleShippingServices($request)
    {
        return GetEligibleShippingServicesResponse::fromXML($this->_invoke('GetEligibleShippingServices'));
    }

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for GetShipment request or GetShipment object itself
     * @see GetShipment
     * @return GetShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getShipment($request)
    {
        return GetShipmentResponse::fromXML($this->_invoke('GetShipment'));
    }

    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
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
