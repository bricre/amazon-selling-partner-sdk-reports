<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response for the cancelReport operation.
 */
class CancelReportResponse extends AbstractModel
{
    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
