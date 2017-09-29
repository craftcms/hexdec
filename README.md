Hexdec for Craft CMS
====================

This plugin adds a new `|hexdec` Twig filter to Craft, which will convert a hexadecimal value to a decimal.

It is a wrapper for PHP’s [hexdec()](http://php.net/manual/en/function.hexdec.php) function.

```twig
{% set r = entry.colorField[1:2]|hexdec %}
{% set g = entry.colorField[3:2]|hexdec %}
{% set b = entry.colorField[5:2]|hexdec %}
```

## Requirements

This plugin requires Craft CMS 3.0.0-beta.27 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require craftcms/hexdec

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Hexdec.
