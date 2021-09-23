<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the createReport operation.
 */
class CreateReportResponse extends AbstractModel
{
    /**
     * The payload for the createReport operation.
     *
     * @var \Amz\Reports\Model\CreateReportResult
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
