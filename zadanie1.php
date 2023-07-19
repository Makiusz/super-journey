<?php

class pipeline{

    public function make(...$fun){
        return function($arg) use ($fun) {
            foreach($fun as $n){
                $arg = $n($arg);
            }
            return $arg;
        };
    }
}

## TEST ##

$obj = new pipeline();

$counting = $obj->make(
    function($var) { return $var * 3; }, 
    function($var) { return $var + 1; },
    function($var) { return $var / 2; });

echo $result = $counting(3);


