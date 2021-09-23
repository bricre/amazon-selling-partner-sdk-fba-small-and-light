<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item to be sold.
 */
class Item extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) value used to identify the
     * item.
     *
     * @var string
     */
    public $asin = null;

    /**
     * The price that the seller plans to charge for the item.
     *
     * @var \Amz\FbaSmallAndLight\Model\MoneyType
     */
    public $price = null;
}
