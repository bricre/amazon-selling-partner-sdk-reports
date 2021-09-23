<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the cancelReportSchedule operation.
 */
class CancelReportScheduleResponse extends AbstractModel
{
    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
