<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
