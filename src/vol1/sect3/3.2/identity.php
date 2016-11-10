#!/usr/local/bin/php7
<?php
/**
 * Volume 1 - Fundamental of FP - Video 3.1
 * Author: @luijar
 * Identity function
 */
declare(strict_types=1);
namespace Vol1\Sect3\Video1;

// identity: a -> a
function identity($a) {
	return $a;
}

$fruits = array('lemons' => 1, 'oranges' => 4, 'bananas' => 5, 'apples' => 10);

$fruitsArrayObject = new \ArrayObject($fruits);
$fruitsArrayObject['pears'] = 4;

// create a copy of the array (OOP)
$copy = $fruitsArrayObject->getArrayCopy();
print 'First copy (OOP)'. PHP_EOL;
print_r($copy);

// use identity to create a copy (FP)
$anotherCopy = array_map(__NAMESPACE__. '\identity', $fruits);
$anotherCopy['pears'] = 4;
print 'Second copy (FP)'. PHP_EOL;
print_r($anotherCopy);

// show original unchanged
print 'Original (unchanged)'. PHP_EOL;
print_r($fruits);
