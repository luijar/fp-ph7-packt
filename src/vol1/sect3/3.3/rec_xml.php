<?php
/**
 * Volume 1 - PHP Review - Higher-order Functions (2)
 * Author: @luijar
 */
declare(strict_types=1);
namespace Vol1\Sect3\Video3;

function walkXmlTree($node, callable $fn): void {	
	
	$fn($node);

	foreach($node->children() as $child) {
		walkXmlTree($child, $fn);	
	}			
}