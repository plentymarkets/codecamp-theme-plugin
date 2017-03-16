<?php

namespace CodeCampThemePlugin\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use IO\Helper\TemplateContainer;
use IO\Extensions\Functions\Partial;
use CodeCampThemePlugin\Providers\CodeCampThemePluginRouteServiceProvider;
use IO\Helper\ComponentContainer;

class CodeCampThemePluginServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 99;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->getApplication()->register(CodeCampThemePluginRouteServiceProvider::class);
    }

    public function boot(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.tpl.basket', function (TemplateContainer $templateContainer)
        {
            $templateContainer->setTemplate('CodeCampThemePlugin::content.CodeCampThemePluginBasket');

            return false;
        }, self::EVENT_LISTENER_PRIORITY);

        $eventDispatcher->listen('IO.tpl.contact', function (TemplateContainer $templateContainer)
        {
            $templateContainer->setTemplate('CodeCampThemePlugin::content.CodeCampThemePluginContact');

            return false;
        }, self::EVENT_LISTENER_PRIORITY);

        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            $partial->set('header', 'CodeCampThemePlugin::PageDesign.Partials.Header');
            $partial->set('footer', 'CodeCampThemePlugin::PageDesign.Partials.Footer');
        }, self::EVENT_LISTENER_PRIORITY);

        $eventDispatcher->listen('IO.Component.Import', function(ComponentContainer $componentContainer)
        {
            if($componentContainer->getOriginComponentTemplate() == 'Ceres::Customer.Components.AddressInputGroup')
            {
                $componentContainer->setNewComponentTemplate('TwigPath');
            }
        }, self::EVENT_LISTENER_PRIORITY);
    }
}