<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more ads in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
