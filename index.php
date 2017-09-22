<?php

$content = '';
$cache_file = '/tmp/map.txt';
if (file_exists($cache_file)) {
	$mtime = filemtime($cache_file);
	if ($mtime > time() - 10) {
		echo "Use cached\n";
		$content = file_get_contents($cache_file);
	} else {
		echo "Cache expired\n";
	}
}

if ($content === '') {
	echo "Create and cache\n";
	$content = 'Banan: ' . time();
	file_put_contents($cache_file, $content);
}

echo "$content\n";