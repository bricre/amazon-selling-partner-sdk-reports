<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateReportResult extends AbstractModel
{
    /**
     * The identifier for the report. This identifier is unique only in combination
     * with a seller ID.
     *
     * @var string
     */
    public $reportId = null;
}
