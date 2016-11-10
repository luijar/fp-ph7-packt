<?php
/**
 * Volume 1 - Recursion Trampoline
 * Author: @luijar
 */
declare(strict_types=1);

// trampoline :: (callable, array) -> mixed
function trampoline(callable $func, array $args = []) { 
    $return = call_user_func_array($func, $args);
    while(is_callable($return)) {
        $return = $return();
    }
    return $return;
}
