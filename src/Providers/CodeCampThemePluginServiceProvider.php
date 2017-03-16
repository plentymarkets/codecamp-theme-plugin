<?php

namespace CodeCampThemePlugin\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use IO\Helper\TemplateContainer;

class CodeCampThemePluginServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 99;

    /**
     * Register the service provider.
     */
    public function register() {}

    public function boot(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.tpl.basket', function (TemplateContainer $templateContainer)
        {
            $templateContainer->setTemplate('CodeCampThemePlugin::content.CodeCampThemePluginBasket');

            return false;
        }, self::EVENT_LISTENER_PRIORITY);
    }
}