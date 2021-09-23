<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Identifies an item in the given marketplace. SellerSKU is qualified by the
 * seller's SellerId, which is included with every operation that you submit.
 */
class SellerSKU extends AbstractModel
{
    protected $isRawObject = true;
}
