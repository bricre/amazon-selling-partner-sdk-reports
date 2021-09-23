<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the getReport operation.
 */
class GetReportResponse extends AbstractModel
{
    /**
     * The payload for the getReport operation.
     *
     * @var \Amz\Reports\Model\Report
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
