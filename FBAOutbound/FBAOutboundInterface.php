<?php

namespace Amazon\MWS\FBAOutbound;

interface FBAOutboundInterface
{
    /**
     * Cancel Fulfillment Order
     * Request for Amazon to no longer attempt to fulfill an existing
     *   fulfillment order. Amazon will attempt to stop fulfillment of all
     *   items that haven't already shipped, but cannot guarantee success.
     *   Note: Items that have already shipped cannot be cancelled.
     *
     * @param mixed $request array of parameters for CancelFulfillmentOrder request or CancelFulfillmentOrder object itself
     * @see CancelFulfillmentOrderRequest
     * @return CancelFulfillmentOrderResponse
     *
     * @throws FBAOutboundException
     */
    public function cancelFulfillmentOrder($request);


    /**
     * Create Fulfillment Order
     * The SellerFulfillmentOrderId must be unique for all fulfillment
     *   orders created by the seller. If your system already has a
     *   unique order identifier, then that may be a good value to put in
     *   this field.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   FulfillmentMethod indicates the intended recipient channel for the
     *   order whether it be a consumer order or inventory return.
     *   default is Consumer.
     *   The available methods to fulfill a given order:
     *    * Consumer indicates a customer order, this is the default.
     *    * Removal indicates that the inventory should be returned to the
     *      specified destination address.
     *
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param mixed $request array of parameters for CreateFulfillmentOrder request or CreateFulfillmentOrder object itself
     * @see CreateFulfillmentOrderRequest
     * @return CreateFulfillmentOrderResponse
     *
     * @throws FBAOutboundException
     */
    public function createFulfillmentOrder($request);


    /**
     * Get Fulfillment Order
     * Get detailed information about a FulfillmentOrder.  This includes the
     *   original fulfillment order request, the status of the order and its
     *   items in Amazon's fulfillment network, and the shipments that have been
     *   generated to fulfill the order.
     *
     * @param mixed $request array of parameters for GetFulfillmentOrder request or GetFulfillmentOrder object itself
     * @see GetFulfillmentOrderRequest
     * @return GetFulfillmentOrderResponse
     *
     * @throws FBAOutboundException
     */
    public function getFulfillmentOrder($request);


    /**
     * Get Fulfillment Preview
     * Get estimated shipping dates and fees for all
     *   available shipping speed given a set of seller SKUs and quantities
     *
     *   If "ShippingSpeedCategories" are inputed, only previews for those options will be returned.
     *
     *   If "ShippingSpeedCategories" are not inputed, then previews for all available options
     *   are returned.
     *
     *   The service will return the fulfillment estimates for a set of Seller
     *   SKUs and quantities.
     *
     * @param mixed $request array of parameters for GetFulfillmentPreview request or GetFulfillmentPreview object itself
     * @see GetFulfillmentPreviewRequest
     * @return GetFulfillmentPreviewResponse
     *
     * @throws FBAOutboundException
     */
    public function getFulfillmentPreview($request);


    /**
     * Get Package Tracking Details
     * Gets the tracking details for a shipment package.
     *
     * @param mixed $request array of parameters for GetPackageTrackingDetails request or GetPackageTrackingDetails object itself
     * @see GetPackageTrackingDetailsRequest
     * @return GetPackageTrackingDetailsResponse
     *
     * @throws FBAOutboundException
     */
    public function getPackageTrackingDetails($request);


    /**
     * Get Service Status
     * Request to poll the system for availability.
     *   Status is one of GREEN, RED representing:
     *   GREEN: The service section is operating normally.
     *   RED: The service section disruption.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws FBAOutboundException
     */
    public function getServiceStatus($request);


    /**
     * List All Fulfillment Orders
     * Gets the first set of fulfillment orders that are currently being
     *   fulfilled or that were being fulfilled at some time in the past
     *   (as specified by the query parameters). Also returns a NextToken
     *   which can be used iterate through the remaining fulfillment orders
     *   (via the ListAllFulfillmentOrdersByNextToken operation).
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     *   If the QueryStartDateTime is set, the results will include all orders
     *   currently being fulfilled, and all orders that were being fulfilled
     *   since that date and time.
     *
     * @param mixed $request array of parameters for ListAllFulfillmentOrders request or ListAllFulfillmentOrders object itself
     * @see ListAllFulfillmentOrdersRequest
     * @return ListAllFulfillmentOrdersResponse
     *
     * @throws FBAOutboundException
     */
    public function listAllFulfillmentOrders($request);


    /**
     * List All Fulfillment Orders By Next Token
     * Gets the next set of fulfillment orders that are currently being
     *   being fulfilled or that were being fulfilled at some time in the
     *   past.
     *
     *   If a NextToken is not returned, it indicates the end-of-data.
     *
     * @param mixed $request array of parameters for ListAllFulfillmentOrdersByNextToken request or ListAllFulfillmentOrdersByNextToken object itself
     * @see ListAllFulfillmentOrdersByNextTokenRequest
     * @return ListAllFulfillmentOrdersByNextTokenResponse
     *
     * @throws FBAOutboundException
     */
    public function listAllFulfillmentOrdersByNextToken($request);


    /**
     * Update Fulfillment Order
     * The SellerFulfillmentOrderId must be the order ID of the original
     *     order that needs to be updated.
     *
     *   This DisplayableOrderDateTime will appear as the "order date" in
     *   recipient-facing materials such as the packing slip.  The format
     *   must be timestamp.
     *
     *   The DisplayableOrderId will appear as the "order id" in those
     *   materials, and the DisplayableOrderComment will appear as well.
     *
     *   ShippingSpeedCategory is the Service Level Agreement for how long it
     *   will take a shipment to be transported from the fulfillment center
     *   to the recipient, once shipped. no default.
     *   The following shipping speeds are available for US domestic:
     *    * Standard, 3-5 business days
     *    * Expedited, 2 business days
     *    * Priority, 1 business day
     *
     *   Shipping speeds may vary elsewhere.  Please consult your manual for published SLAs.
     *
     *
     *   DestinationAddress is the address the items will be shipped to.
     *
     *   FulfillmentAction indicates whether an order will be held or shipped.
     *   Default is Hold.
     *   * Hold if the order needs to be held but does not need to be shipped.
     *   * Ship if the order is to be fulfilled and shipped out to the customer
     *   immediately.
     *
     *   FulfillmentPolicy indicates how unfulfillable items should be
     *   handled. default is FillOrKill.
     *    * FillOrKill if any item is determined to be unfulfillable
     *      before any items have started shipping, the entire order is
     *      considered unfulfillable.  Once any part of the order has
     *      started shipping, as much of the order as possible will be
     *      shipped.
     *    * FillAll never consider any item unfulfillable.  Items must
     *      either be fulfilled or merchant-cancelled.
     *    * FillAllAvailable fulfill as much of the order as possible.
     *
     *   NotificationEmailList can be used to provide a list of e-mail
     *   addresses to receive ship-complete e-mail notifications. These
     *   e-mails are customer-facing e-mails sent by FBA on behalf of
     *   the seller.
     *
     * @param mixed $request array of parameters for UpdateFulfillmentOrder request or UpdateFulfillmentOrder object itself
     * @see UpdateFulfillmentOrderRequest
     * @return UpdateFulfillmentOrderResponse
     *
     * @throws FBAOutboundException
     */
    public function updateFulfillmentOrder($request);

}
