<?php
/**
 * Volume 1 - PHP Review - Higher-order Functions (2)
 * Author: @luijar
 */
declare(strict_types=1);


function walkXmlTree($node, callable $fn): void {	
	
	$fn($node);

	foreach($node->children() as $child) {
		walkXmlTree($child, $fn);	
	}			
}