<?php
namespace craft\hexdec;

use Craft;
use craft\hexdec\twigextensions\HexdecTwigExtension;

/**
 * Hexdec plugin class
 */

class Plugin extends \craft\base\Plugin
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // Add in our Twig extensions
        Craft::$app->view->twig->addExtension(new HexdecTwigExtension());

    }
}
