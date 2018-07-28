# Hexdec for Craft CMS

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

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “Hexdec”. Then click on the “Install” button in its modal window.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require craftcms/hexdec

# tell Craft to install the plugin
./craft install/plugin hexdec
```
