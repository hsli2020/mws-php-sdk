<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * GetFulfillmentPreviewResult
 *
 * Properties:
 * <ul>
 * <li>FulfillmentPreviews: FulfillmentPreviewList</li>
 * </ul>
 */
class GetFulfillmentPreviewResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'FulfillmentPreviews' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\FulfillmentPreviewList'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the FulfillmentPreviews property.
     *
     * @return FulfillmentPreviewList FulfillmentPreviews.
     */
    public function getFulfillmentPreviews()
    {
        return $this->_fields['FulfillmentPreviews']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentPreviews property.
     *
     * @param FulfillmentPreviewList fulfillmentPreviews
     * @return this instance
     */
    public function setFulfillmentPreviews($value)
    {
        $this->_fields['FulfillmentPreviews']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FulfillmentPreviews is set.
     *
     * @return true if FulfillmentPreviews is set.
     */
    public function isSetFulfillmentPreviews()
    {
        return !is_null($this->_fields['FulfillmentPreviews']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentPreviews, return this.
     *
     * @param fulfillmentPreviews
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFulfillmentPreviews($value)
    {
        $this->setFulfillmentPreviews($value);
        return $this;
    }
}
