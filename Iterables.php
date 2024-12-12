<?php 
    
    ###An iterable is any value which can be looped through with a foreach() loop.

    ###The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.

    function print_iteratble(iterable $myiterable) {
        foreach ($myiterable as $value) {
            echo $value;
        }   
    }
    $arr = get_iterable_list();
    print_iteratble($arr);


    function get_iterable_list():iterable{
        return ["a", "b", "c"];
    }
?>