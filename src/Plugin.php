<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\hexdec;

use Craft;
use craft\hexdec\TwigExtension;

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
        Craft::$app->view->twig->addExtension(new TwigExtension());
    }
}
