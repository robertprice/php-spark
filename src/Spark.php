<?php

// Idea from https://github.com/joliv/spark

class Spark {
    static public function line($data) {
        $steps = array('▁', '▂', '▃', '▄', '▅', '▆', '▇', '█');

        if (count($data) === 0) {
            return "";
        }

        $min = min($data);
        $max = max($data);
        $range = abs($max - $min);

        return array_reduce($data, function($carry, $item) use ($min, $range, $steps) {
            $pos = (int)round((($item - $min) / $range) * 7);
            return $carry . $steps[$pos];
        }, '');
    }
}
