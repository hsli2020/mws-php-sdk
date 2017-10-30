<?php

namespace Amazon\MWS\Reports;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Reports\Exception as ReportsException;
use Amazon\MWS\Reports\Model\CancelReportRequestsRequest;
use Amazon\MWS\Reports\Model\CancelReportRequestsResponse;
use Amazon\MWS\Reports\Model\ErrorResponse;
use Amazon\MWS\Reports\Model\GetReportCountRequest;
use Amazon\MWS\Reports\Model\GetReportCountResponse;
use Amazon\MWS\Reports\Model\GetReportListByNextTokenRequest;
use Amazon\MWS\Reports\Model\GetReportListByNextTokenResponse;
use Amazon\MWS\Reports\Model\GetReportListRequest;
use Amazon\MWS\Reports\Model\GetReportListResponse;
use Amazon\MWS\Reports\Model\GetReportRequest;
use Amazon\MWS\Reports\Model\GetReportRequestCountRequest;
use Amazon\MWS\Reports\Model\GetReportRequestCountResponse;
use Amazon\MWS\Reports\Model\GetReportRequestListByNextTokenRequest;
use Amazon\MWS\Reports\Model\GetReportRequestListByNextTokenResponse;
use Amazon\MWS\Reports\Model\GetReportRequestListRequest;
use Amazon\MWS\Reports\Model\GetReportRequestListResponse;
use Amazon\MWS\Reports\Model\GetReportResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleCountRequest;
use Amazon\MWS\Reports\Model\GetReportScheduleCountResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleListByNextTokenRequest;
use Amazon\MWS\Reports\Model\GetReportScheduleListByNextTokenResponse;
use Amazon\MWS\Reports\Model\GetReportScheduleListRequest;
use Amazon\MWS\Reports\Model\GetReportScheduleListResponse;
use Amazon\MWS\Reports\Model\ManageReportScheduleRequest;
use Amazon\MWS\Reports\Model\ManageReportScheduleResponse;
use Amazon\MWS\Reports\Model\RequestReportRequest;
use Amazon\MWS\Reports\Model\RequestReportResponse;
use Amazon\MWS\Reports\Model\ResponseHeaderMetadata;
use Amazon\MWS\Reports\Model\UpdateReportAcknowledgementsRequest;
use Amazon\MWS\Reports\Model\UpdateReportAcknowledgementsResponse;

define('CONVERTED_PARAMETERS_KEY', 'PARAMETERS');
define('CONVERTED_HEADERS_KEY',    'HEADERS');

/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 *
 * MarketplaceWebService_Client is an implementation of MarketplaceWebService
 */
class Client extends BaseClient implements ReportsInterface
{
    const REQUEST_TYPE       = "POST";
    const SERVICE_VERSION    = '2009-01-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    private $defaultHeaders = array();

    private $responseBodyContents;

    // "streaming" responses that are errors will be send to this handle;
    private $errorResponseBody;

    private $headerContents;

    private $curlClient;

    // Public API ------------------------------------------------------------//

