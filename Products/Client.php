<?php

namespace Amazon\MWS\Products;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Products\Exception as ProductsException;
use Amazon\MWS\Products\Model\GetCompetitivePricingForASINRequest;
use Amazon\MWS\Products\Model\GetCompetitivePricingForASINResponse;
use Amazon\MWS\Products\Model\GetCompetitivePricingForSKURequest;
use Amazon\MWS\Products\Model\GetCompetitivePricingForSKUResponse;
use Amazon\MWS\Products\Model\GetLowestOfferListingsForASINRequest;
use Amazon\MWS\Products\Model\GetLowestOfferListingsForASINResponse;
use Amazon\MWS\Products\Model\GetLowestOfferListingsForSKURequest;
use Amazon\MWS\Products\Model\GetLowestOfferListingsForSKUResponse;
use Amazon\MWS\Products\Model\GetLowestPricedOffersForASINRequest;
use Amazon\MWS\Products\Model\GetLowestPricedOffersForASINResponse;
use Amazon\MWS\Products\Model\GetLowestPricedOffersForSKURequest;
use Amazon\MWS\Products\Model\GetLowestPricedOffersForSKUResponse;
use Amazon\MWS\Products\Model\GetMatchingProductForIdRequest;
use Amazon\MWS\Products\Model\GetMatchingProductForIdResponse;
use Amazon\MWS\Products\Model\GetMatchingProductRequest;
use Amazon\MWS\Products\Model\GetMatchingProductResponse;
use Amazon\MWS\Products\Model\GetMyFeesEstimateRequest;
use Amazon\MWS\Products\Model\GetMyFeesEstimateResponse;
use Amazon\MWS\Products\Model\GetMyPriceForASINRequest;
use Amazon\MWS\Products\Model\GetMyPriceForASINResponse;
use Amazon\MWS\Products\Model\GetMyPriceForSKURequest;
use Amazon\MWS\Products\Model\GetMyPriceForSKUResponse;
use Amazon\MWS\Products\Model\GetProductCategoriesForASINRequest;
use Amazon\MWS\Products\Model\GetProductCategoriesForASINResponse;
use Amazon\MWS\Products\Model\GetProductCategoriesForSKURequest;
use Amazon\MWS\Products\Model\GetProductCategoriesForSKUResponse;
use Amazon\MWS\Products\Model\GetServiceStatusRequest;
use Amazon\MWS\Products\Model\GetServiceStatusResponse;
use Amazon\MWS\Products\Model\ListMatchingProductsRequest;
use Amazon\MWS\Products\Model\ListMatchingProductsResponse;
use Amazon\MWS\Products\Model\ResponseHeaderMetadata;

/**
 * MarketplaceWebServiceProducts_Client is an implementation of MarketplaceWebServiceProducts
 */
