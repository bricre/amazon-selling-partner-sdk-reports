<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateReportSpecification extends AbstractModel
{
    /**
     * @var \Amz\Reports\Model\ReportOptions
     */
    public $reportOptions = null;

    /**
     * The report type.
     *
     * @var string
     */
    public $reportType = null;

    /**
     * The start of a date and time range, in ISO 8601 date time format, used for
     * selecting the data to report. The default is now. The value must be prior to or
     * equal to the current date and time. Not all report types make use of this.
     *
     * @var string
     */
    public $dataStartTime = null;

    /**
     * The end of a date and time range, in ISO 8601 date time format, used for
     * selecting the data to report. The default is now. The value must be prior to or
     * equal to the current date and time. Not all report types make use of this.
     *
     * @var string
     */
    public $dataEndTime = null;

    /**
     * A list of marketplace identifiers. The report document's contents will contain
     * data for all of the specified marketplaces, unless the report type indicates
     * otherwise.
     *
     * @var string[]
     */
    public $marketplaceIds = null;
}
