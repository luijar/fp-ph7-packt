#!/usr/local/bin/php7
<?php
/**
 * Volume 1 - Composition - Video 5.4
 * Author: @luijar
 * Functional version
 */
declare(strict_types=1);
namespace Vol1\Sect5\Video4;

require_once 'functional-helpers.php';
use P;

// mostDecoratedCategory :: string -> array
// TODO

// run program
$result = $mostDecoratedCategory('prize.json');
print_r($result);