class Client extends BaseClient implements ProductsInterface
{
    const SERVICE_VERSION    = '2011-10-01';
    const MWS_CLIENT_VERSION = '2016-06-01';

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForASIN request or GetCompetitivePricingForASIN object itself
     * @see GetCompetitivePricingForASINRequest
     * @return GetCompetitivePricingForASINResponse
     *
     * @throws Exception
     */
    public function getCompetitivePricingForASIN($request)
    {
        if (!($request instanceof GetCompetitivePricingForASINRequest)) {
            $request = new GetCompetitivePricingForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetCompetitivePricingForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetCompetitivePricingForASINRequest to name value pairs
     */
    private function _convertGetCompetitivePricingForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetCompetitivePricingForASINRequest = $request->getASINList();
            foreach  ($ASINListGetCompetitivePricingForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForSKU request or GetCompetitivePricingForSKU object itself
     * @see GetCompetitivePricingForSKURequest
     * @return GetCompetitivePricingForSKUResponse
     *
     * @throws Exception
     */
    public function getCompetitivePricingForSKU($request)
    {
        if (!($request instanceof GetCompetitivePricingForSKURequest)) {
            $request = new GetCompetitivePricingForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetCompetitivePricingForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetCompetitivePricingForSKURequest to name value pairs
     */
    private function _convertGetCompetitivePricingForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetCompetitivePricingForSKURequest = $request->getSellerSKUList();
            foreach  ($SellerSKUListGetCompetitivePricingForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($SellerSKUSellerSKUListIndex + 1)] =  $SellerSKUSellerSKUList;
            }
        }

        return $parameters;
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForASIN request or GetLowestOfferListingsForASIN object itself
     * @see GetLowestOfferListingsForASINRequest
     * @return GetLowestOfferListingsForASINResponse
     *
     * @throws Exception
     */
    public function getLowestOfferListingsForASIN($request)
    {
        if (!($request instanceof GetLowestOfferListingsForASINRequest)) {
            $request = new GetLowestOfferListingsForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLowestOfferListingsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLowestOfferListingsForASINRequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetLowestOfferListingsForASINRequest = $request->getASINList();
            foreach  ($ASINListGetLowestOfferListingsForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] =  $request->getExcludeMe() ? "true" : "false";
        }

        return $parameters;
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForSKU request or GetLowestOfferListingsForSKU object itself
     * @see GetLowestOfferListingsForSKURequest
     * @return GetLowestOfferListingsForSKUResponse
     *
     * @throws Exception
     */
    public function getLowestOfferListingsForSKU($request)
    {
        if (!($request instanceof GetLowestOfferListingsForSKURequest)) {
            $request = new GetLowestOfferListingsForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLowestOfferListingsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLowestOfferListingsForSKURequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetLowestOfferListingsForSKURequest = $request->getSellerSKUList();
            foreach  ($SellerSKUListGetLowestOfferListingsForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($SellerSKUSellerSKUListIndex + 1)] =  $SellerSKUSellerSKUList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] =  $request->getExcludeMe() ? "true" : "false";
        }

        return $parameters;
    }

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForASIN request or GetLowestPricedOffersForASIN object itself
     * @see GetLowestPricedOffersForASINRequest
     * @return GetLowestPricedOffersForASINResponse
     *
     * @throws Exception
     */
    public function getLowestPricedOffersForASIN($request)
    {
        if (!($request instanceof GetLowestPricedOffersForASINRequest)) {
            $request = new GetLowestPricedOffersForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLowestPricedOffersForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLowestPricedOffersForASINRequest to name value pairs
     */
    private function _convertGetLowestPricedOffersForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestPricedOffersForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASIN()) {
            $parameters['ASIN'] =  $request->getASIN();
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }

        return $parameters;
    }

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForSKU request or GetLowestPricedOffersForSKU object itself
     * @see GetLowestPricedOffersForSKURequest
     * @return GetLowestPricedOffersForSKUResponse
     *
     * @throws Exception
     */
    public function getLowestPricedOffersForSKU($request)
    {
        if (!($request instanceof GetLowestPricedOffersForSKURequest)) {
            $request = new GetLowestPricedOffersForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLowestPricedOffersForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLowestPricedOffersForSKURequest to name value pairs
     */
    private function _convertGetLowestPricedOffersForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestPricedOffersForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] =  $request->getSellerSKU();
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] =  $request->getItemCondition();
        }

        return $parameters;
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for GetMatchingProduct request or GetMatchingProduct object itself
     * @see GetMatchingProductRequest
     * @return GetMatchingProductResponse
     *
     * @throws Exception
     */
    public function getMatchingProduct($request)
    {
        if (!($request instanceof GetMatchingProductRequest)) {
            $request = new GetMatchingProductRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProduct';
        $httpResponse = $this->_invoke($parameters);

        $response = GetMatchingProductResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetMatchingProductRequest to name value pairs
     */
    private function _convertGetMatchingProduct($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMatchingProduct';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetMatchingProductRequest = $request->getASINList();
            foreach  ($ASINListGetMatchingProductRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for GetMatchingProductForId request or GetMatchingProductForId object itself
     * @see GetMatchingProductForIdRequest
     * @return GetMatchingProductForIdResponse
     *
     * @throws Exception
     */
    public function getMatchingProductForId($request)
    {
        if (!($request instanceof GetMatchingProductForIdRequest)) {
            $request = new GetMatchingProductForIdRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProductForId';
        $httpResponse = $this->_invoke($parameters);

        $response = GetMatchingProductForIdResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetMatchingProductForIdRequest to name value pairs
     */
    private function _convertGetMatchingProductForId($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMatchingProductForId';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetIdType()) {
            $parameters['IdType'] =  $request->getIdType();
        }
        if ($request->isSetIdList()) {
            $IdListGetMatchingProductForIdRequest = $request->getIdList();
            foreach  ($IdListGetMatchingProductForIdRequest->getId() as $IdIdListIndex => $IdIdList) {
                $parameters['IdList' . '.' . 'Id' . '.'  . ($IdIdListIndex + 1)] =  $IdIdList;
            }
        }

        return $parameters;
    }

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for GetMyFeesEstimate request or GetMyFeesEstimate object itself
     * @see GetMyFeesEstimateRequest
     * @return GetMyFeesEstimateResponse
     *
     * @throws Exception
     */
    public function getMyFeesEstimate($request)
    {
        if (!($request instanceof GetMyFeesEstimateRequest)) {
            $request = new GetMyFeesEstimateRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyFeesEstimate';
        $httpResponse = $this->_invoke($parameters);

        $response = GetMyFeesEstimateResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetMyFeesEstimateRequest to name value pairs
     */
    private function _convertGetMyFeesEstimate($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyFeesEstimate';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetFeesEstimateRequestList()) {
            $FeesEstimateRequestListGetMyFeesEstimateRequest = $request->getFeesEstimateRequestList();
            foreach  ($FeesEstimateRequestListGetMyFeesEstimateRequest->getFeesEstimateRequest() as $FeesEstimateRequestFeesEstimateRequestListIndex => $FeesEstimateRequestFeesEstimateRequestList) {
                $parameters['FeesEstimateRequestList' . '.' . 'FeesEstimateRequest' . '.'  . ($FeesEstimateRequestFeesEstimateRequestListIndex + 1)] =  $FeesEstimateRequestFeesEstimateRequestList;
            }
        }

        return $parameters;
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForASIN request or GetMyPriceForASIN object itself
     * @see GetMyPriceForASINRequest
     * @return GetMyPriceForASINResponse
     *
     * @throws Exception
     */
    public function getMyPriceForASIN($request)
    {
        if (!($request instanceof GetMyPriceForASINRequest)) {
            $request = new GetMyPriceForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetMyPriceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetMyPriceForASINRequest to name value pairs
     */
    private function _convertGetMyPriceForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetMyPriceForASINRequest = $request->getASINList();
            foreach  ($ASINListGetMyPriceForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.'  . ($ASINASINListIndex + 1)] =  $ASINASINList;
            }
        }

        return $parameters;
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForSKU request or GetMyPriceForSKU object itself
     * @see GetMyPriceForSKURequest
     * @return GetMyPriceForSKUResponse
     *
     * @throws Exception
     */
    public function getMyPriceForSKU($request)
    {
        if (!($request instanceof GetMyPriceForSKURequest)) {
            $request = new GetMyPriceForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetMyPriceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetMyPriceForSKURequest to name value pairs
     */
    private function _convertGetMyPriceForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetMyPriceForSKURequest = $request->getSellerSKUList();
            foreach  ($SellerSKUListGetMyPriceForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.'  . ($SellerSKUSellerSKUListIndex + 1)] =  $SellerSKUSellerSKUList;
            }
        }

        return $parameters;
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForASIN request or GetProductCategoriesForASIN object itself
     * @see GetProductCategoriesForASINRequest
     * @return GetProductCategoriesForASINResponse
     *
     * @throws Exception
     */
    public function getProductCategoriesForASIN($request)
    {
        if (!($request instanceof GetProductCategoriesForASINRequest)) {
            $request = new GetProductCategoriesForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        $httpResponse = $this->_invoke($parameters);

        $response = GetProductCategoriesForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetProductCategoriesForASINRequest to name value pairs
     */
    private function _convertGetProductCategoriesForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetASIN()) {
            $parameters['ASIN'] =  $request->getASIN();
        }

        return $parameters;
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForSKU request or GetProductCategoriesForSKU object itself
     * @see GetProductCategoriesForSKURequest
     * @return GetProductCategoriesForSKUResponse
     *
     * @throws Exception
     */
    public function getProductCategoriesForSKU($request)
    {
        if (!($request instanceof GetProductCategoriesForSKURequest)) {
            $request = new GetProductCategoriesForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        $httpResponse = $this->_invoke($parameters);

        $response = GetProductCategoriesForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetProductCategoriesForSKURequest to name value pairs
     */
    private function _convertGetProductCategoriesForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] =  $request->getSellerSKU();
        }

        return $parameters;
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
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
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for ListMatchingProducts request or ListMatchingProducts object itself
     * @see ListMatchingProductsRequest
     * @return ListMatchingProductsResponse
     *
     * @throws Exception
     */
    public function listMatchingProducts($request)
    {
        if (!($request instanceof ListMatchingProductsRequest)) {
            $request = new ListMatchingProductsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMatchingProducts';
        $httpResponse = $this->_invoke($parameters);

        $response = ListMatchingProductsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListMatchingProductsRequest to name value pairs
     */
    private function _convertListMatchingProducts($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListMatchingProducts';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetQuery()) {
            $parameters['Query'] =  $request->getQuery();
        }
        if ($request->isSetQueryContextId()) {
            $parameters['QueryContextId'] =  $request->getQueryContextId();
        }

        return $parameters;
    }

    // Private API ------------------------------------------------------------//

}
