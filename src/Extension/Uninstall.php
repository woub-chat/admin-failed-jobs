<?php

namespace Admin\Extend\AdminFailedJobs\Extension;

use Admin\Core\UnInstallExtensionProvider;
use Admin\Interfaces\ActionWorkExtensionInterface;

/**
 * Class Navigator
 * @package Admin\Extend\AdminFailedJobs\Extension
 */
class Uninstall extends UnInstallExtensionProvider implements ActionWorkExtensionInterface {

    /**
     * @return void
     */
    public function handle(): void
    {

    }
}
