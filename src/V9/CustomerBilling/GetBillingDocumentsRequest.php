<?php
// Generated on 12/5/2016 5:47:08 AM

namespace Microsoft\BingAds\V9\CustomerBilling;

{
    /**
     * Gets the specified billing documents.
     * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocuments Request Object
     * 
     * @uses DataType
     * @used-by BingAdsCustomerBillingService::GetBillingDocuments
     */
    final class GetBillingDocumentsRequest
    {
        /**
         * A list of identifiers of the billing documents to get.
         * @var integer[]
         */
        public $DocumentIds;

        /**
         * The format to use to generate the billing document.
         * @var DataType
         */
        public $Type;
    }
}
