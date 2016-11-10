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

class App {

	// readFile :: () -> string -> Option
	public function readFile(): callable {
		return function (string $filename): Option {
				return Option::fromValue(file_get_contents($filename), false);
		};
	}

	// getContents :: () -> Option -> string
	public function getContents(): callable {
		return function (Option $option): string {
				return $option->get();
		};
	}

	// accumulate :: array -> array
	public function accumulate(): callable {
		return P::reduce(
			function (array $acc = [], string $category): array {
				$acc[$category] = !array_key_exists($category, $acc) ? 1 : P::inc($acc[$category]);
				return $acc;
			},
		[]);
	}

  // firstElement :: () -> array -> mixed
	public function firstElement(): callable {
		return function ($array) {
				return P::head($array);
		};
	}

	// toJson :: () -> string -> mixed
	public function toJson(): callable {
		return function (string $json) {
				return json_decode($json);
		};
	}
}
