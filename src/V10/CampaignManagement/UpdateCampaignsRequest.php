<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaign to update.
         * @var integer
         */
        public $AccountId;

        /**
         * An array that can contain a maximum of 100 Campaign objects to update.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
