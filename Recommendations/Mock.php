<?php

namespace Amazon\MWS\Recommendations;

use Amazon\MWS\Recommendations\Model\GetLastUpdatedTimeForRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsByNextTokenResponse;
use Amazon\MWS\Recommendations\Model\GetServiceStatusResponse;

class Mock implements RecommendationsInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller.
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for GetLastUpdatedTimeForRecommendations request or GetLastUpdatedTimeForRecommendations object itself
     * @see GetLastUpdatedTimeForRecommendations
     * @return GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws RecommendationsException
     */
    public function getLastUpdatedTimeForRecommendations($request)
    {
        return GetLastUpdatedTimeForRecommendationsResponse::fromXML($this->_invoke('GetLastUpdatedTimeForRecommendations'));
    }

    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for ListRecommendations request or ListRecommendations object itself
     * @see ListRecommendations
     * @return ListRecommendationsResponse
     *
     * @throws RecommendationsException
     */
    public function listRecommendations($request)
    {
        return ListRecommendationsResponse::fromXML($this->_invoke('ListRecommendations'));
    }

    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for ListRecommendationsByNextToken request or ListRecommendationsByNextToken object itself
     * @see ListRecommendationsByNextToken
     * @return ListRecommendationsByNextTokenResponse
     *
     * @throws RecommendationsException
     */
    public function listRecommendationsByNextToken($request)
    {
        return ListRecommendationsByNextTokenResponse::fromXML($this->_invoke('ListRecommendationsByNextToken'));
    }

    /**
     * Get Service Status
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws RecommendationsException
     */
    public function getServiceStatus($request)
    {
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
