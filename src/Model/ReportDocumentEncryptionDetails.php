<?php

namespace Amz\Reports\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Encryption details required for decryption of a report document's contents.
 */
class ReportDocumentEncryptionDetails extends AbstractModel
{
    /**
     * The encryption standard required to decrypt the document contents.
     *
     * @var string
     */
    public $standard = null;

    /**
     * The vector to decrypt the document contents using Cipher Block Chaining (CBC).
     *
     * @var string
     */
    public $initializationVector = null;

    /**
     * The encryption key used to decrypt the document contents.
     *
     * @var string
     */
    public $key = null;
}
