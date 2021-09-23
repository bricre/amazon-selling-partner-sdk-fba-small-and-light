<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Fee details for a specific fee.
 */
class FeeLineItem extends AbstractModel
{
    /**
     * The type of fee charged to the seller.
     *
     * @var string
     */
    public $feeType = null;

    /**
     * Amount charged to the seller for the specific fee type.
     *
     * @var \Amz\FbaSmallAndLight\Model\MoneyType
     */
    public $feeCharge = null;
}
