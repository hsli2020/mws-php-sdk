<?php

namespace Amazon\MWS\Recommendations;

use Amazon\MWS\Client as BaseClient;

use Amazon\MWS\Recommendations\Exception as RecommendationsException;
use Amazon\MWS\Recommendations\Model\GetLastUpdatedTimeForRecommendationsRequest;
use Amazon\MWS\Recommendations\Model\GetLastUpdatedTimeForRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\GetServiceStatusRequest;
use Amazon\MWS\Recommendations\Model\GetServiceStatusResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsByNextTokenRequest;
use Amazon\MWS\Recommendations\Model\ListRecommendationsByNextTokenResponse;
use Amazon\MWS\Recommendations\Model\ListRecommendationsRequest;
use Amazon\MWS\Recommendations\Model\ListRecommendationsResponse;
use Amazon\MWS\Recommendations\Model\ResponseHeaderMetadata;

/**
 * Recommendations\Client is an implementation of RecommendationsSectionService
 */
class Client extends BaseClient implements RecommendationsInterface
{
    const SERVICE_VERSION    = '2013-04-01';
    const MWS_CLIENT_VERSION = '2015-06-18';

    /**
     * Get Last Updated Time For Recommendations
     * Retrieving last updated time for all recommendation categories for the given marketplace and seller.
     *       If last updated time for a category is null, it indicates no active recommendations for this seller in the given marketplace for this category.
     *
     * @param mixed $request array of parameters for GetLastUpdatedTimeForRecommendations request or GetLastUpdatedTimeForRecommendations object itself
     * @see GetLastUpdatedTimeForRecommendationsRequest
     * @return GetLastUpdatedTimeForRecommendationsResponse
     *
     * @throws Exception
     */
    public function getLastUpdatedTimeForRecommendations($request)
    {
        if (!($request instanceof GetLastUpdatedTimeForRecommendationsRequest)) {
            $request = new GetLastUpdatedTimeForRecommendationsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLastUpdatedTimeForRecommendations';
        $httpResponse = $this->_invoke($parameters);

        $response = GetLastUpdatedTimeForRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert GetLastUpdatedTimeForRecommendationsRequest to name value pairs
     */
    private function _convertGetLastUpdatedTimeForRecommendations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLastUpdatedTimeForRecommendations';
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }

        return $parameters;
    }

    /**
     * List Recommendations
     * Retrieving first batch of recommendations.
     *
     * @param mixed $request array of parameters for ListRecommendations request or ListRecommendations object itself
     * @see ListRecommendationsRequest
     * @return ListRecommendationsResponse
     *
     * @throws Exception
     */
    public function listRecommendations($request)
    {
        if (!($request instanceof ListRecommendationsRequest)) {
            $request = new ListRecommendationsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendations';
        $httpResponse = $this->_invoke($parameters);

        $response = ListRecommendationsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListRecommendationsRequest to name value pairs
     */
    private function _convertListRecommendations($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListRecommendations';
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] =  $request->getMarketplaceId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] =  $request->getMWSAuthToken();
        }
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] =  $request->getSellerId();
        }
        if ($request->isSetRecommendationCategory()) {
            $parameters['RecommendationCategory'] =  $request->getRecommendationCategory();
        }
        if ($request->isSetCategoryQueryList()) {
            $parameters['CategoryQueryList'] =  $request->getCategoryQueryList();
        }

        return $parameters;
    }

    /**
     * List Recommendations By Next Token
     * Retrieving recommendation by next token.
     *
     * @param mixed $request array of parameters for ListRecommendationsByNextToken request or ListRecommendationsByNextToken object itself
     * @see ListRecommendationsByNextTokenRequest
     * @return ListRecommendationsByNextTokenResponse
     *
     * @throws Exception
     */
    public function listRecommendationsByNextToken($request)
    {
        if (!($request instanceof ListRecommendationsByNextTokenRequest)) {
            $request = new ListRecommendationsByNextTokenRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListRecommendationsByNextToken';
        $httpResponse = $this->_invoke($parameters);

        $response = ListRecommendationsByNextTokenResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }

    /**
     * Convert ListRecommendationsByNextTokenRequest to name value pairs
     */
    private function _convertListRecommendationsByNextToken($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListRecommendationsByNextToken';
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
     * @throws Exception
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

   /**
    * Collapse multiple whitespace characters into a single ' ' character.
    * @param $s
    * @return string
    */
    private function collapseWhitespace($s)
    {
        return preg_replace('/ {2,}|\s/', ' ', $s);
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\//', '\\/', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);

        return $quotedString;
    }

    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);

        return $quotedString;
    }

    // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                throw new Exception(
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
        } catch (Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
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

        return new Exception($exProps);
    }

    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
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
        foreach($allHeaders as $name => $val) {
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
            throw new Exception($exProps);
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
            throw new Exception($exProps);
        }

        return array(
                'Status' => $responseStatus,
                'ResponseBody' => $body,
                'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }

}
