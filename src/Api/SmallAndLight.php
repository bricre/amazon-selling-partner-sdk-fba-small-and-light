<?php

namespace Amz\FbaSmallAndLight\Api;

use Amz\FbaSmallAndLight\Model\ErrorList as ErrorList;
use Amz\FbaSmallAndLight\Model\SmallAndLightEligibility as SmallAndLightEligibility;
use Amz\FbaSmallAndLight\Model\SmallAndLightEnrollment as SmallAndLightEnrollment;
use Amz\FbaSmallAndLight\Model\SmallAndLightFeePreviewRequest as SmallAndLightFeePreviewRequest;
use Amz\FbaSmallAndLight\Model\SmallAndLightFeePreviews as SmallAndLightFeePreviews;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SmallAndLight extends AbstractAPI
{
    /**
     * Returns the Small and Light enrollment status for the item indicated by the
     * specified seller SKU in the specified marketplace.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerSKU The seller SKU that identifies the item
     * @param array $queries options:
     *                       'marketplaceIds'		The marketplace for which the enrollment status is retrieved.
     *                       Note: Accepts a single marketplace only.
     *
     * @return SmallAndLightEnrollment|ErrorList
     */
    public function getSmallAndLightEnrollmentBySellerSKU($sellerSKU, array $queries = [])
    {
        return $this->client->request('getSmallAndLightEnrollmentBySellerSKU', 'GET', "fba/smallAndLight/v1/enrollments/{$sellerSKU}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Enrolls the item indicated by the specified seller SKU in the Small and Light
     * program in the specified marketplace. If the item is not eligible, the
     * ineligibility reasons are returned.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerSKU The seller SKU that identifies the item
     * @param array $queries options:
     *                       'marketplaceIds'		The marketplace in which to enroll the item. Note: Accepts a
     *                       single marketplace only.
     *
     * @return SmallAndLightEnrollment|ErrorList
     */
    public function putSmallAndLightEnrollmentBySellerSKU($sellerSKU, array $queries = [])
    {
        return $this->client->request('putSmallAndLightEnrollmentBySellerSKU', 'PUT', "fba/smallAndLight/v1/enrollments/{$sellerSKU}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Removes the item indicated by the specified seller SKU from the Small and Light
     * program in the specified marketplace. If the item is not eligible for
     * disenrollment, the ineligibility reasons are returned.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 5 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerSKU The seller SKU that identifies the item
     * @param array $queries options:
     *                       'marketplaceIds'		The marketplace in which to remove the item from the Small and
     *                       Light program. Note: Accepts a single marketplace only.
     *
     * @return ErrorList
     */
    public function deleteSmallAndLightEnrollmentBySellerSKU($sellerSKU, array $queries = []): ErrorList
    {
        return $this->client->request('deleteSmallAndLightEnrollmentBySellerSKU', 'DELETE', "fba/smallAndLight/v1/enrollments/{$sellerSKU}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the Small and Light program eligibility status of the item indicated by
     * the specified seller SKU in the specified marketplace. If the item is not
     * eligible, the ineligibility reasons are returned.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 2 | 10 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $sellerSKU The seller SKU that identifies the item
     * @param array $queries options:
     *                       'marketplaceIds'		The marketplace for which the eligibility status is retrieved.
     *                       NOTE: Accepts a single marketplace only.
     *
     * @return SmallAndLightEligibility|ErrorList
     */
    public function getSmallAndLightEligibilityBySellerSKU($sellerSKU, array $queries = [])
    {
        return $this->client->request('getSmallAndLightEligibilityBySellerSKU', 'GET', "fba/smallAndLight/v1/eligibilities/{$sellerSKU}",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns the Small and Light fee estimates for the specified items. You must
     * include a marketplaceId parameter to retrieve the proper fee estimates for items
     * to be sold in that marketplace. The ordering of items in the response will
     * mirror the order of the items in the request. Duplicate ASIN/price combinations
     * are removed.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 3 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param SmallAndLightFeePreviewRequest $Model Returns the Small and Light fee
     *                                              estimates for the specified items. You must include a marketplaceId parameter to
     *                                              retrieve the proper fee estimates for items to be sold in that marketplace. The
     *                                              ordering of items in the response will mirror the order of the items in the
     *                                              request. Duplicate ASIN/price combinations are removed.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 3 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return SmallAndLightFeePreviews|ErrorList
     */
    public function getSmallAndLightFeePreview(SmallAndLightFeePreviewRequest $Model)
    {
        return $this->client->request('getSmallAndLightFeePreview', 'POST', 'fba/smallAndLight/v1/feePreviews',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
