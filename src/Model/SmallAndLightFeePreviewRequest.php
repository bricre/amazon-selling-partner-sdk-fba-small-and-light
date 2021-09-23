<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Request schema for submitting items for which to retrieve fee estimates.
 */
class SmallAndLightFeePreviewRequest extends AbstractModel
{
    /**
     * @var \Amz\FbaSmallAndLight\Model\MarketplaceId
     */
    public $marketplaceId = null;

    /**
     * A list of items for which to retrieve fee estimates (limit: 25).
     *
     * @var \Amz\FbaSmallAndLight\Model\Item[]
     */
    public $items = null;
}
