<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt219287(v=msads.100).aspx GetBidOpportunities Request Object
     * 
     * @uses BidOpportunityType
     * @used-by BingAdsAdInsightService::GetBidOpportunities
     */
    final class GetBidOpportunitiesRequest
    {
        /**
         * The identifier of the ad group for which you want to determine keyword bid opportunities.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign that owns the ad group specified in the AdGroupId element.
         * @var integer
         */
        public $CampaignId;

        /**
         * Determines the type or types of bid opportunities corresponding to your ad position goals.
         * @var BidOpportunityType
         */
        public $OpportunityType;
    }
}
