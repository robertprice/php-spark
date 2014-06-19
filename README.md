php-spark
=========

Sparklines for PHP.

Sparklines are simple single line bar graphs.

Overview
--------

The Spark::line static method takes an array of numbers, either integers or floats, and will return the sparkline as a string.

Example
-------

A simple incremental line.

    require_once('lib/Spark.php');

    echo Spark::line(array(1, 2, 3, 4, 5, 6, 7, 8)) . "\n";

    > ▁▂▃▄▅▆▇█

Plot a cosine wave.

    $cos = array();
    for($i=0; $i <= 360; $i=$i+20) {
        $cos[] = cos($i * M_PI / 180);
    }
    echo Spark::line($cos) . "\n";

    > ██▇▆▅▄▃▂▁▁▁▂▃▄▅▆▇██

Test
----

There are some simple unit tests, and these can also be used as examples.

    phpunit --bootstrap src/Spark.php tests/SparkTest.php

Credits
-------

* Written by [Robert Price](http://www.robertprice.co.uk)
* Inspired by [go-spark](https://github.com/joliv/spark)
