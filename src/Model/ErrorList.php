<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of error responses returned when a request is unsuccessful.
 */
class ErrorList extends AbstractModel
{
    /**
     * @var \Amz\FbaSmallAndLight\Model\Error[]
     */
    public $errors = null;
}