    /**
     * Get Report
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html
     * @param mixed $request array of parameters for GetReportRequest request
     * or GetReportRequest object itself
     * @see GetReport
     * @return GetReportResponse GetReportResponse
     *
     * @throws Exception
     */
    public function getReport($request)
    {
        if (!$request instanceof GetReportRequest) {
            $request = new GetReportRequest($request);
        }

        $httpResponse = $this->invoke($this->convertGetReport($request), $request->getReport());
        $response = GetReportResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Schedule Count
     * returns the number of report schedules
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html
     * @param mixed $request array of parameters for GetReportScheduleCountRequest request
     * or GetReportScheduleCountRequest object itself
     * @see GetReportScheduleCount
     * @return GetReportScheduleCountResponse GetReportScheduleCountResponse
     *
     * @throws Exception
     */
    public function getReportScheduleCount($request)
    {
        if (!$request instanceof GetReportScheduleCountRequest) {
            $request = new GetReportScheduleCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleCount($request));
        $response = GetReportScheduleCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Request List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html
     * @param mixed $request array of parameters for GetReportRequestListByNextTokenRequest request
     * or GetReportRequestListByNextTokenRequest object itself
     * @see GetReportRequestListByNextToken
     * @return GetReportRequestListByNextTokenResponse GetReportRequestListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportRequestListByNextToken($request)
    {
        if (!$request instanceof GetReportRequestListByNextTokenRequest) {
            $request = new GetReportRequestListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestListByNextToken($request));
        $response = GetReportRequestListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Update Report Acknowledgements
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html
     * @param mixed $request array of parameters for UpdateReportAcknowledgementsRequest request
     * or UpdateReportAcknowledgementsRequest object itself
     * @see UpdateReportAcknowledgements
     * @return UpdateReportAcknowledgementsResponse UpdateReportAcknowledgementsResponse
     *
     * @throws Exception
     */
    public function updateReportAcknowledgements($request)
    {
        if (!$request instanceof UpdateReportAcknowledgementsRequest) {
            $request = new UpdateReportAcknowledgementsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertUpdateReportAcknowledgements($request));
        $response = UpdateReportAcknowledgementsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Count
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html
     * @param mixed $request array of parameters for GetReportCountRequest request
     * or GetReportCountRequest object itself
     * @see GetReportCount
     * @return GetReportCountResponse GetReportCountResponse
     *
     * @throws Exception
     */
    public function getReportCount($request)
    {
        if (!$request instanceof GetReportCountRequest) {
            $request = new GetReportCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportCount($request));
        $response = GetReportCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Request Report
     * requests the generation of a report
     *
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html
     * @param mixed $request array of parameters for RequestReportRequest request
     * or RequestReportRequest object itself
     * @see RequestReport
     * @return RequestReportResponse RequestReportResponse
     *
     * @throws Exception
     */
    public function requestReport($request)
    {
        if (!$request instanceof RequestReportRequest) {
            $request = new RequestReportRequest($request);
        }
        $httpResponse = $this->invoke($this->convertRequestReport($request));
        $response = RequestReportResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Cancel Report Requests
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html
     * @param mixed $request array of parameters for CancelReportRequestsRequest request
     * or CancelReportRequestsRequest object itself
     * @see CancelReportRequests
     * @return CancelReportRequestsResponse CancelReportRequestsResponse
     *
     * @throws Exception
     */
    public function cancelReportRequests($request)
    {
        if (!$request instanceof CancelReportRequestsRequest) {
            $request = new CancelReportRequestsRequest($request);
        }
        $httpResponse = $this->invoke($this->convertCancelReportRequests($request));
        $response = CancelReportRequestsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report List
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html
     * @param mixed $request array of parameters for GetReportListRequest request
     * or GetReportListRequest object itself
     * @see GetReportList
     * @return GetReportListResponse GetReportListResponse
     *
     * @throws Exception
     */
    public function getReportList($request)
    {
        if (!$request instanceof GetReportListRequest) {
            $request = new GetReportListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportList($request));
        $response = GetReportListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Request List
     * returns a list of report requests ids and their associated metadata
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html
     * @param mixed $request array of parameters for GetReportRequestListRequest request
     * or GetReportRequestListRequest object itself
     * @see GetReportRequestList
     * @return GetReportRequestListResponse GetReportRequestListResponse
     *
     * @throws Exception
     */
    public function getReportRequestList($request)
    {
        if (!$request instanceof GetReportRequestListRequest) {
            $request = new GetReportRequestListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestList($request));
        $response = GetReportRequestListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Schedule List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html
     * @param mixed $request array of parameters for GetReportScheduleListByNextTokenRequest request
     * or GetReportScheduleListByNextTokenRequest object itself
     * @see GetReportScheduleListByNextToken
     * @return GetReportScheduleListByNextTokenResponse GetReportScheduleListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportScheduleListByNextToken($request)
    {
        if (!$request instanceof GetReportScheduleListByNextTokenRequest) {
            $request = new GetReportScheduleListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleListByNextToken($request));
        $response = GetReportScheduleListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report List By Next Token
     * retrieve the next batch of list items and if there are more items to retrieve
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html
     * @param mixed $request array of parameters for GetReportListByNextTokenRequest request
     * or GetReportListByNextTokenRequest object itself
     * @see GetReportListByNextToken
     * @return GetReportListByNextTokenResponse GetReportListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportListByNextToken($request)
    {
        if (!$request instanceof GetReportListByNextTokenRequest) {
            $request = new GetReportListByNextTokenRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportListByNextToken($request));
        $response = GetReportListByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Manage Report Schedule
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html
     * @param mixed $request array of parameters for ManageReportScheduleRequest request
     * or ManageReportScheduleRequest object itself
     * @see ManageReportSchedule
     * @return ManageReportScheduleResponse ManageReportScheduleResponse
     *
     * @throws Exception
     */
    public function manageReportSchedule($request)
    {
        if (!$request instanceof ManageReportScheduleRequest) {
            $request = new ManageReportScheduleRequest($request);
        }
        $httpResponse = $this->invoke($this->convertManageReportSchedule($request));
        $response = ManageReportScheduleResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Request Count
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html
     * @param mixed $request array of parameters for GetReportRequestCountRequest request
     * or GetReportRequestCountRequest object itself
     * @see GetReportRequestCount
     * @return GetReportRequestCountResponse GetReportRequestCountResponse
     *
     * @throws Exception
     */
    public function getReportRequestCount($request)
    {
        if (!$request instanceof GetReportRequestCountRequest) {
            $request = new GetReportRequestCountRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportRequestCount($request));
        $response = GetReportRequestCountResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Get Report Schedule List
     * returns the list of report schedules
     *
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html
     * @param mixed $request array of parameters for GetReportScheduleListRequest request
     * or GetReportScheduleListRequest object itself
     * @see GetReportScheduleList
     * @return GetReportScheduleListResponse GetReportScheduleListResponse
     *
     * @throws Exception
     */
    public function getReportScheduleList($request)
    {
        if (!$request instanceof GetReportScheduleListRequest) {
            $request = new GetReportScheduleListRequest($request);
        }
        $httpResponse = $this->invoke($this->convertGetReportScheduleList($request));
        $response = GetReportScheduleListResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    // Private API ------------------------------------------------------------//

    /**
     * Get the base64 encoded md5 value of $data. If $data is a memory or temp file stream, this
     * method dumps the contents into a string before calculating the md5. Hence, this method
     * shouldn't be used for large memory streams.
     *
     * @param $data
     * @return unknown_type
     */
    private function getContentMd5($data) {
        $md5Hash = null;

        if (is_string($data)) {
            $md5Hash = md5($data, true);
        } else if (is_resource($data)) {
            // Assume $data is a stream.
            $streamMetadata = stream_get_meta_data($data);

            if ($streamMetadata['stream_type'] === 'MEMORY' || $streamMetadata['stream_type'] === 'TEMP') {
                $md5Hash = md5(stream_get_contents($data), true);
            } else {
                $md5Hash = md5_file($streamMetadata['uri'], true);
            }
        }

        return base64_encode($md5Hash);
    }

    /**
     * Invoke request and return response
     */
    private function invoke(array $converted, $dataHandle = null, $contentMd5 = null)
    {
        $parameters = $converted[CONVERTED_PARAMETERS_KEY];
        $actionName = $parameters["Action"];
        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {

            // Ensure the endpoint URL is set.
            if (empty($this->config['ServiceURL'])) {
                throw new Exception(
                    array('ErrorCode' => 'InvalidServiceUrl',
                    'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters);
            $converted[CONVERTED_PARAMETERS_KEY] = $parameters;

            $shouldRetry = false;
            $retries = 0;
            do {
                try {
                    $response = $this->performRequest($actionName, $converted, $dataHandle, $contentMd5);

                    $httpStatus = $response['Status'];

                    switch ($httpStatus) {
                    case 200:
                        $shouldRetry = false;
                        break;

                    case 500:
                    case 503:
                        $errorResponse = ErrorResponse::fromXML($response['ResponseBody']);

                        // We will not retry throttling errors since this would just add to the throttling problem.
                        $shouldRetry = ($errorResponse->getError()->getCode() === 'RequestThrottled')
                            ? false : true;

                        if ($shouldRetry && $retries <= $this->config['MaxErrorRetry']) {
                            $this->_pauseOnRetry(++$retries);
                        } else {
                            throw $this->reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                        }
                        break;

                    default:
                        $shouldRetry = false;
                        throw $this->reportAnyErrors($response['ResponseBody'], $response['Status'], $response['ResponseHeaderMetadata']);
                        break;
                    }

                    /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    throw new Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                }

            } while ($shouldRetry);

        } catch (Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
        return array('ResponseBody' => $response['ResponseBody'], 'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function reportAnyErrors($responseBody, $status, $responseHeaderMetadata)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;

        libxml_use_internal_errors(true);  // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);

        if ($xmlBody !== false) {  // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId; // 'd' in RequestId is sometimes capitalized
        } else { // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }

        return new Exception($exProps);
    }

    /**
     * Setup and execute the request via cURL and return the server response.
     *
     * @param $action - the MWS action to perform.
     * @param $parameters - the MWS parameters for the Action.
     * @param $dataHandle - A stream handle to either a feed to upload, or a report/feed submission result to download.
     * @param $contentMd5 - The Content-MD5 HTTP header value used for feed submissions.
     * @return array
     */
    private function performRequest($action, array $converted, $dataHandle = null, $contentMd5 = null)
    {
        $curlOptions = $this->configureCurlOptions($action, $converted, $dataHandle, $contentMd5);

        if (is_null($curlOptions[CURLOPT_RETURNTRANSFER]) || !$curlOptions[CURLOPT_RETURNTRANSFER]) {
            $curlOptions[CURLOPT_RETURNTRANSFER] = true;
        }

        $this->curlClient = curl_init();
        curl_setopt_array($this->curlClient, $curlOptions);

        $this->headerContents = @fopen('php://memory', 'rw+');
        $this->errorResponseBody = @fopen('php://memory', 'rw+');

        $httpResponse = curl_exec($this->curlClient);

        rewind($this->headerContents);
        $header = stream_get_contents($this->headerContents);

        $parsedHeader = $this->parseHttpHeader($header);

        $responseHeaderMetadata = new ResponseHeaderMetadata(
            $parsedHeader['x-mws-request-id'],
            $parsedHeader['x-mws-response-context'],
            $parsedHeader['x-mws-timestamp']);

        $code = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // Only attempt to verify the Content-MD5 value if the request was successful.
        if (RequestType::getRequestType($action) === RequestType::POST_DOWNLOAD) {
            if ($code != 200) {
                rewind($this->errorResponseBody);
                $httpResponse =  stream_get_contents($this->errorResponseBody);
            } else {
                $this->verifyContentMd5($this->getParsedHeader($parsedHeader,'Content-MD5'), $dataHandle);
                $httpResponse = $this->getDownloadResponseDocument($action, $parsedHeader);
            }
        }

        // Cleanup open streams and cURL instance.
        @fclose($this->headerContents);
        @fclose($this->errorResponseBody);
        curl_close($this->curlClient);

        return array (
            'Status' => $code,
            'ResponseBody' => $httpResponse,
            'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

    private function getParsedHeader($parsedHeader, $key)
    {
        return $parsedHeader[strtolower($key)];
    }

    /**
     * Compares the received Content-MD5 Hash value from the response with a locally calculated
     * value based on the contents of the response body. If the received hash value doesn't match
     * the locally calculated hash value, an exception is raised.
     *
     * @param $receivedMd5Hash
     * @param $streamHandle
     * @return unknown_type
     */
    private function verifyContentMd5($receivedMd5Hash, $streamHandle)
    {
        rewind($streamHandle);
        $expectedMd5Hash = $this->getContentMd5($streamHandle);
        rewind($streamHandle);

        if (!($receivedMd5Hash === $expectedMd5Hash)) {
            throw new Exception(
                array(
                    'Message' => 'Received Content-MD5 = ' . $receivedMd5Hash . ' but expected ' . $expectedMd5Hash,
                    'ErrorCode' => 'ContentMD5DoesNotMatch'));
        }
    }

    /**
     * Build an associative array of an HTTP Header lines. For requests, the HTTP request line
     * is not contained in the array, nor is the HTTP status line for response headers.
     *
     * @param $header
     * @return array
     */
    private function parseHttpHeader($header)
    {
        $parsedHeader = array ();
        foreach (explode("\n", $header) as $line) {
            $splitLine = preg_split('/:\s/', $line, 2, PREG_SPLIT_NO_EMPTY);

            if (sizeof($splitLine) == 2) {
                $k = strtolower(trim($splitLine[0]));
                $v = trim($splitLine[1]);
                if (array_key_exists($k, $parsedHeader)) {
                    $parsedHeader[$k] = $parsedHeader[$k] . "," . $v;
                } else {
                    $parsedHeader[$k] = $v;
                }
            }
        }

        return $parsedHeader;
    }

    /**
     * cURL callback to write the response HTTP body into a stream. This is only intended to be used
     * with RequestType::POST_DOWNLOAD request types, since the responses can potentially become
     * large.
     *
     * @param $ch - The curl handle.
     * @param $string - body portion to write.
     * @return int - number of byes written.
     */
    private function responseCallback($ch, $string)
    {
        $httpStatusCode = (int) curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);

        // For unsuccessful responses, i.e. non-200 HTTP responses, we write the response body
        // into a separate stream.
        $responseHandle;
        if ($httpStatusCode == 200) {
            $responseHandle = $this->responseBodyContents;
        } else {
            $responseHandle = $this->errorResponseBody;
        }

        return fwrite($responseHandle, $string);
    }

    /**
     * cURL callback to write the response HTTP header into a stream.
     *
     * @param $ch - The curl handle.
     * @param $string - header portion to write.
     * @return int - number of bytes written to stream.
     */
    private function headerCallback($ch, $string)
    {
        $bytesWritten = fwrite($this->headerContents, $string);
        return $bytesWritten;
    }

    /**
     * Gets cURL options common to all MWS requests.
     * @return unknown_type
     */
    private function getDefaultCurlOptions()
    {
        return array (
            CURLOPT_POST => true,
            CURLOPT_USERAGENT => $this->config['UserAgent'],
            CURLOPT_VERBOSE => true,
            CURLOPT_HEADERFUNCTION => array ($this, 'headerCallback'),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2
        );
    }

    /**
     * Configures specific curl options based on the request type.
     *
     * @param $action
     * @param $parameters
     * @param $streamHandle
     * @return array
     */
    private function configureCurlOptions($action, array $converted, $streamHandle = null, $contentMd5 = null)
    {
        $curlOptions = $this->getDefaultCurlOptions();

        if (!is_null($this->config['ProxyHost'])) {
            $proxy = $this->config['ProxyHost'];
            $proxy .= ':' . ($this->config['ProxyPort'] == -1 ? '80' : $this->config['ProxyPort']);

            $curlOptions[CURLOPT_PROXY] = $proxy;
        }

        $serviceUrl = $this->config['ServiceURL'];

        // append the '/' character to the end of the service URL if it doesn't exist.
        if (!(substr($serviceUrl, strlen($serviceUrl) - 1) === '/')) {
            $serviceUrl .= '/';
        }

        $requestType = RequestType::getRequestType($action);

        if ($requestType == RequestType::POST_UPLOAD) {

            if (is_null($streamHandle) || !is_resource($streamHandle)) {
                throw new Exception(array('Message' => 'Missing stream resource.'));
            }

            $serviceUrl .= '?' . $this->getParametersAsString($converted[CONVERTED_PARAMETERS_KEY]);

            $curlOptions[CURLOPT_URL] = $serviceUrl;

            $header[] = 'Expect: ';
            $header[] = 'Accept: ';
            $header[] = 'Transfer-Encoding: chunked';
            $header[] = 'Content-MD5: ' . $contentMd5;

            $curlOptions[CURLOPT_HTTPHEADER] = array_merge($header, $converted[CONVERTED_HEADERS_KEY]);

            rewind($streamHandle);
            $curlOptions[CURLOPT_INFILE] = $streamHandle;

            $curlOptions[CURLOPT_UPLOAD] = true;

            $curlOptions[CURLOPT_CUSTOMREQUEST] = self::REQUEST_TYPE;

        } else if (!($requestType === RequestType::UNKNOWN)) {
            $curlOptions[CURLOPT_URL] = $this->config['ServiceURL'];
            $curlOptions[CURLOPT_POSTFIELDS] = $this->getParametersAsString($converted[CONVERTED_PARAMETERS_KEY]);

            if ($requestType == RequestType::POST_DOWNLOAD) {
                $this->responseBodyContents = $streamHandle;
                $curlOptions[CURLOPT_WRITEFUNCTION] = array ($this, 'responseCallback');
            }
        } else {
            throw new InvalidArgumentException("$action is not a valid request type.");
        }

        return $curlOptions;
    }

    /**
     * For RequestType::POST_DOWNLOAD actions, construct a response containing the Amazon Request ID
     * and Content MD5 header value.
     *
     * @param $responseType
     * @param $header
     * @return unknown_type
     */
    private function getDownloadResponseDocument($responseType, $header)
    {
        $md5 = $this->getParsedHeader($header, 'Content-MD5');
        $requestId = $this->getParsedHeader($header, 'x-amz-request-id');

        $response = '<' . $responseType . 'Response xmlns="http://mws.amazonaws.com/doc/2009-01-01/">';

        $response .= '<' . $responseType . 'Result>';
        $response .= '<ContentMd5>';
        $response .= $md5;
        $response .= '</ContentMd5>';
        $response .= '</' . $responseType . 'Result>';
        $response .= '<ResponseMetadata>';
        $response .= '<RequestId>';
        $response .= $requestId;
        $response .= '</RequestId>';
        $response .= '</ResponseMetadata>';
        $response .= '</' . $responseType . 'Response>';

        return $response;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function calculateStringToSignV2(array $parameters, $queuepath = null)
    {
        $parsedUrl = parse_url($this->config['ServiceURL']);
        $endpoint = $parsedUrl['host'];
        if (isset($parsedUrl['port']) && !is_null($parsedUrl['port'])) {
            $endpoint .= ':' . $parsedUrl['port'];
        }

        $data = 'POST';
        $data .= "\n";
        $data .= $endpoint;
        $data .= "\n";
        if ($queuepath) {
            $uri  = $queuepath;
        } else {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);

        return $data;
    }

    /**
     * Returns a ISO 8601 formatted string from a DateTime instance.
     */
    private function getFormattedTimestamp($dateTime)
    {
        if (!is_object($dateTime)) {
            if (is_string($dateTime)) {
                $dateTime = new DateTime($dateTime);
            } else {
                throw new Exception("Invalid date value.");
            }
        } else {
            if (!($dateTime instanceof DateTime)) {
                throw new Exception("Invalid date value.");
            }
        }

        return $dateTime->format(DATE_ISO8601);
    }

    /**
     * Convert GetReportRequest to name value pairs
     */
    private function convertGetReport($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReport';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportId()) {
            $parameters['ReportId'] =  $request->getReportId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportScheduleCountRequest to name value pairs
     */
    private function convertGetReportScheduleCount($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportScheduleCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportRequestListByNextTokenRequest to name value pairs
     */
    private function convertGetReportRequestListByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportRequestListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert UpdateReportAcknowledgementsRequest to name value pairs
     */
    private function convertUpdateReportAcknowledgements($request)
    {
        $parameters = array();
        $parameters['Action'] = 'UpdateReportAcknowledgements';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportIdList()) {
            $reportIdList = $request->getReportIdList();
            foreach  ($reportIdList->getId() as $idIndex => $id) {
                $parameters['ReportIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? "true" : "false";
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportCountRequest to name value pairs
     */
    private function convertGetReportCount($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? "true" : "false";
        }
        if ($request->isSetAvailableFromDate()) {
            $parameters['AvailableFromDate'] =
                $this->getFormattedTimestamp($request->getAvailableFromDate());
        }
        if ($request->isSetAvailableToDate()) {
            $parameters['AvailableToDate'] =
                $this->getFormattedTimestamp($request->getAvailableToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert RequestReportRequest to name value pairs
     */
    private function convertRequestReport($request)
    {
        $parameters = array();
        $parameters['Action'] = 'RequestReport';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMarketplaceIdList()) {
            $marketplaceIdList = $request->getMarketplaceIdList();
            foreach  ($marketplaceIdList->getId() as $idIndex => $id) {
                $parameters['MarketplaceIdList.Id.'.($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportType()) {
            $parameters['ReportType'] =  $request->getReportType();
        }
        if ($request->isSetStartDate()) {
            $parameters['StartDate'] =
                $this->getFormattedTimestamp($request->getStartDate());
        }
        if ($request->isSetEndDate()) {
            $parameters['EndDate'] =
                $this->getFormattedTimestamp($request->getEndDate());
        }
        if ($request->isSetReportOptions()) {
            $parameters['ReportOptions'] =  $request->getReportOptions();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert CancelReportRequestsRequest to name value pairs
     */
    private function convertCancelReportRequests($request)
    {
        $parameters = array();
        $parameters['Action'] = 'CancelReportRequests';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach  ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach  ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.'  . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
                $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
                $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportListRequest to name value pairs
     */
    private function convertGetReportList($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetAcknowledged()) {
            $parameters['Acknowledged'] =  $request->getAcknowledged() ? "true" : "false";
        }
        if ($request->isSetAvailableFromDate()) {
            $parameters['AvailableFromDate'] =
                $this->getFormattedTimestamp($request->getAvailableFromDate());
        }
        if ($request->isSetAvailableToDate()) {
            $parameters['AvailableToDate'] =
                $this->getFormattedTimestamp($request->getAvailableToDate());
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach  ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportRequestListRequest to name value pairs
     */
    private function convertGetReportRequestList($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportRequestList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportRequestIdList()) {
            $reportRequestIdList = $request->getReportRequestIdList();
            foreach  ($reportRequestIdList->getId() as $idIndex => $id) {
                $parameters['ReportRequestIdList' . '.' . 'Id' . '.'  . ($idIndex + 1)] =  $id;
            }
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach  ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.'  . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetMaxCount()) {
            $parameters['MaxCount'] =  $request->getMaxCount();
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
                $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
                $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportScheduleListByNextTokenRequest to name value pairs
     */
    private function convertGetReportScheduleListByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportScheduleListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportListByNextTokenRequest to name value pairs
     */
    private function convertGetReportListByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportListByNextToken';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetNextToken()) {
            $parameters['NextToken'] =  $request->getNextToken();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert ManageReportScheduleRequest to name value pairs
     */
    private function convertManageReportSchedule($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ManageReportSchedule';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportType()) {
            $parameters['ReportType'] =  $request->getReportType();
        }
        if ($request->isSetSchedule()) {
            $parameters['Schedule'] =  $request->getSchedule();
        }
        if ($request->isSetScheduleDate()) {
            $parameters['ScheduleDate'] =
                $this->getFormattedTimestamp($request->getScheduleDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportRequestCountRequest to name value pairs
     */
    private function convertGetReportRequestCount($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportRequestCount';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetReportProcessingStatusList()) {
            $reportProcessingStatusList = $request->getReportProcessingStatusList();
            foreach  ($reportProcessingStatusList->getStatus() as $statusIndex => $status) {
                $parameters['ReportProcessingStatusList' . '.' . 'Status' . '.'  . ($statusIndex + 1)] =  $status;
            }
        }
        if ($request->isSetRequestedFromDate()) {
            $parameters['RequestedFromDate'] =
                $this->getFormattedTimestamp($request->getRequestedFromDate());
        }
        if ($request->isSetRequestedToDate()) {
            $parameters['RequestedToDate'] =
                $this->getFormattedTimestamp($request->getRequestedToDate());
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }

    /**
     * Convert GetReportScheduleListRequest to name value pairs
     */
    private function convertGetReportScheduleList($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetReportScheduleList';
        if ($request->isSetMarketplace()) {
            $parameters['Marketplace'] =  $request->getMarketplace();
        }
        if ($request->isSetMerchant()) {
            $parameters['Merchant'] =  $request->getMerchant();
        }
        if ($request->isSetReportTypeList()) {
            $reportTypeList = $request->getReportTypeList();
            foreach  ($reportTypeList->getType() as $typeIndex => $type) {
                $parameters['ReportTypeList' . '.' . 'Type' . '.'  . ($typeIndex + 1)] =  $type;
            }
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }

        return array(CONVERTED_PARAMETERS_KEY => $parameters, CONVERTED_HEADERS_KEY => $this->defaultHeaders);
    }
}
