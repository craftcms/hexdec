<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license MIT
 */

namespace craft\hexdec;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Hexdec Twig Extension
 */
class TwigExtension extends AbstractExtension
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
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new TwigFilter('hexdec', 'hexdec'),
        ];
    }
}
