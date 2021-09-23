<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The Small and Light enrollment status of the item indicated by the specified
 * seller SKU.
 */
class SmallAndLightEnrollment extends AbstractModel
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
     * @var \Amz\FbaSmallAndLight\Model\SmallAndLightEnrollmentStatus
     */
    public $status = null;
}
