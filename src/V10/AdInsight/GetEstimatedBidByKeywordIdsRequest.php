<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219291(v=msads.100).aspx GetEstimatedBidByKeywordIds Request Object
     * 
     * @uses TargetAdPosition
     * @used-by BingAdsAdInsightService::GetEstimatedBidByKeywordIds
     */
    final class GetEstimatedBidByKeywordIdsRequest
    {
        /**
         * An array of identifiers of the keywords for which you want to get the suggested bid values that could have resulted in your ad appearing in the targeted position in the search results.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * The position in which you want your ads to appear in the search results.
         * @var TargetAdPosition
         */
        public $TargetPositionForAds;
    }
}
