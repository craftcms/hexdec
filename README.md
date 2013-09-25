# Hexdec plugin for Craft

Adds a new `hexdec` filter to Craft, which will replace a hecidecimal value with a decimal one.

It is a wrapper for PHP’s [hexdec()](http://php.net/manual/en/function.hexdec.php) function.

    {% set r = entry.colorField | slice(1, 2) | hexdec %}
    {% set g = entry.colorField | slice(3, 2) | hexdec %}
    {% set b = entry.colorField | slice(5, 2) | hexdec %}
