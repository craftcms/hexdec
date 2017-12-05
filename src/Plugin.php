<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   MIT
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

        if (Craft::$app->getRequest()->getIsSiteRequest()) {
            // Add in our Twig extension
            Craft::$app->getView()->registerTwigExtension(new TwigExtension());
        }
    }
}
