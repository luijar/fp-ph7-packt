#!/usr/local/bin/php7
<?php
/**
 * Volume 1 - Functional evaluation strategies - Video 4.3
 * Author: @luijar
 * Manual function currying
 */
declare(strict_types=1);
namespace Vol1\Sect4\Video3;

require_once 'logger.php';

logger($consoleLog, 'DEBUG', 'This is a debug message!');
logger($fileLog, 'DEBUG', 'This is a debug message!');

// curriedLogger :: (string) -> () -> string -> string -> ()
function curriedLogger(callable $resource): callable {
	return function (string $level) use ($resource): callable {
		return function (string $message) use ($resource, $level) {
			$resource(sprintf('[%s] %s - %s', $level, date('M/d/Y h:i:s A'), $message));		
		};
	};     
}

curriedLogger($consoleLog)('DEBUG')('This is a debug message using currying!');
curriedLogger($fileLog)('DEBUG')('This is a debug message using currying!');

$consoleDebugger = curriedLogger($consoleLog)('DEBUG');
$consoleDebugger('First log message');
$consoleDebugger('Second log message');

$consoleWarn = curriedLogger($consoleLog)('WARN');
array_map($consoleWarn, ['Functional', 'PHP', 'is', 'too', 'awesome!']);





