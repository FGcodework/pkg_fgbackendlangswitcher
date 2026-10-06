<?php

/**
 * @package     FG.Plugin
 * @subpackage  System.fgbackendlangswitcher
 * @author      Fero
 * @copyright   (C) 2026 Fero. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

\defined('_JEXEC') or die;

use FG\Plugin\System\Fgbackendlangswitcher\Extension\Fgbackendlangswitcher;
use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;

return new class () implements ServiceProviderInterface {
    /**
     * @param   Container  $container  The DI container.
     *
     * @return  void
     */
    public function register(Container $container): void
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {
                $plugin = new Fgbackendlangswitcher(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('system', 'fgbackendlangswitcher')
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};
