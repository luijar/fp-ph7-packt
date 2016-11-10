<?php
/**
 * Volume 1 - Recursion (3)
 * Author: @luijar
 * Run 2
 */
require_once 'trampoline.php';

function factorial(int $n) {
    $product = function($min, $max) use($n, &$product) { 
      return $min == $n ? 
        $max : 
        //$product(bcadd($min, 1), bcmul($min, $max));
        function() use(&$product, $min, $max) {
            return $product(bcadd($min, 1), bcmul($min, $max));
        };
    };
    return $product(1, $n);
}

//echo ''. factorial(30000);
echo trampoline('factorial', array(30000));