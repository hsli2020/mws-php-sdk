<?php

namespace Amazon\MWS\Finances;

class Mock implements FinancesInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEventGroups request or ListFinancialEventGroups object itself
     * @see ListFinancialEventGroups
     * @return ListFinancialEventGroupsResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventGroups($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListFinancialEventGroupsResponse.php');
        return ListFinancialEventGroupsResponse::fromXML($this->_invoke('ListFinancialEventGroups'));
    }

    /**
     * List Financial Event Groups By Next Token
     * If ListFinancialEventGroups returns a nextToken, thus indicating that there are more groups
     *         than returned that matched the given filter criteria, ListFinancialEventGroupsByNextToken
     *         can be used to retrieve those groups using that nextToken.
     *
     * @param mixed $request array of parameters for ListFinancialEventGroupsByNextToken request or ListFinancialEventGroupsByNextToken object itself
     * @see ListFinancialEventGroupsByNextToken
     * @return ListFinancialEventGroupsByNextTokenResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventGroupsByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListFinancialEventGroupsByNextTokenResponse.php');
        return ListFinancialEventGroupsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventGroupsByNextToken'));
    }

    /**
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEvents request or ListFinancialEvents object itself
     * @see ListFinancialEvents
     * @return ListFinancialEventsResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEvents($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListFinancialEventsResponse.php');
        return ListFinancialEventsResponse::fromXML($this->_invoke('ListFinancialEvents'));
    }

    /**
     * List Financial Events By Next Token
     * If ListFinancialEvents returns a nextToken, thus indicating that there are more financial events
     *         than returned that matched the given filter criteria, ListFinancialEventsByNextToken
     *         can be used to retrieve those events using that nextToken.
     *
     * @param mixed $request array of parameters for ListFinancialEventsByNextToken request or ListFinancialEventsByNextToken object itself
     * @see ListFinancialEventsByNextToken
     * @return ListFinancialEventsByNextTokenResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventsByNextToken($request)
    {
        require_once (dirname(__FILE__) . '/Model/ListFinancialEventsByNextTokenResponse.php');
        return ListFinancialEventsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventsByNextToken'));
    }

    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once (dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
