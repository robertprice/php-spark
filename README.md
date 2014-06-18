php-spark
=========

Sparklines for PHP.

Sparklines are simple single line bar graphs.

Overview
--------

The Spark::line static method takes an array of positive numbers, either integers or floats, and will return the sparkline as a string.

Example
-------

    require_once('lib/Spark.php');

    echo Spark::line(array(1, 2, 3, 4, 5, 6, 7, 8)) . "\n";

This will return ▁▂▃▄▅▆▇█

Test
----
    phpunit --bootstrap src/Spark.php tests/SparkTest.php

Credits
-------

Written by Robert Price
Inspired by https://github.com/joliv/spark