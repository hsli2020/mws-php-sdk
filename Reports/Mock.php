<?php

namespace Amazon\MWS\Reports;

use Amazon\MWS\Reports\Model\GetReportResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleCountResponse;
use Amazon\MWS\Reports\Model\GetReportRequestListByNextTokenResponse;
use Amazon\MWS\Reports\Model\UpdateReportAcknowledgementsResponse;
use Amazon\MWS\Reports\Model\GetReportCountResponse;
use Amazon\MWS\Reports\Model\RequestReportResponse;
use Amazon\MWS\Reports\Model\CancelReportRequestsResponse;
use Amazon\MWS\Reports\Model\GetReportListResponse;
use Amazon\MWS\Reports\Model\GetReportRequestListResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleListByNextTokenResponse;
use Amazon\MWS\Reports\Model\GetReportListByNextTokenResponse;
use Amazon\MWS\Reports\Model\ManageReportScheduleResponse;
use Amazon\MWS\Reports\Model\GetReportRequestCountResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleListResponse;

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 */
class Mock implements ReportsInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Report
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html
     * @param mixed $request array of parameters for GetReport request or GetReport object itself
     * @see GetReport
     * @return GetReportResponse GetReportResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReport($request)
    {
        return GetReportResponse::fromXML($this->invoke('GetReport'));
    }

    /**
     * Get Report Schedule Count
     * returns the number of report schedules
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html
     * @param mixed $request array of parameters for GetReportScheduleCount request or GetReportScheduleCount object itself
     * @see GetReportScheduleCount
     * @return GetReportScheduleCountResponse GetReportScheduleCountResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportScheduleCount($request)
    {
        return GetReportScheduleCountResponse::fromXML($this->invoke('GetReportScheduleCount'));
    }

    /**
     * Get Report Request List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html
     * @param mixed $request array of parameters for GetReportRequestListByNextToken request or GetReportRequestListByNextToken object itself
     * @see GetReportRequestListByNextToken
     * @return GetReportRequestListByNextTokenResponse GetReportRequestListByNextTokenResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportRequestListByNextToken($request)
    {
        return GetReportRequestListByNextTokenResponse::fromXML($this->invoke('GetReportRequestListByNextToken'));
    }

    /**
     * Update Report Acknowledgements
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html
     * @param mixed $request array of parameters for UpdateReportAcknowledgements request or UpdateReportAcknowledgements object itself
     * @see UpdateReportAcknowledgements
     * @return UpdateReportAcknowledgementsResponse UpdateReportAcknowledgementsResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function updateReportAcknowledgements($request)
    {
        return UpdateReportAcknowledgementsResponse::fromXML($this->invoke('UpdateReportAcknowledgements'));
    }

    /**
     * Get Report Count
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html
     * @param mixed $request array of parameters for GetReportCount request or GetReportCount object itself
     * @see GetReportCount
     * @return GetReportCountResponse GetReportCountResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportCount($request)
    {
        return GetReportCountResponse::fromXML($this->invoke('GetReportCount'));
    }

    /**
     * Request Report
     * requests the generation of a report
     *
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html
     * @param mixed $request array of parameters for RequestReport request or RequestReport object itself
     * @see RequestReport
     * @return RequestReportResponse RequestReportResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function requestReport($request)
    {
        return RequestReportResponse::fromXML($this->invoke('RequestReport'));
    }

    /**
     * Cancel Report Requests
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html
     * @param mixed $request array of parameters for CancelReportRequests request or CancelReportRequests object itself
     * @see CancelReportRequests
     * @return CancelReportRequestsResponse CancelReportRequestsResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function cancelReportRequests($request)
    {
        return CancelReportRequestsResponse::fromXML($this->invoke('CancelReportRequests'));
    }

    /**
     * Get Report List
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html
     * @param mixed $request array of parameters for GetReportList request or GetReportList object itself
     * @see GetReportList
     * @return GetReportListResponse GetReportListResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportList($request)
    {
        return GetReportListResponse::fromXML($this->invoke('GetReportList'));
    }

    /**
     * Get Report Request List
     * returns a list of report requests ids and their associated metadata
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html
     * @param mixed $request array of parameters for GetReportRequestList request or GetReportRequestList object itself
     * @see GetReportRequestList
     * @return GetReportRequestListResponse GetReportRequestListResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportRequestList($request)
    {
        return GetReportRequestListResponse::fromXML($this->invoke('GetReportRequestList'));
    }

    /**
     * Get Report Schedule List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html
     * @param mixed $request array of parameters for GetReportScheduleListByNextToken request or GetReportScheduleListByNextToken object itself
     * @see GetReportScheduleListByNextToken
     * @return GetReportScheduleListByNextTokenResponse GetReportScheduleListByNextTokenResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportScheduleListByNextToken($request)
    {
        return GetReportScheduleListByNextTokenResponse::fromXML($this->invoke('GetReportScheduleListByNextToken'));
    }

    /**
     * Get Report List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html
     * @param mixed $request array of parameters for GetReportListByNextToken request or GetReportListByNextToken object itself
     * @see GetReportListByNextToken
     * @return GetReportListByNextTokenResponse GetReportListByNextTokenResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportListByNextToken($request)
    {
        return GetReportListByNextTokenResponse::fromXML($this->invoke('GetReportListByNextToken'));
    }

    /**
     * Manage Report Schedule
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html
     * @param mixed $request array of parameters for ManageReportSchedule request or ManageReportSchedule object itself
     * @see ManageReportSchedule
     * @return ManageReportScheduleResponse ManageReportScheduleResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function manageReportSchedule($request)
    {
        return ManageReportScheduleResponse::fromXML($this->invoke('ManageReportSchedule'));
    }

    /**
     * Get Report Request Count
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html
     * @param mixed $request array of parameters for GetReportRequestCount request or GetReportRequestCount object itself
     * @see GetReportRequestCount
     * @return GetReportRequestCountResponse GetReportRequestCountResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportRequestCount($request)
    {
        return GetReportRequestCountResponse::fromXML($this->invoke('GetReportRequestCount'));
    }

    /**
     * Get Report Schedule List
     * returns the list of report schedules
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html
     * @param mixed $request array of parameters for GetReportScheduleList request or GetReportScheduleList object itself
     * @see GetReportScheduleList
     * @return GetReportScheduleListResponse GetReportScheduleListResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getReportScheduleList($request)
    {
        return GetReportScheduleListResponse::fromXML($this->invoke('GetReportScheduleList'));
    }

    // Private API ------------------------------------------------------------//

    private function invoke($actionName)
    {
        return $xml = file_get_contents('MarketplaceWebService/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
