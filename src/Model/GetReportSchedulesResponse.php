<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the getReportSchedules operation.
 */
class GetReportSchedulesResponse extends AbstractModel
{
    /**
     * The payload for the getReportSchedules operation.
     *
     * @var \Amz\Reports\Model\ReportScheduleList
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
