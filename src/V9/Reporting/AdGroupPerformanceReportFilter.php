<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the criteria to use to filter the ad group performance report data.
     * @link http://msdn.microsoft.com/en-us/library/bb671729(v=msads.90).aspx AdGroupPerformanceReportFilter Data Object
     * 
     * @uses AccountStatusReportFilter
     * @uses AdDistributionReportFilter
     * @uses CampaignStatusReportFilter
     * @uses DeviceOSReportFilter
     * @uses DeviceTypeReportFilter
     * @uses AdGroupStatusReportFilter
     * @used-by AdGroupPerformanceReportRequest
     */
    final class AdGroupPerformanceReportFilter
    {
        /**
         * The report will include data for only the account status.
         * @var AccountStatusReportFilter
         */
        public $AccountStatus;

        /**
         * The report will include data for only the specified distribution medium.
         * @var AdDistributionReportFilter
         */
        public $AdDistribution;

        /**
         * The report will include data for only the campaign status.
         * @var CampaignStatusReportFilter
         */
        public $CampaignStatus;

        /**
         * The report will include data where the ad is displayed on the specified device operating systems.
         * @var DeviceOSReportFilter
         */
        public $DeviceOS;

        /**
         * The report will include data where the ad is displayed on the specified device types.
         * @var DeviceTypeReportFilter
         */
        public $DeviceType;

        /**
         * The report will include data for only websites that used the specified languages.
         * @var string[]
         */
        public $LanguageCode;

        /**
         * The report will include data for only the specified ad group status values.
         * @var AdGroupStatusReportFilter
         */
        public $Status;
    }

}
