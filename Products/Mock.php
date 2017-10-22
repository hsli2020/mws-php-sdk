<?php

namespace Amazon\MWS\Products;

class MarketplaceWebServiceProducts_Mock implements MarketplaceWebServiceProducts_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForASIN request or GetCompetitivePricingForASIN object itself
     * @see GetCompetitivePricingForASIN
     * @return GetCompetitivePricingForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForASIN($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForASINResponse.php');
        return GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForSKU request or GetCompetitivePricingForSKU object itself
     * @see GetCompetitivePricingForSKU
     * @return GetCompetitivePricingForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getCompetitivePricingForSKU($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetCompetitivePricingForSKUResponse.php');
        return GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForASIN request or GetLowestOfferListingsForASIN object itself
     * @see GetLowestOfferListingsForASIN
     * @return GetLowestOfferListingsForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForASIN($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForASINResponse.php');
        return GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForSKU request or GetLowestOfferListingsForSKU object itself
     * @see GetLowestOfferListingsForSKU
     * @return GetLowestOfferListingsForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestOfferListingsForSKU($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetLowestOfferListingsForSKUResponse.php');
        return GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForASIN request or GetLowestPricedOffersForASIN object itself
     * @see GetLowestPricedOffersForASIN
     * @return GetLowestPricedOffersForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestPricedOffersForASIN($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetLowestPricedOffersForASINResponse.php');
        return GetLowestPricedOffersForASINResponse::fromXML($this->_invoke('GetLowestPricedOffersForASIN'));
    }

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForSKU request or GetLowestPricedOffersForSKU object itself
     * @see GetLowestPricedOffersForSKU
     * @return GetLowestPricedOffersForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getLowestPricedOffersForSKU($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetLowestPricedOffersForSKUResponse.php');
        return GetLowestPricedOffersForSKUResponse::fromXML($this->_invoke('GetLowestPricedOffersForSKU'));
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for GetMatchingProduct request or GetMatchingProduct object itself
     * @see GetMatchingProduct
     * @return GetMatchingProductResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProduct($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetMatchingProductResponse.php');
        return GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for GetMatchingProductForId request or GetMatchingProductForId object itself
     * @see GetMatchingProductForId
     * @return GetMatchingProductForIdResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMatchingProductForId($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetMatchingProductForIdResponse.php');
        return GetMatchingProductForIdResponse::fromXML($this->_invoke('GetMatchingProductForId'));
    }

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for GetMyFeesEstimate request or GetMyFeesEstimate object itself
     * @see GetMyFeesEstimate
     * @return GetMyFeesEstimateResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyFeesEstimate($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetMyFeesEstimateResponse.php');
        return GetMyFeesEstimateResponse::fromXML($this->_invoke('GetMyFeesEstimate'));
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForASIN request or GetMyPriceForASIN object itself
     * @see GetMyPriceForASIN
     * @return GetMyPriceForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForASIN($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetMyPriceForASINResponse.php');
        return GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForSKU request or GetMyPriceForSKU object itself
     * @see GetMyPriceForSKU
     * @return GetMyPriceForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getMyPriceForSKU($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetMyPriceForSKUResponse.php');
        return GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForASIN request or GetProductCategoriesForASIN object itself
     * @see GetProductCategoriesForASIN
     * @return GetProductCategoriesForASINResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForASIN($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForASINResponse.php');
        return GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForSKU request or GetProductCategoriesForSKU object itself
     * @see GetProductCategoriesForSKU
     * @return GetProductCategoriesForSKUResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getProductCategoriesForSKU($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetProductCategoriesForSKUResponse.php');
        return GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for ListMatchingProducts request or ListMatchingProducts object itself
     * @see ListMatchingProducts
     * @return ListMatchingProductsResponse
     *
     * @throws MarketplaceWebServiceProducts_Exception
     */
    public function listMatchingProducts($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListMatchingProductsResponse.php');
        return ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
