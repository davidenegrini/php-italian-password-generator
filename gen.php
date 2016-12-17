<?php

$list=explode(",", gzuncompress(file_get_contents("list.txt.gz")));

if (intval($argv[1]) > 0) {
	$max = intval($argv[1]);
} else {
	$max = 10;
};

for ($i=0; $i<$max; $i++) {
	shuffle($list); echo($list[mt_rand(0, count($list)-1)]." ".mt_rand(0, 1000)."\n");
};

?>