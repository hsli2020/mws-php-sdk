<?php

namespace Amazon\MWS\Orders;

interface OrdersInterface
{
    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for GetOrder request or GetOrder object itself
     * @see GetOrderRequest
     * @return GetOrderResponse
     *
     * @throws OrdersException
     */
    public function getOrder($request);


    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws OrdersException
     */
    public function getServiceStatus($request);


    /**
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for ListOrderItems request or ListOrderItems object itself
     * @see ListOrderItemsRequest
     * @return ListOrderItemsResponse
     *
     * @throws OrdersException
     */
    public function listOrderItems($request);


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
     * @throws OrdersException
     */
    public function listOrderItemsByNextToken($request);


    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListOrders request or ListOrders object itself
     * @see ListOrdersRequest
     * @return ListOrdersResponse
     *
     * @throws OrdersException
     */
    public function listOrders($request);


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
     * @throws OrdersException
     */
    public function listOrdersByNextToken($request);

}
