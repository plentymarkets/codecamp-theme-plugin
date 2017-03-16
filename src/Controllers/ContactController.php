<?php //strict

namespace CodeCampThemePlugin\Controllers;

use IO\Controllers\LayoutController;

/**
 * Class ContactController
 * @package CodeCampThemePlugin\Controllers
 */
class ContactController extends LayoutController
{
    /**
     * Prepare and render the data for the contact template
     * @return string
     */
    public function showContact():string
    {
        return $this->renderTemplate(
            "tpl.contact",
            [
                "contact" => ""
            ]
        );
    }
}
