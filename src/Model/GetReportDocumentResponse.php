<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema.
 */
class GetReportDocumentResponse extends AbstractModel
{
    /**
     * @var \Amz\Reports\Model\ReportDocument
     */
    public $payload = null;

    /**
     * @var \Amz\Reports\Model\ErrorList
     */
    public $errors = null;
}
