<?php

namespace Admin\Extend\AdminFailedJobs;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminFailedJobs\Extension\Config;
use Admin\Extend\AdminFailedJobs\Extension\Install;
use Admin\Extend\AdminFailedJobs\Extension\Navigator;
use Admin\Extend\AdminFailedJobs\Extension\Uninstall;
use Admin\Extend\AdminFailedJobs\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminFailedJobs
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static $name = "bfg/admin-failed-jobs";

    /**
     * Extension call slug
     * @var string
     */
    static $slug = "bfg_admin_failed_jobs";

    /**
     * Extension description
     * @var string
     */
    public static $description = "Laravel filed jobs viewer for bfg admin";

    /**
     * @var string
     */
    protected $navigator = Navigator::class;

    /**
     * @var string
     */
    protected $install = Install::class;

    /**
     * @var string
     */
    protected $uninstall = Uninstall::class;

    /**
     * @var string
     */
    protected $permissions = Permissions::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected $config = Config::class;
}

