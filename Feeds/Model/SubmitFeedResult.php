<?php

namespace Amazon\MWS\Feeds\Model;

use Amazon\MWS\Feeds\Model;

/**
 * SubmitFeedResult
 *
 * Properties:
 * <ul>
 * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
 * </ul>
 */
class SubmitFeedResult extends Model
{
    /**
     * Construct new SubmitFeedResult
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>FeedSubmissionInfo: FeedSubmissionInfo</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'FeedSubmissionInfo' => array('FieldValue' => null, 'FieldType' => 'FeedSubmissionInfo'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the FeedSubmissionInfo.
     *
     * @return FeedSubmissionInfo FeedSubmissionInfo
     */
    public function getFeedSubmissionInfo()
    {
        return $this->fields['FeedSubmissionInfo']['FieldValue'];
    }

    /**
     * Sets the value of the FeedSubmissionInfo.
     *
     * @param FeedSubmissionInfo FeedSubmissionInfo
     * @return void
     */
    public function setFeedSubmissionInfo($value)
    {
        $this->fields['FeedSubmissionInfo']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the FeedSubmissionInfo  and returns this instance
     *
     * @param FeedSubmissionInfo $value FeedSubmissionInfo
     * @return SubmitFeedResult instance
     */
    public function withFeedSubmissionInfo($value)
    {
        $this->setFeedSubmissionInfo($value);
        return $this;
    }


    /**
     * Checks if FeedSubmissionInfo  is set
     *
     * @return bool true if FeedSubmissionInfo property is set
     */
    public function isSetFeedSubmissionInfo()
    {
        return !is_null($this->fields['FeedSubmissionInfo']['FieldValue']);

    }
}
