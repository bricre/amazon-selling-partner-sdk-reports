<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Report extends AbstractModel
{
    /**
     * A list of marketplace identifiers for the report.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * The identifier for the report. This identifier is unique only in combination
     * with a seller ID.
     *
     * @var string
     */
    public $reportId = null;

    /**
     * The report type.
     *
     * @var string
     */
    public $reportType = null;

    /**
     * The start of a date and time range used for selecting the data to report.
     *
     * @var string
     */
    public $dataStartTime = null;

    /**
     * The end of a date and time range used for selecting the data to report.
     *
     * @var string
     */
    public $dataEndTime = null;

    /**
     * The identifier of the report schedule that created this report (if any). This
     * identifier is unique only in combination with a seller ID.
     *
     * @var string
     */
    public $reportScheduleId = null;

    /**
     * The date and time when the report was created.
     *
     * @var string
     */
    public $createdTime = null;

    /**
     * The processing status of the report.
     *
     * @var string
     */
    public $processingStatus = null;

    /**
     * The date and time when the report processing started, in ISO 8601 date time
     * format.
     *
     * @var string
     */
    public $processingStartTime = null;

    /**
     * The date and time when the report processing completed, in ISO 8601 date time
     * format.
     *
     * @var string
     */
    public $processingEndTime = null;

    /**
     * The identifier for the report document. Pass this into the getReportDocument
     * operation to get the information you will need to retrieve the report document's
     * contents.
     *
     * @var string
     */
    public $reportDocumentId = null;
}
