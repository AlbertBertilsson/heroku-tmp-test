<?php

$map = '';
$cache_file = '/tmp/map.txt';
if (file_exists($cache_file)) {
	$mtime = filemtime($cache_file);
	if ($mtime > time() - 10) {
		echo "Use cached\n";
		$map = file_get_contents($cache_file);
	} else {
		echo "Cache expired\n";
	}
}

if ($map === '') {
	echo "Create and cache\n";
	$map = 'Banan: ' . time();
	file_put_contents($cache_file, $map);
}

echo "$map\n";