<?php

$a = [
	[1,1,1,1],
	[0,1,1,1],
	[0,1,1,1]
];

$res = numberOfPathes($a);

var_dump($res);



function numberOfPathes($matrix) {
		$rows = count($matrix);
		$cols = count($matrix[0]);

		for ($row = 1; $row < $rows; $row++) {
			for ($col = 1; $col < $cols; $col++) {
				$matrix[$row][$col] = $matrix[$row-1][$col] + $matrix[$row][$col-1];
			}
		}

		return $matrix[$rows-1][$cols-1];
}
