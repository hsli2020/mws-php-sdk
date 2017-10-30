<?php

namespace Amazon\MWS\Recommendations;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Recommendations\Exception as RecommendationsException;
use Amazon\MWS\Recommendations\Model\GetLastUpdatedTimeForRecommendationsRequest;
use Amazon\MWS\Recommendations\Model\GetLastUpdatedTimeForRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\GetServiceStatusRequest;
use Amazon\MWS\Recommendations\Model\GetServiceStatusResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsByNextTokenRequest;
use Amazon\MWS\Recommendations\Model\ListRecommendationsByNextTokenResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsRequest;
use Amazon\MWS\Recommendations\Model\ListRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\ResponseHeaderMetadata;

/**
 * Recommendations\Client is an implementation of RecommendationsSectionService
 */
class Client extends BaseClient implements RecommendationsInterface
{
    const SERVICE_VERSION    = '2013-04-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller.
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for GetLastUpdatedTimeForRecommendations request or GetLastUpdatedTimeForRecommendations object itself
     * @see GetLastUpdatedTimeForRecommendationsRequest
     * @return GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws Exception
     */
    public function getLastUpdatedTimeForRecommendations($request)
    {
        if (!($request instanceof GetLastUpdatedTimeForRecommendationsRequest)) {
            $request = new GetLastUpdatedTimeForRecommendationsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLastUpdatedTimeForRecommendations';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLastUpdatedTimeForRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLastUpdatedTimeForRecommendationsRequest to name value pairs
     */
    private function _convertGetLastUpdatedTimeForRecommendations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLastUpdatedTimeForRecommendations';
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }

        return $parameters;
    }

    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for ListRecommendations request or ListRecommendations object itself
     * @see ListRecommendationsRequest
     * @return ListRecommendationsResponse
     *
     * @throws Exception
     */
    public function listRecommendations($request)
    {
        if (!($request instanceof ListRecommendationsRequest)) {
            $request = new ListRecommendationsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendations';
        $httpResponse = $this->_invoke($parameters);

        $response = ListRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListRecommendationsRequest to name value pairs
     */
    private function _convertListRecommendations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListRecommendations';
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetRecommendationCategory()) {
            $parameters['RecommendationCategory'] =  $request->getRecommendationCategory();
        }
        if ($request->isSetCategoryQueryList()) {
            $parameters['CategoryQueryList'] =  $request->getCategoryQueryList();
        }

        return $parameters;
    }

    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for ListRecommendationsByNextToken request or ListRecommendationsByNextToken object itself
     * @see ListRecommendationsByNextTokenRequest
     * @return ListRecommendationsByNextTokenResponse
     *
     * @throws Exception
     */
    public function listRecommendationsByNextToken($request)
    {
        if (!($request instanceof ListRecommendationsByNextTokenRequest)) {
            $request = new ListRecommendationsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendationsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListRecommendationsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListRecommendationsByNextTokenRequest to name value pairs
     */
    private function _convertListRecommendationsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListRecommendationsByNextToken';
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
