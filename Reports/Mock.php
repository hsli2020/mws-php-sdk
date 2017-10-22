<?php

namespace Amazon\MWS\Reports;

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 */
class  MarketplaceWebService_Mock implements MarketplaceWebService_Interface
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
        require_once ('MarketplaceWebService/Model/GetReportResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportScheduleCountResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportRequestListByNextTokenResponse.php');
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
        require_once ('MarketplaceWebService/Model/UpdateReportAcknowledgementsResponse.php');
        return UpdateReportAcknowledgementsResponse::fromXML($this->invoke('UpdateReportAcknowledgements'));
    }



    /**
     * Submit Feed
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html
     * @param mixed $request array of parameters for SubmitFeed request or SubmitFeed object itself
     * @see SubmitFeed
     * @return SubmitFeedResponse SubmitFeedResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function submitFeed($request)
    {
        require_once ('MarketplaceWebService/Model/SubmitFeedResponse.php');
        return SubmitFeedResponse::fromXML($this->invoke('SubmitFeed'));
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
        require_once ('MarketplaceWebService/Model/GetReportCountResponse.php');
        return GetReportCountResponse::fromXML($this->invoke('GetReportCount'));
    }



    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     * @param mixed $request array of parameters for GetFeedSubmissionListByNextToken request or GetFeedSubmissionListByNextToken object itself
     * @see GetFeedSubmissionListByNextToken
     * @return GetFeedSubmissionListByNextTokenResponse GetFeedSubmissionListByNextTokenResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getFeedSubmissionListByNextToken($request)
    {
        require_once ('MarketplaceWebService/Model/GetFeedSubmissionListByNextTokenResponse.php');
        return GetFeedSubmissionListByNextTokenResponse::fromXML($this->invoke('GetFeedSubmissionListByNextToken'));
    }



    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     * @param mixed $request array of parameters for CancelFeedSubmissions request or CancelFeedSubmissions object itself
     * @see CancelFeedSubmissions
     * @return CancelFeedSubmissionsResponse CancelFeedSubmissionsResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function cancelFeedSubmissions($request)
    {
        require_once ('MarketplaceWebService/Model/CancelFeedSubmissionsResponse.php');
        return CancelFeedSubmissionsResponse::fromXML($this->invoke('CancelFeedSubmissions'));
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
        require_once ('MarketplaceWebService/Model/RequestReportResponse.php');
        return RequestReportResponse::fromXML($this->invoke('RequestReport'));
    }



    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     * @param mixed $request array of parameters for GetFeedSubmissionCount request or GetFeedSubmissionCount object itself
     * @see GetFeedSubmissionCount
     * @return GetFeedSubmissionCountResponse GetFeedSubmissionCountResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getFeedSubmissionCount($request)
    {
        require_once ('MarketplaceWebService/Model/GetFeedSubmissionCountResponse.php');
        return GetFeedSubmissionCountResponse::fromXML($this->invoke('GetFeedSubmissionCount'));
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
        require_once ('MarketplaceWebService/Model/CancelReportRequestsResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportListResponse.php');
        return GetReportListResponse::fromXML($this->invoke('GetReportList'));
    }



    /**
     * Get Feed Submission Result
     * retrieves the feed processing report
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     * @param mixed $request array of parameters for GetFeedSubmissionResult request or GetFeedSubmissionResult object itself
     * @see GetFeedSubmissionResult
     * @return GetFeedSubmissionResultResponse GetFeedSubmissionResultResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getFeedSubmissionResult($request)
    {
        require_once ('MarketplaceWebService/Model/GetFeedSubmissionResultResponse.php');
        return GetFeedSubmissionResultResponse::fromXML($this->invoke('GetFeedSubmissionResult'));
    }



    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     * @param mixed $request array of parameters for GetFeedSubmissionList request or GetFeedSubmissionList object itself
     * @see GetFeedSubmissionList
     * @return GetFeedSubmissionListResponse GetFeedSubmissionListResponse
     *
     * @throws MarketplaceWebService_Exception
     */
    public function getFeedSubmissionList($request)
    {
        require_once ('MarketplaceWebService/Model/GetFeedSubmissionListResponse.php');
        return GetFeedSubmissionListResponse::fromXML($this->invoke('GetFeedSubmissionList'));
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
        require_once ('MarketplaceWebService/Model/GetReportRequestListResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportScheduleListByNextTokenResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportListByNextTokenResponse.php');
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
        require_once ('MarketplaceWebService/Model/ManageReportScheduleResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportRequestCountResponse.php');
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
        require_once ('MarketplaceWebService/Model/GetReportScheduleListResponse.php');
        return GetReportScheduleListResponse::fromXML($this->invoke('GetReportScheduleList'));
    }

    // Private API ------------------------------------------------------------//

    private function invoke($actionName)
    {
        return $xml = file_get_contents('MarketplaceWebService/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
