<?php
namespace Craft;

/**
 * Hexdec plugin class
 */
class HexdecPlugin extends BasePlugin
{
	public function getName()
	{
	    return 'Hexdec';
	}

	public function getVersion()
	{
	    return '1.0';
	}

	public function getDeveloper()
	{
	    return 'Pixel & Tonic';
	}

	public function getDeveloperUrl()
	{
	    return 'http://pixelandtonic.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.anchors.twigextensions.HexdecTwigExtension');
		return new HexdecTwigExtension();
	}
}
