<?php
/**
 * Volume 1 - Recursion
 * Author: @luijar
 * Run 1
 */
require_once 'array_add.php';

$source = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$result = array_add($source);

printf("Recursive add: %s"  . PHP_EOL,  $result);
printf("Original:"  . PHP_EOL);
print_r($source);