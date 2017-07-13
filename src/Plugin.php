<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\hexdec;

use Craft;

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
        Craft::$app->getView()->getTwig()->addExtension(new TwigExtension());
    }
}
