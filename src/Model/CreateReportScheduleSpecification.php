<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateReportScheduleSpecification extends AbstractModel
{
    /**
     * The report type.
     *
     * @var string
     */
    public $reportType = null;

    /**
     * A list of marketplace identifiers for the report schedule.
     *
     * @var string[]
     */
    public $marketplaceIds = null;

    /**
     * @var \Amz\Reports\Model\ReportOptions
     */
    public $reportOptions = null;

    /**
     * One of a set of predefined ISO 8601 periods that specifies how often a report
     * should be created.
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
