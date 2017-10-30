<?php

namespace Amazon\MWS\Finances;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Finances\Exception as FinancesException;
use Amazon\MWS\Finances\Model\GetServiceStatusRequest;
use Amazon\MWS\Finances\Model\GetServiceStatusResponse;
use Amazon\MWS\Finances\Model\ListFinancialEventGroupsByNextTokenRequest;
use Amazon\MWS\Finances\Model\ListFinancialEventGroupsByNextTokenResponse;
use Amazon\MWS\Finances\Model\ListFinancialEventGroupsRequest;
use Amazon\MWS\Finances\Model\ListFinancialEventGroupsResponse;
use Amazon\MWS\Finances\Model\ListFinancialEventsByNextTokenRequest;
use Amazon\MWS\Finances\Model\ListFinancialEventsByNextTokenResponse;
use Amazon\MWS\Finances\Model\ListFinancialEventsRequest;
use Amazon\MWS\Finances\Model\ListFinancialEventsResponse;
use Amazon\MWS\Finances\Model\ResponseHeaderMetadata;

/**
 * MWSFinancesService_Client is an implementation of MWSFinancesService
 */
class Client extends BaseClient implements FinancesInterface
{
    const SERVICE_VERSION    = '2015-05-01';
    const MWS_CLIENT_VERSION = '2015-09-03';

    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEventGroups request or ListFinancialEventGroups object itself
     * @see ListFinancialEventGroupsRequest
     * @return ListFinancialEventGroupsResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventGroups($request)
    {
        if (!($request instanceof ListFinancialEventGroupsRequest)) {
            $request = new ListFinancialEventGroupsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventGroups';
        $httpResponse = $this->_invoke($parameters);

        $response = ListFinancialEventGroupsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListFinancialEventGroupsRequest to name value pairs
     */
    private function _convertListFinancialEventGroups($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListFinancialEventGroups';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMaxResultsPerPage()) {
            $parameters['MaxResultsPerPage'] =  $request->getMaxResultsPerPage();
        }
        if ($request->isSetFinancialEventGroupStartedAfter()) {
            $parameters['FinancialEventGroupStartedAfter'] =  $request->getFinancialEventGroupStartedAfter();
        }
        if ($request->isSetFinancialEventGroupStartedBefore()) {
            $parameters['FinancialEventGroupStartedBefore'] =  $request->getFinancialEventGroupStartedBefore();
        }

        return $parameters;
    }

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
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventGroupsByNextToken($request)
    {
        if (!($request instanceof ListFinancialEventGroupsByNextTokenRequest)) {
            $request = new ListFinancialEventGroupsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventGroupsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListFinancialEventGroupsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListFinancialEventGroupsByNextTokenRequest to name value pairs
     */
    private function _convertListFinancialEventGroupsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListFinancialEventGroupsByNextToken';
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
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListFinancialEvents request or ListFinancialEvents object itself
     * @see ListFinancialEventsRequest
     * @return ListFinancialEventsResponse
     *
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEvents($request)
    {
        if (!($request instanceof ListFinancialEventsRequest)) {
            $request = new ListFinancialEventsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEvents';
        $httpResponse = $this->_invoke($parameters);

        $response = ListFinancialEventsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }


    /**
     * Convert ListFinancialEventsRequest to name value pairs
     */
    private function _convertListFinancialEvents($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListFinancialEvents';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetMaxResultsPerPage()) {
            $parameters['MaxResultsPerPage'] =  $request->getMaxResultsPerPage();
        }
        if ($request->isSetAmazonOrderId()) {
            $parameters['AmazonOrderId'] =  $request->getAmazonOrderId();
        }
        if ($request->isSetFinancialEventGroupId()) {
            $parameters['FinancialEventGroupId'] =  $request->getFinancialEventGroupId();
        }
        if ($request->isSetPostedAfter()) {
            $parameters['PostedAfter'] =  $request->getPostedAfter();
        }
        if ($request->isSetPostedBefore()) {
            $parameters['PostedBefore'] =  $request->getPostedBefore();
        }

        return $parameters;
    }

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
     * @throws MWSFinancesService_Exception
     */
    public function listFinancialEventsByNextToken($request)
    {
        if (!($request instanceof ListFinancialEventsByNextTokenRequest)) {
            $request = new ListFinancialEventsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListFinancialEventsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListFinancialEventsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListFinancialEventsByNextTokenRequest to name value pairs
     */
    private function _convertListFinancialEventsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListFinancialEventsByNextToken';
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
     * @throws MWSFinancesService_Exception
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
