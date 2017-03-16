<?php //strict

namespace CodeCampThemePlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class CodeCampThemePluginRouteServiceProvider
 * @package CodeCampThemePlugin\Providers
 */
class CodeCampThemePluginRouteServiceProvider extends RouteServiceProvider
{
    public function register()
    {
    }

    /**
     * Define the map routes to templates
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('contact', 'CodeCampThemePlugin\Controllers\ContactController@showContact');
    }
}
