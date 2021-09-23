<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The fee estimate for a specific item.
 */
class FeePreview extends AbstractModel
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

    /**
     * A list of the Small and Light fees for the item.
     *
     * @var \Amz\FbaSmallAndLight\Model\FeeLineItem[]
     */
    public $feeBreakdown = null;

    /**
     * The total fees charged if the item participated in the Small and Light program.
     *
     * @var \Amz\FbaSmallAndLight\Model\MoneyType
     */
    public $totalFees = null;

    /**
     * One or more unexpected errors occurred during the getSmallAndLightFeePreview
     * operation.
     *
     * @var \Amz\FbaSmallAndLight\Model\Error[]
     */
    public $errors = null;
}
