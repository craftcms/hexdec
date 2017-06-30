<?php
namespace craft\hexdec\twigextensions;



/**
 * Hexdec Twig Extension
 */
class HexdecTwigExtension extends \Twig_Extension
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
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('hexdec', 'hexdec'),
        );
    }





}
