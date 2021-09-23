<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the createReportSchedule operation.
 */
class CreateReportScheduleResponse extends AbstractModel
{
    /**
     * The payload for the createReportSchedule operation.
     *
     * @var \Amz\Reports\Model\CreateReportScheduleResult
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
