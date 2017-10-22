<?php

namespace Amazon\MWS\FBAInbound\Model;
/**
 *  @see FBAInboundServiceMWS_Model
 */

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * TransportDocument
 *
 * Properties:
 * <ul>
 *
 * <li>PdfDocument: string</li>
 * <li>Checksum: string</li>
 *
 * </ul>
 */

 class TransportDocument extends FBAInboundServiceMWS_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'PdfDocument' => array('FieldValue' => null, 'FieldType' => 'string'),
    'Checksum' => array('FieldValue' => null, 'FieldType' => 'string'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the PdfDocument property.
     *
     * @return String PdfDocument.
     */
    public function getPdfDocument()
    {
        return $this->_fields['PdfDocument']['FieldValue'];
    }

    /**
     * Set the value of the PdfDocument property.
     *
     * @param string pdfDocument
     * @return this instance
     */
    public function setPdfDocument($value)
    {
        $this->_fields['PdfDocument']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PdfDocument is set.
     *
     * @return true if PdfDocument is set.
     */
    public function isSetPdfDocument()
    {
                return !is_null($this->_fields['PdfDocument']['FieldValue']);
            }

    /**
     * Set the value of PdfDocument, return this.
     *
     * @param pdfDocument
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPdfDocument($value)
    {
        $this->setPdfDocument($value);
        return $this;
    }

    /**
     * Get the value of the Checksum property.
     *
     * @return String Checksum.
     */
    public function getChecksum()
    {
        return $this->_fields['Checksum']['FieldValue'];
    }

    /**
     * Set the value of the Checksum property.
     *
     * @param string checksum
     * @return this instance
     */
    public function setChecksum($value)
    {
        $this->_fields['Checksum']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Checksum is set.
     *
     * @return true if Checksum is set.
     */
    public function isSetChecksum()
    {
                return !is_null($this->_fields['Checksum']['FieldValue']);
            }

    /**
     * Set the value of Checksum, return this.
     *
     * @param checksum
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withChecksum($value)
    {
        $this->setChecksum($value);
        return $this;
    }

}
