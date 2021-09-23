<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class MoneyType extends AbstractModel
{
    /**
     * The currency code in ISO 4217 format.
     *
     * @var string
     */
    public $currencyCode = null;

    /**
     * The monetary value.
     *
     * @var float
     */
    public $amount = null;
}
