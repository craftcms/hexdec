<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\hexdec;

/**
 * Hexdec Twig Extension
 */
class TwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Hexdec';
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return [] An array of filters
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('hexdec', 'hexdec'),
        ];
    }
}
