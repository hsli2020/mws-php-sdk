<?php

namespace Amazon\MWS\Feeds\Model;

class ResponseHeaderMetadata 
{
    const REQUEST_ID = 'x-mws-request-id';
    const RESPONSE_CONTEXT = 'x-mws-response-context';
    const TIMESTAMP = 'x-mws-timestamp';

    private $metadata = array();

    public function __construct($requestId = null, $responseContext = null, $timestamp = null)
    {
        $this->metadata[self::REQUEST_ID] = $requestId;
        $this->metadata[self::RESPONSE_CONTEXT] = $responseContext;
        $this->metadata[self::TIMESTAMP] = $timestamp;
    }


    public function getRequestId()
    {
        return $this->metadata[self::REQUEST_ID];
    }

    public function getResponseContext()
    {
        return $this->metadata[self::RESPONSE_CONTEXT];
    }

    public function getTimestamp()
    {
        return $this->metadata[self::TIMESTAMP];
    }

    public function __toString()
    {
        return "RequestId: "       . $this->getRequestId() . 
             ", ResponseContext: " . $this->getResponseContext() . 
             ", Timestamp: "       . $this->getTimestamp();
    }
}

