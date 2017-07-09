<?php
namespace Craft;

/**
 * Hexdec plugin class
 */
class HexdecPlugin extends BasePlugin
{
	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Hexdec';
	}

	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '1.2.0';
	}

	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Pixel & Tonic';
	}

	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://pixelandtonic.com';
	}

	/**
	 * @return string
	 */
	public function getPluginUrl()
	{
		return 'https://github.com/craftcms/hexdec';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return $this->getPluginUrl().'/blob/v1/README.md';
	}

	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/craftcms/hexdec/v1/releases.json';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.hexdec.twigextensions.HexdecTwigExtension');
		return new HexdecTwigExtension();
	}
}
