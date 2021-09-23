<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Detailed information about a report schedule.
 */
class ReportSchedule extends AbstractModel
{
    /**
     * The identifier for the report schedule. This identifier is unique only in
     * combination with a seller ID.
     *
     * @var string
     */
    public $reportScheduleId = null;

    /**
     * The report type.
     *
     * @var string
     */
    public $reportType = null;

    /**
     * A list of marketplace identifiers. The report document's contents will contain
     * data for all of the specified marketplaces, unless the report type indicates
     * otherwise.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * @var \Amz\Reports\Model\ReportOptions
     */
    public $reportOptions = null;

    /**
     * An ISO 8601 period value that indicates how often a report should be created.
     *
     * @var string
     */
    public $period = null;

    /**
     * The date and time when the schedule will create its next report, in ISO 8601
     * date time format.
     *
     * @var string
     */
    public $nextReportCreationTime = null;
}
