<?php

namespace Amazon\MWS\Orders;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Orders\Exception as OrdersException;
use Amazon\MWS\Orders\Model\GetOrderRequest;
use Amazon\MWS\Orders\Model\GetOrderResponse;
use Amazon\MWS\Orders\Model\GetServiceStatusRequest;
use Amazon\MWS\Orders\Model\GetServiceStatusResponse;
use Amazon\MWS\Orders\Model\ListOrderItemsByNextTokenRequest;
use Amazon\MWS\Orders\Model\ListOrderItemsByNextTokenResponse;
use Amazon\MWS\Orders\Model\ListOrderItemsRequest;
use Amazon\MWS\Orders\Model\ListOrderItemsResponse;
use Amazon\MWS\Orders\Model\ListOrdersByNextTokenRequest;
use Amazon\MWS\Orders\Model\ListOrdersByNextTokenResponse;
use Amazon\MWS\Orders\Model\ListOrdersRequest;
use Amazon\MWS\Orders\Model\ListOrdersResponse;
use Amazon\MWS\Orders\Model\ResponseHeaderMetadata;

/**
 * Orders\Client is an implementation of MarketplaceWebServiceOrders
 */
class Client extends BaseClient implements OrdersInterface
{
    const SERVICE_VERSION    = '2013-09-01';
    const MWS_CLIENT_VERSION = '2015-09-24';

    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for GetOrder request or GetOrder object itself
     * @see GetOrderRequest
     * @return GetOrderResponse
     *
     * @throws Exception
     */
    public function getOrder($request)
    {
        if (!($request instanceof GetOrderRequest)) {
            $request = new GetOrderRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetOrder';
        $httpResponse = $this->_invoke($parameters);

        $response = GetOrderResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetOrderRequest to name value pairs
     */
    private function _convertGetOrder($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetOrder';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetAmazonOrderId()) {
            $parameters['AmazonOrderId'] =  $request->getAmazonOrderId();
        }

        return $parameters;
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
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

    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for ListOrderItems request or ListOrderItems object itself
     * @see ListOrderItemsRequest
     * @return ListOrderItemsResponse
     *
     * @throws Exception
     */
    public function listOrderItems($request)
    {
        if (!($request instanceof ListOrderItemsRequest)) {
            $request = new ListOrderItemsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrderItems';
        $httpResponse = $this->_invoke($parameters);

        $response = ListOrderItemsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListOrderItemsRequest to name value pairs
     */
    private function _convertListOrderItems($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListOrderItems';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetAmazonOrderId()) {
            $parameters['AmazonOrderId'] =  $request->getAmazonOrderId();
        }

        return $parameters;
    }

    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param mixed $request array of parameters for ListOrderItemsByNextToken request or ListOrderItemsByNextToken object itself
     * @see ListOrderItemsByNextTokenRequest
     * @return ListOrderItemsByNextTokenResponse
     *
     * @throws Exception
     */
    public function listOrderItemsByNextToken($request)
    {
        if (!($request instanceof ListOrderItemsByNextTokenRequest)) {
            $request = new ListOrderItemsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrderItemsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListOrderItemsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListOrderItemsByNextTokenRequest to name value pairs
     */
    private function _convertListOrderItemsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListOrderItemsByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListOrders request or ListOrders object itself
     * @see ListOrdersRequest
     * @return ListOrdersResponse
     *
     * @throws Exception
     */
    public function listOrders($request)
    {
        if (!($request instanceof ListOrdersRequest)) {
            $request = new ListOrdersRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrders';
        $httpResponse = $this->_invoke($parameters);

        $response = ListOrdersResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListOrdersRequest to name value pairs
     */
    private function _convertListOrders($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListOrders';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetCreatedAfter()) {
            $parameters['CreatedAfter'] =  $request->getCreatedAfter();
        }
        if ($request->isSetCreatedBefore()) {
            $parameters['CreatedBefore'] =  $request->getCreatedBefore();
        }
        if ($request->isSetLastUpdatedAfter()) {
            $parameters['LastUpdatedAfter'] =  $request->getLastUpdatedAfter();
        }
        if ($request->isSetLastUpdatedBefore()) {
            $parameters['LastUpdatedBefore'] =  $request->getLastUpdatedBefore();
        }
        if ($request->isSetOrderStatus()) {
            $parameters['OrderStatus'] =  $request->getOrderStatus();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetFulfillmentChannel()) {
            $parameters['FulfillmentChannel'] =  $request->getFulfillmentChannel();
        }
        if ($request->isSetPaymentMethod()) {
            $parameters['PaymentMethod'] =  $request->getPaymentMethod();
        }
        if ($request->isSetBuyerEmail()) {
            $parameters['BuyerEmail'] =  $request->getBuyerEmail();
        }
        if ($request->isSetSellerOrderId()) {
            $parameters['SellerOrderId'] =  $request->getSellerOrderId();
        }
        if ($request->isSetMaxResultsPerPage()) {
            $parameters['MaxResultsPerPage'] =  $request->getMaxResultsPerPage();
        }
        if ($request->isSetTFMShipmentStatus()) {
            $parameters['TFMShipmentStatus'] =  $request->getTFMShipmentStatus();
        }

        return $parameters;
    }

    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param mixed $request array of parameters for ListOrdersByNextToken request or ListOrdersByNextToken object itself
     * @see ListOrdersByNextTokenRequest
     * @return ListOrdersByNextTokenResponse
     *
     * @throws Exception
     */
    public function listOrdersByNextToken($request)
    {
        if (!($request instanceof ListOrdersByNextTokenRequest)) {
            $request = new ListOrdersByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListOrdersByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListOrdersByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListOrdersByNextTokenRequest to name value pairs
     */
    private function _convertListOrdersByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListOrdersByNextToken';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }

        return $parameters;
    }

    // Private API ------------------------------------------------------------//

}
