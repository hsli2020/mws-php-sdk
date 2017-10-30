<?php

namespace Amazon\MWS\FBAInbound;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\FBAInbound\Exception as FBAInboundException;
use Amazon\MWS\FBAInbound\Model\ConfirmPreorderRequest;
use Amazon\MWS\FBAInbound\Model\ConfirmPreorderResponse;
use Amazon\MWS\FBAInbound\Model\ConfirmTransportInputRequest;
use Amazon\MWS\FBAInbound\Model\ConfirmTransportRequestResponse;
use Amazon\MWS\FBAInbound\Model\CreateInboundShipmentPlanRequest;
use Amazon\MWS\FBAInbound\Model\CreateInboundShipmentPlanResponse;
use Amazon\MWS\FBAInbound\Model\CreateInboundShipmentRequest;
use Amazon\MWS\FBAInbound\Model\CreateInboundShipmentResponse;
use Amazon\MWS\FBAInbound\Model\EstimateTransportInputRequest;
use Amazon\MWS\FBAInbound\Model\EstimateTransportRequestResponse;
use Amazon\MWS\FBAInbound\Model\GetBillOfLadingRequest;
use Amazon\MWS\FBAInbound\Model\GetBillOfLadingResponse;
use Amazon\MWS\FBAInbound\Model\GetPackageLabelsRequest;
use Amazon\MWS\FBAInbound\Model\GetPackageLabelsResponse;
use Amazon\MWS\FBAInbound\Model\GetPalletLabelsRequest;
use Amazon\MWS\FBAInbound\Model\GetPalletLabelsResponse;
use Amazon\MWS\FBAInbound\Model\GetPreorderInfoRequest;
use Amazon\MWS\FBAInbound\Model\GetPreorderInfoResponse;
use Amazon\MWS\FBAInbound\Model\GetPrepInstructionsForASINRequest;
use Amazon\MWS\FBAInbound\Model\GetPrepInstructionsForASINResponse;
use Amazon\MWS\FBAInbound\Model\GetPrepInstructionsForSKURequest;
use Amazon\MWS\FBAInbound\Model\GetPrepInstructionsForSKUResponse;
use Amazon\MWS\FBAInbound\Model\GetServiceStatusRequest;
use Amazon\MWS\FBAInbound\Model\GetServiceStatusResponse;
use Amazon\MWS\FBAInbound\Model\GetTransportContentRequest;
use Amazon\MWS\FBAInbound\Model\GetTransportContentResponse;
use Amazon\MWS\FBAInbound\Model\GetUniquePackageLabelsRequest;
use Amazon\MWS\FBAInbound\Model\GetUniquePackageLabelsResponse;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentItemsByNextTokenRequest;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentItemsByNextTokenResponse;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentItemsRequest;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentItemsResponse;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentsByNextTokenRequest;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentsByNextTokenResponse;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentsRequest;
use Amazon\MWS\FBAInbound\Model\ListInboundShipmentsResponse;
use Amazon\MWS\FBAInbound\Model\PutTransportContentRequest;
use Amazon\MWS\FBAInbound\Model\PutTransportContentResponse;
use Amazon\MWS\FBAInbound\Model\ResponseHeaderMetadata;
use Amazon\MWS\FBAInbound\Model\UpdateInboundShipmentRequest;
use Amazon\MWS\FBAInbound\Model\UpdateInboundShipmentResponse;
use Amazon\MWS\FBAInbound\Model\VoidTransportInputRequest;
use Amazon\MWS\FBAInbound\Model\VoidTransportRequestResponse;

/**
 * Client is an implementation of FBAInboundServiceMWS
 */
class Client extends BaseClient implements FBAInboundInterface
{
    const SERVICE_VERSION    = '2010-10-01';
    const MWS_CLIENT_VERSION = '2016-07-01';

