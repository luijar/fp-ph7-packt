<?php
/**
 * Volume 1 - Recursion
 * Author: @luijar
 */
declare(strict_types=1);

// identity :: a -> a
function identity($x) { 
	return $x; 
}

// array_clone :: array -> array
function array_clone(array $src = []): array {
	return array_map('identity', $src);
} 

// array_add :: array -> float
function array_add(array $arr = []): float {
	
	function add_rec(array $arr): float {
		if(empty($arr)) {
			return 0;
		}
		return array_shift($arr) + add_rec($arr);
	}	
	
	return add_rec(array_clone($arr));
}
