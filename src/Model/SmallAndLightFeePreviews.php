<?php

namespace Amz\FbaSmallAndLight\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SmallAndLightFeePreviews extends AbstractModel
{
    /**
     * A list of fee estimates for the requested items. The order of the fee estimates
     * will follow the same order as the items in the request, with duplicates removed.
     *
     * @var \Amz\FbaSmallAndLight\Model\FeePreview[]
     */
    public $data = null;
}
