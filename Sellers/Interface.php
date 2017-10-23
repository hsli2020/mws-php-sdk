<?php

namespace Amazon\MWS\Sellers;

interface SellersInterface
{
    public function getServiceStatus($request);

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
    public function listMarketplaceParticipations($request);


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
    public function listMarketplaceParticipationsByNextToken($request);

}
