<?php

/**
 * @package     FG.Module
 * @subpackage  mod_fgbackendlangswitcher
 * @author      Fero
 * @copyright   (C) 2026 Fero. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Extension\Service\Provider\HelperFactory;
use Joomla\CMS\Extension\Service\Provider\Module;
use Joomla\CMS\Extension\Service\Provider\ModuleDispatcherFactory;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class () implements ServiceProviderInterface {
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     */
    public function register(Container $container): void
    {
        $container->registerServiceProvider(new ModuleDispatcherFactory('\\FG\\Module\\Fgbackendlangswitcher'));
        $container->registerServiceProvider(new HelperFactory('\\FG\\Module\\Fgbackendlangswitcher\\Administrator\\Helper'));
        $container->registerServiceProvider(new Module());
    }
};
