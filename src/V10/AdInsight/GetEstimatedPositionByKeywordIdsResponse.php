<?php
// Generated on 4/4/2017 5:50:25 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days.
     * @link http://msdn.microsoft.com/en-us/library/mt219300(v=msads.100).aspx GetEstimatedPositionByKeywordIds Response Object
     * 
     * @uses KeywordIdEstimatedPosition
     * @used-by BingAdsAdInsightService::GetEstimatedPositionByKeywordIds
     */
    final class GetEstimatedPositionByKeywordIdsResponse
    {
        /**
         * A list of KeywordIdEstimatedPosition data objects.
         * @var KeywordIdEstimatedPosition[]
         */
        public $KeywordEstimatedPositions;
    }
}
