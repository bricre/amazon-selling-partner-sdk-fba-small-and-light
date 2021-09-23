<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The Small and Light eligibility status of the item indicated by the specified
 * seller SKU.
 */
class SmallAndLightEligibility extends AbstractModel
{
    /**
     * @var \Amz\FbaSmallAndLight\Model\MarketplaceId
     */
    public $marketplaceId = null;

    /**
     * @var \Amz\FbaSmallAndLight\Model\SellerSKU
     */
    public $sellerSKU = null;

    /**
     * @var \Amz\FbaSmallAndLight\Model\SmallAndLightEligibilityStatus
     */
    public $status = null;
}
