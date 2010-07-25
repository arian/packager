<?php

function packager_array_contains($array, $item){
	return array_search($item, $array) !== false;
}

function packager_array_include(&$array, $item){
	if (!packager_array_contains($array, $item)) $array[] = $item;
	return $array;
}

function packager_array_erase(&$array, $item){
	foreach ($array as $i => $v){
		if ($array[$i] === $item) array_splice($array, $i, 1);
	}
	return $array;
}

function packager_array_has($array, $key){
	return !empty($array) && array_key_exists($key, $array);
}

function packager_array_get($array, $key){
	return (!empty($array) && array_key_exists($key, $array)) ? $array[$key] : null;
}
