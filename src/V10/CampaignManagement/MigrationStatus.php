<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible migration status values.
     * @link http://msdn.microsoft.com/en-us/library/mt706123(v=msads.100).aspx MigrationStatus Value Set
     * 
     * @used-by MigrationStatusInfo
     */
    final class MigrationStatus
    {
        /** None of the accounts for the customer are in the queue for the corresponding migration type. */
        const NotInPilot = 'NotInPilot';

        /** The account is in the queue for the corresponding migration type, but the migration has not yet begun. */
        const NotStarted = 'NotStarted';

        /** The migration is in progress. */
        const InProgress = 'InProgress';

        /** The migration is complete, or migration is not needed because the account was created after all of the customer's other accounts were added to the pilot queue for the corresponding migration type. */
        const Completed = 'Completed';
    }

}
