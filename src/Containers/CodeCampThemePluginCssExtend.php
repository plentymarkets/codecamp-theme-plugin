<?php

namespace CodeCampThemePlugin\Containers;

use Plenty\Plugin\Templates\Twig;

class CodeCampThemePluginCssExtend
{
    public function call(Twig $twig):string
    {
        return $twig->render('CodeCampThemePlugin::content.CodeCampThemePluginCssExtend');
    }
}