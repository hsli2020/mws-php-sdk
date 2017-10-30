<?php

namespace Amazon\MWS\Sellers;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Sellers\Exception as SellersException;
use Amazon\MWS\Sellers\Model\GetServiceStatusRequest;
use Amazon\MWS\Sellers\Model\GetServiceStatusResponse;
use Amazon\MWS\Sellers\Model\ListMarketplaceParticipationsByNextTokenRequest;
use Amazon\MWS\Sellers\Model\ListMarketplaceParticipationsByNextTokenResponse;
use Amazon\MWS\Sellers\Model\ListMarketplaceParticipationsRequest;
use Amazon\MWS\Sellers\Model\ListMarketplaceParticipationsResponse;
use Amazon\MWS\Sellers\Model\ResponseHeaderMetadata;

/**
 * MarketplaceWebServiceSellers_Client is an implementation of MarketplaceWebServiceSellers
 */
class Client extends BaseClient implements SellersInterface
{
    const SERVICE_VERSION    = '2011-07-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *         takes no input.
     *         All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws SellersException
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
     * List Marketplace Participations
     * Returns a list of marketplaces that the seller submitting the request can sell in,
     *         and a list of participations that include seller-specific information in that marketplace.
     *
     * @param mixed $request array of parameters for ListMarketplaceParticipations request or ListMarketplaceParticipations object itself
     * @see ListMarketplaceParticipationsRequest
     * @return ListMarketplaceParticipationsResponse
     *
     * @throws SellersException
     */
    public function listMarketplaceParticipations($request)
    {
        if (!($request instanceof ListMarketplaceParticipationsRequest)) {
            $request = new ListMarketplaceParticipationsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMarketplaceParticipations';
        $httpResponse = $this->_invoke($parameters);

        $response = ListMarketplaceParticipationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListMarketplaceParticipationsRequest to name value pairs
     */
    private function _convertListMarketplaceParticipations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListMarketplaceParticipations';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }

        return $parameters;
    }

    /**
     * List Marketplace Participations By Next Token
     * Returns the next page of marketplaces and participations using the NextToken value
     *         that was returned by your previous request to either ListMarketplaceParticipations or
     *         ListMarketplaceParticipationsByNextToken.
     *
     * @param mixed $request array of parameters for ListMarketplaceParticipationsByNextToken request or ListMarketplaceParticipationsByNextToken object itself
     * @see ListMarketplaceParticipationsByNextTokenRequest
     * @return ListMarketplaceParticipationsByNextTokenResponse
     *
     * @throws SellersException
     */
    public function listMarketplaceParticipationsByNextToken($request)
    {
        if (!($request instanceof ListMarketplaceParticipationsByNextTokenRequest)) {
            $request = new ListMarketplaceParticipationsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMarketplaceParticipationsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListMarketplaceParticipationsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListMarketplaceParticipationsByNextTokenRequest to name value pairs
     */
    private function _convertListMarketplaceParticipationsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListMarketplaceParticipationsByNextToken';
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
