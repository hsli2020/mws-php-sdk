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

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }

    private function setUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($attributes)) {
            $attributes = array ();
        }

        $this->_config['UserAgent'] =
            $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }

    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($applicationName) || $applicationName === "") {
            throw new InvalidArgumentException('$applicationName cannot be null');
        }

        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new InvalidArgumentException('$applicationVersion cannot be null');
        }

        $userAgent =
            $this->quoteApplicationName($applicationName)
            . '/'
            . $this->quoteApplicationVersion($applicationVersion);

        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;

        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new InvalidArgumentException("Value for $key cannot be null or empty.");
            }

            $userAgent .= '; '
                . $this->quoteAttributeName($key)
                . '='
                . $this->quoteAttributeValue($value);
        }

        $userAgent .= ')';

        return $userAgent;
    }

    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                throw new MWSFinancesService_Exception(
                    array ('ErrorCode' => 'InvalidServiceURL',
                           'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status = $response['Status'];
                if ($status == 200) {
                    return array('ResponseBody' => $response['ResponseBody'],
                      'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'],
                    $status, $response['ResponseHeaderMetadata']);
            }
        } catch (MWSFinancesService_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new MWSFinancesService_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, Exception $e =  null)
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

        return new MWSFinancesService_Exception($exProps);
    }

    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset ($uri)) {
                $uri = "/";
        }

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }

        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8"; // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null; // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach ($allHeaders as $name => $val) {
            $str = $name . ": ";
            if (isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1) {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }

        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }

        $response = "";
        $response = curl_exec($ch);

        if ($response === false) {
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            curl_close($ch);
            throw new MWSFinancesService_Exception($exProps);
        }

        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }

    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     */
    private function _extractHeadersAndBody($response)
    {
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; $count < count($responseComponents) && $body == null; $count++) {

            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);

            if ($responseStatus != null && $this->_httpHeadersHaveContent($headers)){

                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }

        //If the body is null here then we were unable to parse the response and will throw an exception
        if ($body == null){
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new MWSFinancesService_Exception($exProps);
        }

        return array(
                'Status' => $responseStatus,
                'ResponseBody' => $body,
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

}
