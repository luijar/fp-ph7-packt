<?php 
/**
 * Introduction: Imperative vs Functional
 * Author: Luis Atencio
 * Imperative
 * Find out the most won Nobel Prize category over the years
 */	
declare(strict_types=1);

namespace Intro;

function mostDecoratedCategory(): void {
	$contents = file_get_contents('prize.json');
	if(!$contents) {
		throw new \RuntimeException('Unable to read file!');
	}

	$data = json_decode($contents);

	$result = [];

	foreach($data->prizes as $prize) {
		$category = $prize->category;
		if(!array_key_exists($category, $result)) {
			$result[$category] = 0;
		}
		$result[$category] = $result[$category] + 1;
	}

	uasort($result, function ($v1, $v2) {
		return $v2 - $v1;
	});

	$winnerCategory = key($result);
		
	echo 'Winner category: '. $winnerCategory;
	echo 'For: '. $result[$winnerCategory]. ' of awards';	
}


// run program
mostDecoratedCategory();

