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

// mostDecoratedCategory :: string -> array
function mostDecoratedCategory(string $path): array {
	return P::pipe (
					App::readFile(),
					App::getContents(),
					App::toJson(),
					P::prop('prizes'),
					P::map(P::prop('category')),
					App::accumulate(),
					App::firstElement()
				)($path);
}

$result = mostDecoratedCategory('prize.json');

print_r($result);
