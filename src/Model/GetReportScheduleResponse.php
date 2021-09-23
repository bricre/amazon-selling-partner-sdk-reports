<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the getReportSchedule operation.
 */
class GetReportScheduleResponse extends AbstractModel
{
    /**
     * The payload for the getReportSchedule operation.
     *
     * @var \Amz\Reports\Model\ReportSchedule
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
