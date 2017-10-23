<?php

namespace Amazon\MWS\Feeds;

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 */
interface FeedsInterface
{
    /**
     * Submit Feed
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html
     * @param mixed $request array of parameters for SubmitFeedRequest request
     * or SubmitFeedRequest object itself
     * @see SubmitFeedRequest
     * @return SubmitFeedResponse SubmitFeedResponse
     *
     * @throws FeedsException
     */
    public function submitFeed($request);

    /**
     * Get Feed Submission List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html
     * @param mixed $request array of parameters for GetFeedSubmissionListByNextTokenRequest request
     * or GetFeedSubmissionListByNextTokenRequest object itself
     * @see GetFeedSubmissionListByNextTokenRequest
     * @return GetFeedSubmissionListByNextTokenResponse GetFeedSubmissionListByNextTokenResponse
     *
     * @throws FeedsException
     */
    public function getFeedSubmissionListByNextToken($request);

    /**
     * Cancel Feed Submissions
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html
     * @param mixed $request array of parameters for CancelFeedSubmissionsRequest request
     * or CancelFeedSubmissionsRequest object itself
     * @see CancelFeedSubmissionsRequest
     * @return CancelFeedSubmissionsResponse CancelFeedSubmissionsResponse
     *
     * @throws FeedsException
     */
    public function cancelFeedSubmissions($request);

    /**
     * Get Feed Submission Count
     * returns the number of feeds matching all of the specified criteria
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html
     * @param mixed $request array of parameters for GetFeedSubmissionCountRequest request
     * or GetFeedSubmissionCountRequest object itself
     * @see GetFeedSubmissionCountRequest
     * @return GetFeedSubmissionCountResponse GetFeedSubmissionCountResponse
     *
     * @throws FeedsException
     */
    public function getFeedSubmissionCount($request);

    /**
     * Get Feed Submission Result
     * retrieves the feed processing report
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html
     * @param mixed $request array of parameters for GetFeedSubmissionResultRequest request
     * or GetFeedSubmissionResultRequest object itself
     * @see GetFeedSubmissionResultRequest
     * @return GetFeedSubmissionResultResponse GetFeedSubmissionResultResponse
     *
     * @throws FeedsException
     */
    public function getFeedSubmissionResult($request);

    /**
     * Get Feed Submission List
     * returns a list of feed submission identifiers and their associated metadata
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html
     * @param mixed $request array of parameters for GetFeedSubmissionListRequest request
     * or GetFeedSubmissionListRequest object itself
     * @see GetFeedSubmissionListRequest
     * @return GetFeedSubmissionListResponse GetFeedSubmissionListResponse
     *
     * @throws FeedsException
     */
    public function getFeedSubmissionList($request);
}
