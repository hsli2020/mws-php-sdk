<?php

namespace Amazon\MWS\Feeds;

use Amazon\MWS\Feeds\Model\SubmitFeedResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListByNextTokenResponse;
use Amazon\MWS\Feeds\Model\CancelFeedSubmissionsResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionCountResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionResultResponse;
use Amazon\MWS\Feeds\Model\GetFeedSubmissionListResponse;

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 */
class Mock implements FeedsInterface
{
    // Public API ------------------------------------------------------------//

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
     * @throws FeedsException
     */
    public function submitFeed($request)
    {
        return SubmitFeedResponse::fromXML($this->invoke('SubmitFeed'));
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
     * @throws FeedsException
     */
    public function getFeedSubmissionListByNextToken($request)
    {
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
     * @throws FeedsException
     */
    public function cancelFeedSubmissions($request)
    {
        return CancelFeedSubmissionsResponse::fromXML($this->invoke('CancelFeedSubmissions'));
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
     * @throws FeedsException
     */
    public function getFeedSubmissionCount($request)
    {
        return GetFeedSubmissionCountResponse::fromXML($this->invoke('GetFeedSubmissionCount'));
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
     * @throws FeedsException
     */
    public function getFeedSubmissionResult($request)
    {
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
     * @throws FeedsException
     */
    public function getFeedSubmissionList($request)
    {
        return GetFeedSubmissionListResponse::fromXML($this->invoke('GetFeedSubmissionList'));
    }

    // Private API ------------------------------------------------------------//

    private function invoke($actionName)
    {
        return $xml = file_get_contents('MarketplaceWebService/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}