    /**
     * Confirm Preorder
     * Given a shipment id. and date as input, this API confirms a shipment as a
     * pre-order.
     * This date must be the same as the NeedByDate (NBD) that is returned in the
     * GetPreorderInfo API. Any other date will result in an appropriate error code.
     * All items in the shipment with a release date on or after the
     * ConfirmedFulfillableDate ( also returned by the GetPreorderInfo  API) would
     * be pre-orderable on the website and would be fulfilled without promise breaks,
     * if the NBD is met.
     *
     * @param mixed $request array of parameters for ConfirmPreorder request or ConfirmPreorder object itself
     * @see ConfirmPreorderRequest
     * @return ConfirmPreorderResponse
     *
     * @throws FBAInboundException
     */
    public function confirmPreorder($request)
    {
        if (!($request instanceof ConfirmPreorderRequest)) {
            $request = new ConfirmPreorderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmPreorder';
        $httpResponse = $this->_invoke($parameters);

        $response = ConfirmPreorderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ConfirmPreorderRequest to name value pairs
     */
    private function _convertConfirmPreorder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ConfirmPreorder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetNeedByDate()) {
            $parameters['NeedByDate'] =  $request->getNeedByDate();
        }

        return $parameters;
    }

    /**
     * Confirm Transport Request
     * Confirms the estimate returned by the EstimateTransportRequest operation.
     *     Once this operation has been called successfully, the seller agrees to allow Amazon to charge
     *     their account the amount returned in the estimate.
     *
     * @param mixed $request array of parameters for ConfirmTransportRequest request or ConfirmTransportRequest object itself
     * @see ConfirmTransportInputRequest
     * @return ConfirmTransportRequestResponse
     *
     * @throws FBAInboundException
     */
    public function confirmTransportRequest($request)
    {
        if (!($request instanceof ConfirmTransportInputRequest)) {
            $request = new ConfirmTransportInputRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ConfirmTransportRequest';
        $httpResponse = $this->_invoke($parameters);

        $response = ConfirmTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ConfirmTransportInputRequest to name value pairs
     */
    private function _convertConfirmTransportRequest($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ConfirmTransportRequest';
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
     * Create Inbound Shipment
     * Creates an inbound shipment. It may include up to 200 items.
     * The initial status of a shipment will be set to 'Working'.
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     * More items may be added using the Update call.
     *
     * @param mixed $request array of parameters for CreateInboundShipment request or CreateInboundShipment object itself
     * @see CreateInboundShipmentRequest
     * @return CreateInboundShipmentResponse
     *
     * @throws FBAInboundException
     */
    public function createInboundShipment($request)
    {
        if (!($request instanceof CreateInboundShipmentRequest)) {
            $request = new CreateInboundShipmentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipment';
        $httpResponse = $this->_invoke($parameters);

        $response = CreateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CreateInboundShipmentRequest to name value pairs
     */
    private function _convertCreateInboundShipment($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CreateInboundShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetInboundShipmentHeader()) {
            $InboundShipmentHeaderCreateInboundShipmentRequest = $request->getInboundShipmentHeader();
            foreach  ($InboundShipmentHeaderCreateInboundShipmentRequest->getShipmentName() as $ShipmentNameInboundShipmentHeaderIndex => $ShipmentNameInboundShipmentHeader) {
                $parameters['InboundShipmentHeader' . '.' . 'ShipmentName' . '.'  . ($ShipmentNameInboundShipmentHeaderIndex + 1)] =  $ShipmentNameInboundShipmentHeader;
            }
        }
        if ($request->isSetInboundShipmentItems()) {
            $InboundShipmentItemsCreateInboundShipmentRequest = $request->getInboundShipmentItems();
            foreach  ($InboundShipmentItemsCreateInboundShipmentRequest->getmember() as $memberInboundShipmentItemsIndex => $memberInboundShipmentItems) {
                $parameters['InboundShipmentItems' . '.' . 'member' . '.'  . ($memberInboundShipmentItemsIndex + 1)] =  $memberInboundShipmentItems;
            }
        }

        return $parameters;
    }

    /**
     * Create Inbound Shipment Plan
     * Plans inbound shipments for a set of items.  Registers identifiers if needed,
     * and assigns ShipmentIds for planned shipments.
     * When all the items are not all in the same category (e.g. some sortable, some
     * non-sortable) it may be necessary to create multiple shipments (one for each
     * of the shipment groups returned).
     *
     * @param mixed $request array of parameters for CreateInboundShipmentPlan request or CreateInboundShipmentPlan object itself
     * @see CreateInboundShipmentPlanRequest
     * @return CreateInboundShipmentPlanResponse
     *
     * @throws FBAInboundException
     */
    public function createInboundShipmentPlan($request)
    {
        if (!($request instanceof CreateInboundShipmentPlanRequest)) {
            $request = new CreateInboundShipmentPlanRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'CreateInboundShipmentPlan';
        $httpResponse = $this->_invoke($parameters);

        $response = CreateInboundShipmentPlanResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert CreateInboundShipmentPlanRequest to name value pairs
     */
    private function _convertCreateInboundShipmentPlan($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CreateInboundShipmentPlan';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipFromAddress()) {
            $ShipFromAddressCreateInboundShipmentPlanRequest = $request->getShipFromAddress();
            foreach  ($ShipFromAddressCreateInboundShipmentPlanRequest->getName() as $NameShipFromAddressIndex => $NameShipFromAddress) {
                $parameters['ShipFromAddress' . '.' . 'Name' . '.'  . ($NameShipFromAddressIndex + 1)] =  $NameShipFromAddress;
            }
        }
        if ($request->isSetLabelPrepPreference()) {
            $parameters['LabelPrepPreference'] =  $request->getLabelPrepPreference();
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }
        if ($request->isSetShipToCountrySubdivisionCode()) {
            $parameters['ShipToCountrySubdivisionCode'] =  $request->getShipToCountrySubdivisionCode();
        }
        if ($request->isSetInboundShipmentPlanRequestItems()) {
            $InboundShipmentPlanRequestItemsCreateInboundShipmentPlanRequest = $request->getInboundShipmentPlanRequestItems();
            foreach  ($InboundShipmentPlanRequestItemsCreateInboundShipmentPlanRequest->getmember() as $memberInboundShipmentPlanRequestItemsIndex => $memberInboundShipmentPlanRequestItems) {
                $parameters['InboundShipmentPlanRequestItems' . '.' . 'member' . '.'  . ($memberInboundShipmentPlanRequestItemsIndex + 1)] =  $memberInboundShipmentPlanRequestItems;
            }
        }

        return $parameters;
    }

    /**
     * Estimate Transport Request
     * Initiates the process for requesting an estimated shipping cost based-on the shipment
     *     for which the request is being made, whether or not the carrier shipment is partnered/non-partnered
     *     and the carrier type.
     *
     * @param mixed $request array of parameters for EstimateTransportRequest request or EstimateTransportRequest object itself
     * @see EstimateTransportInputRequest
     * @return EstimateTransportRequestResponse
     *
     * @throws FBAInboundException
     */
    public function estimateTransportRequest($request)
    {
        if (!($request instanceof EstimateTransportInputRequest)) {
            $request = new EstimateTransportInputRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'EstimateTransportRequest';
        $httpResponse = $this->_invoke($parameters);

        $response = EstimateTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert EstimateTransportInputRequest to name value pairs
     */
    private function _convertEstimateTransportRequest($request)
    {
        $parameters = array();
        $parameters['Action'] = 'EstimateTransportRequest';
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
     * Get Bill Of Lading
     * Retrieves the PDF-formatted BOL data for a partnered LTL shipment.
     *     This PDF data will be ZIP'd and then it will be encoded as a Base64 string, and a
     *     MD5 hash is included with the response to validate the BOL data which will be encoded as Base64.
     *
     * @param mixed $request array of parameters for GetBillOfLading request or GetBillOfLading object itself
     * @see GetBillOfLadingRequest
     * @return GetBillOfLadingResponse
     *
     * @throws FBAInboundException
     */
    public function getBillOfLading($request)
    {
        if (!($request instanceof GetBillOfLadingRequest)) {
            $request = new GetBillOfLadingRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetBillOfLading';
        $httpResponse = $this->_invoke($parameters);

        $response = GetBillOfLadingResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetBillOfLadingRequest to name value pairs
     */
    private function _convertGetBillOfLading($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetBillOfLading';
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
     * Get Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing
     *     Amazon-partnered carriers. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for GetPackageLabels request or GetPackageLabels object itself
     * @see GetPackageLabelsRequest
     * @return GetPackageLabelsResponse
     *
     * @throws FBAInboundException
     */
    public function getPackageLabels($request)
    {
        if (!($request instanceof GetPackageLabelsRequest)) {
            $request = new GetPackageLabelsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPackageLabels';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPackageLabelsRequest to name value pairs
     */
    private function _convertGetPackageLabels($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPackageLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetNumberOfPackages()) {
            $parameters['NumberOfPackages'] =  $request->getNumberOfPackages();
        }

        return $parameters;
    }

    /**
     * Get Pallet Labels
     * Retrieves the PDF-formatted pallet label data for the pallets in an LTL shipment. These labels
     *     include relevant data for shipments being sent to Amazon Fulfillment Centers. The PDF data will be
     *     ZIP'd and then it will be encoded as a Base64 string, and MD5 hash is included with the response to
     *     validate the label data which will be encoded as Base64. The language of the address and FC prep
     *     instructions sections of the labels are determined by the marketplace in which the request is being
     *     made and the marketplace of the destination FC, respectively.
     *
     * @param mixed $request array of parameters for GetPalletLabels request or GetPalletLabels object itself
     * @see GetPalletLabelsRequest
     * @return GetPalletLabelsResponse
     *
     * @throws FBAInboundException
     */
    public function getPalletLabels($request)
    {
        if (!($request instanceof GetPalletLabelsRequest)) {
            $request = new GetPalletLabelsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPalletLabels';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPalletLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPalletLabelsRequest to name value pairs
     */
    private function _convertGetPalletLabels($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPalletLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetNumberOfPallets()) {
            $parameters['NumberOfPallets'] =  $request->getNumberOfPallets();
        }

        return $parameters;
    }

    /**
     * Get Preorder Info
     * Given a shipment id. as input, based on the release date of the items in the
     * shipment, this API returns the suggested need By Date that the shipment items
     * must reach Amazon FC to successfully fulfill Pre-Orders without any promise
     * breaks.
     * This API also returns the confirmed Fullfillable date. All items in the
     * shipment that have a release date on or after this date would have the
     * pre-order buy box show up on the detail page if this shipment is marked as a
     * pre-orderable.
     *
     * @param mixed $request array of parameters for GetPreorderInfo request or GetPreorderInfo object itself
     * @see GetPreorderInfoRequest
     * @return GetPreorderInfoResponse
     *
     * @throws FBAInboundException
     */
    public function getPreorderInfo($request)
    {
        if (!($request instanceof GetPreorderInfoRequest)) {
            $request = new GetPreorderInfoRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPreorderInfo';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPreorderInfoResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPreorderInfoRequest to name value pairs
     */
    private function _convertGetPreorderInfo($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPreorderInfo';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }

        return $parameters;
    }

    /**
     * Get Prep Instructions For ASIN
     * Returns the required prep that must be performed for a set of items, identified
     * by ASINs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for GetPrepInstructionsForASIN request or GetPrepInstructionsForASIN object itself
     * @see GetPrepInstructionsForASINRequest
     * @return GetPrepInstructionsForASINResponse
     *
     * @throws FBAInboundException
     */
    public function getPrepInstructionsForASIN($request)
    {
        if (!($request instanceof GetPrepInstructionsForASINRequest)) {
            $request = new GetPrepInstructionsForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPrepInstructionsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPrepInstructionsForASINRequest to name value pairs
     */
    private function _convertGetPrepInstructionsForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPrepInstructionsForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetAsinList()) {
            $AsinListGetPrepInstructionsForASINRequest = $request->getAsinList();
            foreach  ($AsinListGetPrepInstructionsForASINRequest->getId() as $IdAsinListIndex => $IdAsinList) {
                $parameters['AsinList' . '.' . 'Id' . '.'  . ($IdAsinListIndex + 1)] =  $IdAsinList;
            }
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }

        return $parameters;
    }

    /**
     * Get Prep Instructions For SKU
     * Returns the required prep that must be performed for a set of items, identified
     * by SellerSKUs, that will be sent to Amazon. It returns guidance for the seller
     * on how to prepare the items to be sent in to Amazon's Fulfillment Centers, and
     * identifies the labeling required for the items, and gives the seller a list
     * of additional required prep that must be performed.
     *
     * @param mixed $request array of parameters for GetPrepInstructionsForSKU request or GetPrepInstructionsForSKU object itself
     * @see GetPrepInstructionsForSKURequest
     * @return GetPrepInstructionsForSKUResponse
     *
     * @throws FBAInboundException
     */
    public function getPrepInstructionsForSKU($request)
    {
        if (!($request instanceof GetPrepInstructionsForSKURequest)) {
            $request = new GetPrepInstructionsForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetPrepInstructionsForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetPrepInstructionsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetPrepInstructionsForSKURequest to name value pairs
     */
    private function _convertGetPrepInstructionsForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetPrepInstructionsForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetPrepInstructionsForSKURequest = $request->getSellerSKUList();
            foreach  ($SellerSKUListGetPrepInstructionsForSKURequest->getId() as $IdSellerSKUListIndex => $IdSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'Id' . '.'  . ($IdSellerSKUListIndex + 1)] =  $IdSellerSKUList;
            }
        }
        if ($request->isSetShipToCountryCode()) {
            $parameters['ShipToCountryCode'] =  $request->getShipToCountryCode();
        }

        return $parameters;
    }

    /**
     * Get Service Status
     * Gets the status of the service.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws FBAInboundException
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
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }

        return $parameters;
    }

    /**
     * Get Transport Content
     * A read-only operation which sellers use to retrieve the current
     *     details about the transportation of an inbound shipment, including status of the
     *     partnered carrier workflow and status of individual packages when they arrive at our FCs.
     *
     * @param mixed $request array of parameters for GetTransportContent request or GetTransportContent object itself
     * @see GetTransportContentRequest
     * @return GetTransportContentResponse
     *
     * @throws FBAInboundException
     */
    public function getTransportContent($request)
    {
        if (!($request instanceof GetTransportContentRequest)) {
            $request = new GetTransportContentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetTransportContent';
        $httpResponse = $this->_invoke($parameters);

        $response = GetTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetTransportContentRequest to name value pairs
     */
    private function _convertGetTransportContent($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetTransportContent';
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
     * Get Unique Package Labels
     * Retrieves the PDF-formatted package label data for the packages of the
     *     shipment. These labels will include relevant data for shipments utilizing
     *     Amazon-partnered carriers. Each label contains a unique package identifier that represents the mapping between
     *     physical and virtual packages. This API requires that Carton Information has been provided for all packages in the
     *     shipment. The PDF data will be ZIP'd and then it will be encoded as a Base64 string, and
     *     MD5 hash is included with the response to validate the label data which will be encoded as Base64.
     *     The language of the address and FC prep instructions sections of the labels are
     *     determined by the marketplace in which the request is being made and the marketplace of
     *     the destination FC, respectively.
     *
     *     Only select PageTypes are supported in each marketplace. By marketplace, the
     *     supported types are:
     *       * US non-partnered UPS: PackageLabel_Letter_6
     *       * US partnered-UPS: PackageLabel_Letter_2
     *       * GB, DE, FR, IT, ES: PackageLabel_A4_4, PackageLabel_Plain_Paper
     *       * Partnered EU: PackageLabel_A4_2
     *       * JP/CN: PackageLabel_Plain_Paper
     *
     * @param mixed $request array of parameters for GetUniquePackageLabels request or GetUniquePackageLabels object itself
     * @see GetUniquePackageLabelsRequest
     * @return GetUniquePackageLabelsResponse
     *
     * @throws FBAInboundException
     */
    public function getUniquePackageLabels($request)
    {
        if (!($request instanceof GetUniquePackageLabelsRequest)) {
            $request = new GetUniquePackageLabelsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetUniquePackageLabels';
        $httpResponse = $this->_invoke($parameters);

        $response = GetUniquePackageLabelsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetUniquePackageLabelsRequest to name value pairs
     */
    private function _convertGetUniquePackageLabels($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetUniquePackageLabels';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetPageType()) {
            $parameters['PageType'] =  $request->getPageType();
        }
        if ($request->isSetPackageLabelsToPrint()) {
            $PackageLabelsToPrintGetUniquePackageLabelsRequest = $request->getPackageLabelsToPrint();
            foreach  ($PackageLabelsToPrintGetUniquePackageLabelsRequest->getmember() as $memberPackageLabelsToPrintIndex => $memberPackageLabelsToPrint) {
                $parameters['PackageLabelsToPrint' . '.' . 'member' . '.'  . ($memberPackageLabelsToPrintIndex + 1)] =  $memberPackageLabelsToPrint;
            }
        }

        return $parameters;
    }

    /**
     * List Inbound Shipment Items
     * Gets the first set of inbound shipment items for the given ShipmentId or
     * all inbound shipment items updated between the given date range.
     * A NextToken is also returned to further iterate through the Seller's
     * remaining inbound shipment items. To get the next set of inbound
     * shipment items, you must call ListInboundShipmentItemsByNextToken and
     * pass in the 'NextToken' this call returned. If a NextToken is not
     * returned, it indicates the end-of-data. Use LastUpdatedBefore
     * and LastUpdatedAfter to filter results based on last updated time.
     * Either the ShipmentId or a pair of LastUpdatedBefore and LastUpdatedAfter
     * must be passed in. if ShipmentId is set, the LastUpdatedBefore and
     * LastUpdatedAfter will be ignored.
     *
     * @param mixed $request array of parameters for ListInboundShipmentItems request or ListInboundShipmentItems object itself
     * @see ListInboundShipmentItemsRequest
     * @return ListInboundShipmentItemsResponse
     *
     * @throws FBAInboundException
     */
    public function listInboundShipmentItems($request)
    {
        if (!($request instanceof ListInboundShipmentItemsRequest)) {
            $request = new ListInboundShipmentItemsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItems';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInboundShipmentItemsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInboundShipmentItemsRequest to name value pairs
     */
    private function _convertListInboundShipmentItems($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentItems';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetLastUpdatedBefore()) {
            $parameters['LastUpdatedBefore'] =  $request->getLastUpdatedBefore();
        }
        if ($request->isSetLastUpdatedAfter()) {
            $parameters['LastUpdatedAfter'] =  $request->getLastUpdatedAfter();
        }

        return $parameters;
    }


    /**
     * List Inbound Shipment Items By Next Token
     * Gets the next set of inbound shipment items with the NextToken
     * which can be used to iterate through the remaining inbound shipment
     * items. If a NextToken is not returned, it indicates the end-of-data.
     * You must first call ListInboundShipmentItems to get a 'NextToken'.
     *
     * @param mixed $request array of parameters for ListInboundShipmentItemsByNextToken request or ListInboundShipmentItemsByNextToken object itself
     * @see ListInboundShipmentItemsByNextTokenRequest
     * @return ListInboundShipmentItemsByNextTokenResponse
     *
     * @throws FBAInboundException
     */
    public function listInboundShipmentItemsByNextToken($request)
    {
        if (!($request instanceof ListInboundShipmentItemsByNextTokenRequest)) {
            $request = new ListInboundShipmentItemsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInboundShipmentItemsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInboundShipmentItemsByNextTokenRequest to name value pairs
     */
    private function _convertListInboundShipmentItemsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentItemsByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * List Inbound Shipments
     * Get the first set of inbound shipments created by a Seller according to
     * the specified shipment status or the specified shipment Id. A NextToken
     * is also returned to further iterate through the Seller's remaining
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     * At least one of ShipmentStatusList and ShipmentIdList must be passed in.
     * if both are passed in, then only shipments that match the specified
     * shipment Id and specified shipment status will be returned.
     * the LastUpdatedBefore and LastUpdatedAfter are optional, they are used
     * to filter results based on last update time of the shipment.
     *
     * @param mixed $request array of parameters for ListInboundShipments request or ListInboundShipments object itself
     * @see ListInboundShipmentsRequest
     * @return ListInboundShipmentsResponse
     *
     * @throws FBAInboundException
     */
    public function listInboundShipments($request)
    {
        if (!($request instanceof ListInboundShipmentsRequest)) {
            $request = new ListInboundShipmentsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipments';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInboundShipmentsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInboundShipmentsRequest to name value pairs
     */
    private function _convertListInboundShipments($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipments';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentStatusList()) {
            $ShipmentStatusListListInboundShipmentsRequest = $request->getShipmentStatusList();
            foreach  ($ShipmentStatusListListInboundShipmentsRequest->getmember() as $memberShipmentStatusListIndex => $memberShipmentStatusList) {
                $parameters['ShipmentStatusList' . '.' . 'member' . '.'  . ($memberShipmentStatusListIndex + 1)] =  $memberShipmentStatusList;
            }
        }
        if ($request->isSetShipmentIdList()) {
            $ShipmentIdListListInboundShipmentsRequest = $request->getShipmentIdList();
            foreach  ($ShipmentIdListListInboundShipmentsRequest->getmember() as $memberShipmentIdListIndex => $memberShipmentIdList) {
                $parameters['ShipmentIdList' . '.' . 'member' . '.'  . ($memberShipmentIdListIndex + 1)] =  $memberShipmentIdList;
            }
        }
        if ($request->isSetLastUpdatedBefore()) {
            $parameters['LastUpdatedBefore'] =  $request->getLastUpdatedBefore();
        }
        if ($request->isSetLastUpdatedAfter()) {
            $parameters['LastUpdatedAfter'] =  $request->getLastUpdatedAfter();
        }

        return $parameters;
    }

    /**
     * List Inbound Shipments By Next Token
     * Gets the next set of inbound shipments created by a Seller with the
     * NextToken which can be used to iterate through the remaining inbound
     * shipments. If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for ListInboundShipmentsByNextToken request or ListInboundShipmentsByNextToken object itself
     * @see ListInboundShipmentsByNextTokenRequest
     * @return ListInboundShipmentsByNextTokenResponse
     *
     * @throws FBAInboundException
     */
    public function listInboundShipmentsByNextToken($request)
    {
        if (!($request instanceof ListInboundShipmentsByNextTokenRequest)) {
            $request = new ListInboundShipmentsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListInboundShipmentsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListInboundShipmentsByNextTokenRequest to name value pairs
     */
    private function _convertListInboundShipmentsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListInboundShipmentsByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * Put Transport Content
     * A write operation which sellers use to provide transportation details regarding
     *     how an inbound shipment will arrive at Amazon's Fulfillment Centers.
     *
     * @param mixed $request array of parameters for PutTransportContent request or PutTransportContent object itself
     * @see PutTransportContentRequest
     * @return PutTransportContentResponse
     *
     * @throws FBAInboundException
     */
    public function putTransportContent($request)
    {
        if (!($request instanceof PutTransportContentRequest)) {
            $request = new PutTransportContentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'PutTransportContent';
        $httpResponse = $this->_invoke($parameters);

        $response = PutTransportContentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert PutTransportContentRequest to name value pairs
     */
    private function _convertPutTransportContent($request)
    {
        $parameters = array();
        $parameters['Action'] = 'PutTransportContent';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetIsPartnered()) {
            $parameters['IsPartnered'] =  $request->getIsPartnered() ? "true" : "false";
        }
        if ($request->isSetShipmentType()) {
            $parameters['ShipmentType'] =  $request->getShipmentType();
        }
        if ($request->isSetTransportDetails()) {
            $TransportDetailsPutTransportContentRequest = $request->getTransportDetails();
            foreach  ($TransportDetailsPutTransportContentRequest->getPartneredSmallParcelData() as $PartneredSmallParcelDataTransportDetailsIndex => $PartneredSmallParcelDataTransportDetails) {
                $parameters['TransportDetails' . '.' . 'PartneredSmallParcelData' . '.'  . ($PartneredSmallParcelDataTransportDetailsIndex + 1)] =  $PartneredSmallParcelDataTransportDetails;
            }
        }

        return $parameters;
    }

    /**
     * Update Inbound Shipment
     * Updates an pre-existing inbound shipment specified by the
     * ShipmentId. It may include up to 200 items.
     * If InboundShipmentHeader is set. it replaces the header information
     * for the given shipment.
     * If InboundShipmentItems is set. it adds, replaces and removes
     * the line time to inbound shipment.
     * For non-existing item, it will add the item for new line item;
     * For existing line items, it will replace the QuantityShipped for the item.
     * For QuantityShipped = 0, it indicates the item should be removed from the shipment
     *
     * This operation will simply return a shipment Id upon success,
     * otherwise an explicit error will be returned.
     *
     * @param mixed $request array of parameters for UpdateInboundShipment request or UpdateInboundShipment object itself
     * @see UpdateInboundShipmentRequest
     * @return UpdateInboundShipmentResponse
     *
     * @throws FBAInboundException
     */
    public function updateInboundShipment($request)
    {
        if (!($request instanceof UpdateInboundShipmentRequest)) {
            $request = new UpdateInboundShipmentRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'UpdateInboundShipment';
        $httpResponse = $this->_invoke($parameters);

        $response = UpdateInboundShipmentResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert UpdateInboundShipmentRequest to name value pairs
     */
    private function _convertUpdateInboundShipment($request)
    {
        $parameters = array();
        $parameters['Action'] = 'UpdateInboundShipment';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetShipmentId()) {
            $parameters['ShipmentId'] =  $request->getShipmentId();
        }
        if ($request->isSetInboundShipmentHeader()) {
            $InboundShipmentHeaderUpdateInboundShipmentRequest = $request->getInboundShipmentHeader();
            foreach  ($InboundShipmentHeaderUpdateInboundShipmentRequest->getShipmentName() as $ShipmentNameInboundShipmentHeaderIndex => $ShipmentNameInboundShipmentHeader) {
                $parameters['InboundShipmentHeader' . '.' . 'ShipmentName' . '.'  . ($ShipmentNameInboundShipmentHeaderIndex + 1)] =  $ShipmentNameInboundShipmentHeader;
            }
        }
        if ($request->isSetInboundShipmentItems()) {
            $InboundShipmentItemsUpdateInboundShipmentRequest = $request->getInboundShipmentItems();
            foreach  ($InboundShipmentItemsUpdateInboundShipmentRequest->getmember() as $memberInboundShipmentItemsIndex => $memberInboundShipmentItems) {
                $parameters['InboundShipmentItems' . '.' . 'member' . '.'  . ($memberInboundShipmentItemsIndex + 1)] =  $memberInboundShipmentItems;
            }
        }

        return $parameters;
    }

    /**
     * Void Transport Request
     * Voids a previously-confirmed transport request. It only succeeds for requests
     *     made by the VoidDeadline provided in the PartneredEstimate component of the
     *     response of the GetTransportContent operation for a shipment. Currently this
     *     deadline is 24 hours after confirming a transport request for a partnered small parcel
     *     request and 1 hour after confirming a transport request for a partnered LTL/TL
     *     request, though this is subject to change at any time without notice.
     *
     * @param mixed $request array of parameters for VoidTransportRequest request or VoidTransportRequest object itself
     * @see VoidTransportInputRequest
     * @return VoidTransportRequestResponse
     *
     * @throws FBAInboundException
     */
    public function voidTransportRequest($request)
    {
        if (!($request instanceof VoidTransportInputRequest)) {
            $request = new VoidTransportInputRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'VoidTransportRequest';
        $httpResponse = $this->_invoke($parameters);

        $response = VoidTransportRequestResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert VoidTransportInputRequest to name value pairs
     */
    private function _convertVoidTransportRequest($request)
    {
        $parameters = array();
        $parameters['Action'] = 'VoidTransportRequest';
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

    // Private API ------------------------------------------------------------//

}
