<?php

namespace Amazon\MWS\Sellers;

class Mock implements SellersInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     *         takes no input.
     *         All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Marketplace Participations
     * Returns a list of marketplaces that the seller submitting the request can sell in,
     *         and a list of participations that include seller-specific information in that marketplace.
     *
     * @param mixed $request array of parameters for ListMarketplaceParticipations request or ListMarketplaceParticipations object itself
     * @see ListMarketplaceParticipations
     * @return ListMarketplaceParticipationsResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function listMarketplaceParticipations($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListMarketplaceParticipationsResponse.php');
        return ListMarketplaceParticipationsResponse::fromXML($this->_invoke('ListMarketplaceParticipations'));
    }

    /**
     * List Marketplace Participations By Next Token
     * Returns the next page of marketplaces and participations using the NextToken value
     *         that was returned by your previous request to either ListMarketplaceParticipations or
     *         ListMarketplaceParticipationsByNextToken.
     *
     * @param mixed $request array of parameters for ListMarketplaceParticipationsByNextToken request or ListMarketplaceParticipationsByNextToken object itself
     * @see ListMarketplaceParticipationsByNextToken
     * @return ListMarketplaceParticipationsByNextTokenResponse
     *
     * @throws MarketplaceWebServiceSellers_Exception
     */
    public function listMarketplaceParticipationsByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListMarketplaceParticipationsByNextTokenResponse.php');
        return ListMarketplaceParticipationsByNextTokenResponse::fromXML($this->_invoke('ListMarketplaceParticipationsByNextToken'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
