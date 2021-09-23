<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the getReports operation.
 */
class GetReportsResponse extends AbstractModel
{
    /**
     * The payload for the getReports operation.
     *
     * @var \Amz\Reports\Model\ReportList
     */
    public $payload = null;

    /**
     * Returned when the number of results exceeds pageSize. To get the next page of
     * results, call getReports with this token as the only parameter.
     *
     * @var string
     */
    public $nextToken = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
