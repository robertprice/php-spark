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

        return array_reduce($data, function($carry, $item) use ($min, $max, $steps) {
            $pos = (int)round((($item - $min) / $max) * 8);
            return $carry . $steps[$pos];
        }, '');
    }
}

