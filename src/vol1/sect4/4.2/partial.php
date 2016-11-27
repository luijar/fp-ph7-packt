#!/usr/local/bin/php7
<?php
/**
 * Volume 1 - Functional evaluation strategies - Video 4.2
 * Author: @luijar
 * Partial function application
 */
declare(strict_types=1);
namespace Vol1\Sect4\Video2;

function partial(/* $func, $args... */) {
    $args = func_get_args();
    $func = array_shift($args);

    return function() use ($func, $args) {
        return call_user_func_array($func, array_merge($args, func_get_args()));
    };
}

//------------------------------------------------//
//                     Usage 
//------------------------------------------------//
