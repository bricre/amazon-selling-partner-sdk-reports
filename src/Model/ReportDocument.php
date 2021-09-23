<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ReportDocument extends AbstractModel
{
    /**
     * The identifier for the report document. This identifier is unique only in
     * combination with a seller ID.
     *
     * @var string
     */
    public $reportDocumentId = null;

    /**
     * A presigned URL for the report document. This URL expires after 5 minutes.
     *
     * @var string
     */
    public $url = null;

    /**
     * @var \Amz\Reports\Model\ReportDocumentEncryptionDetails
     */
    public $encryptionDetails = null;

    /**
     * If present, the report document contents have been compressed with the provided
     * algorithm.
     *
     * @var string
     */
    public $compressionAlgorithm = null;
}
