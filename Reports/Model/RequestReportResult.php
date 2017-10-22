<?php

namespace Amazon\MWS\Reports;




/**
 * RequestReportResult
 *
 * Properties:
 * <ul>
 *
 * <li>ReportRequestInfo: ReportRequestInfo</li>
 *
 * </ul>
 */
class RequestReportResult extends MarketplaceWebService_Model
{


    /**
     * Construct new RequestReportResult
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>ReportRequestInfo: ReportRequestInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'ReportRequestInfo' => array('FieldValue' => null, 'FieldType' => 'ReportRequestInfo'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the ReportRequestInfo.
     *
     * @return ReportRequestInfo ReportRequestInfo
     */
    public function getReportRequestInfo()
    {
        return $this->fields['ReportRequestInfo']['FieldValue'];
    }

    /**
     * Sets the value of the ReportRequestInfo.
     *
     * @param ReportRequestInfo ReportRequestInfo
     * @return void
     */
    public function setReportRequestInfo($value)
    {
        $this->fields['ReportRequestInfo']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the ReportRequestInfo  and returns this instance
     *
     * @param ReportRequestInfo $value ReportRequestInfo
     * @return RequestReportResult instance
     */
    public function withReportRequestInfo($value)
    {
        $this->setReportRequestInfo($value);
        return $this;
    }


    /**
     * Checks if ReportRequestInfo  is set
     *
     * @return bool true if ReportRequestInfo property is set
     */
    public function isSetReportRequestInfo()
    {
        return !is_null($this->fields['ReportRequestInfo']['FieldValue']);

    }




}
