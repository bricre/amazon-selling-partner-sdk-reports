<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateReportScheduleResult extends AbstractModel
{
    /**
     * The identifier for the report schedule. This identifier is unique only in
     * combination with a seller ID.
     *
     * @var string
     */
    public $reportScheduleId = null;
}
