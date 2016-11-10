<?php
/**
 * Intro
 * Author: @luisat
 * Run of functional program to compute the most decorated nobel prize
 */
declare(strict_types=1);

namespace Intro;

require_once 'functional-helpers.php';

use P;

//mostDecoratedCategory :: string -> array 
$mostDecoratedCategory = P::pipe(
	$readFile,
	$getContents,
	$toJson, 
	$readPrizes, 
	$extractAllCategories,	
	$accumulate, 
	$firstElement
);

$result = $mostDecoratedCategory('prize.json');

print_r($result);




















