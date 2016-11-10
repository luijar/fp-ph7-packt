<?php 
/**
 * Introduction: Imperative vs Functional
 * Author: Luis Atencio
 * Functional
 * Find out the most won Nobel Prize category over the years
 * Helper functions
 */	
declare(strict_types=1);

namespace Intro;

require '../../vendor/autoload.php';

// required packages
use P;
use PhpOption\Option as Option;
use Function Functional\invoker;

// readFile :: string -> Option
$getFile = function (string $filename): Option {
	return Option::fromValue(file_get_contents($filename), false);
};

// getContents :: Option -> string
$getContents = invoker('get');

// accumulate :: array -> array
$accumulate = P::reduce(function (array $acc = [], string $category): array {	
	$acc[$category] = !array_key_exists($category, $acc) ? 1 : P::inc($acc[$category]);	
	return $acc;
}, []);

// readPrizes :: mixed -> string
$readPrizes = P::prop('prizes');

//extractAllCategories :: array -> array 
$extractAllCategories = P::map(P::prop('category'));

// toJson :: string -> mixed
$toJson = 'json_decode';

// firstElement :: array -> mixed
$firstElement = 'P::head';









