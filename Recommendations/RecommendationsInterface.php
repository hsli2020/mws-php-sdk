<?php

namespace Amazon\MWS\Recommendations;

interface RecommendationsInterface
{
    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller.
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for GetLastUpdatedTimeForRecommendations request or GetLastUpdatedTimeForRecommendations object itself
     * @see GetLastUpdatedTimeForRecommendationsRequest
     * @return GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws RecommendationsException
     */
    public function getLastUpdatedTimeForRecommendations($request);


    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for ListRecommendations request or ListRecommendations object itself
     * @see ListRecommendationsRequest
     * @return ListRecommendationsResponse
     *
     * @throws RecommendationsException
     */
    public function listRecommendations($request);


    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for ListRecommendationsByNextToken request or ListRecommendationsByNextToken object itself
     * @see ListRecommendationsByNextTokenRequest
     * @return ListRecommendationsByNextTokenResponse
     *
     * @throws RecommendationsException
     */
    public function listRecommendationsByNextToken($request);


    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws RecommendationsException
     */
    public function getServiceStatus($request);

}
