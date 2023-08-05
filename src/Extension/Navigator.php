<?php

namespace Admin\Extend\AdminFailedJobs\Extension;

use Admin\Core\NavigatorExtensionProvider;
use Admin\Extend\AdminFailedJobs\FailedJobsController;
use Admin\Extend\AdminFailedJobs\Models\FailedJobs;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminFailedJobs\Extension
 */
class Navigator extends NavigatorExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->item('Failed jobs')
            ->resource('failed_jobs', FailedJobsController::class)
            ->icon_hard_hat()
            ->badge_danger(FailedJobs::class, ['id' => 'not null']);
    }
}
