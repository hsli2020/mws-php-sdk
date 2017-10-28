<?php

namespace Amazon\MWS\Finances;

interface FinancesInterface
{
    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEventGroups request or ListFinancialEventGroups object itself
     * @see ListFinancialEventGroupsRequest
     * @return ListFinancialEventGroupsResponse
     *
     * @throws FinancesException
     */
    public function listFinancialEventGroups($request);


    /**
     * List Financial Event Groups By Next Token
     * If ListFinancialEventGroups returns a nextToken, thus indicating that there are more groups
     *         than returned that matched the given filter criteria, ListFinancialEventGroupsByNextToken
     *         can be used to retrieve those groups using that nextToken.
     *
     * @param mixed $request array of parameters for ListFinancialEventGroupsByNextToken request or ListFinancialEventGroupsByNextToken object itself
     * @see ListFinancialEventGroupsByNextTokenRequest
     * @return ListFinancialEventGroupsByNextTokenResponse
     *
     * @throws FinancesException
     */
    public function listFinancialEventGroupsByNextToken($request);


    /**
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEvents request or ListFinancialEvents object itself
     * @see ListFinancialEventsRequest
     * @return ListFinancialEventsResponse
     *
     * @throws FinancesException
     */
    public function listFinancialEvents($request);


    /**
     * List Financial Events By Next Token
     * If ListFinancialEvents returns a nextToken, thus indicating that there are more financial events
     *         than returned that matched the given filter criteria, ListFinancialEventsByNextToken
     *         can be used to retrieve those events using that nextToken.
     *
     * @param mixed $request array of parameters for ListFinancialEventsByNextToken request or ListFinancialEventsByNextToken object itself
     * @see ListFinancialEventsByNextTokenRequest
     * @return ListFinancialEventsByNextTokenResponse
     *
     * @throws FinancesException
     */
    public function listFinancialEventsByNextToken($request);


    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws FinancesException
     */
    public function getServiceStatus($request);

}
