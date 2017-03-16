<?php

namespace CodeCampThemePlugin\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;
use IO\Helper\TemplateContainer;

class CodeCampThemePluginServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 1;

    /**
     * Register the service provider.
     */
    public function register() {}

    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('tpl.basket', function (TemplateContainer $templateContainer)
        {
            $templateContainer->setTemplate('CodeCampThemePlugin::content.CodeCampThemePluginBasket');
        }, self::EVENT_LISTENER_PRIORITY);
    }
}