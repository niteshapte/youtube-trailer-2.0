<?php
set_include_path(get_include_path().PATH_SEPARATOR."lib/youtubetrailer/core");
set_include_path(get_include_path().PATH_SEPARATOR."lib/youtubetrailer/bean");
set_include_path(get_include_path().PATH_SEPARATOR."lib/youtubetrailer/exception");
set_include_path(get_include_path().PATH_SEPARATOR."lib/youtubetrailer/helper");

/**
 * Autoload method for dynamically loading classes.
 *
 * @param object $object Name of Class
 * @return void
 */
function __autoload($object) {
	$split = explode("\\", $object);
	$className = end($split);
	require_once("{$className}.php");
}

ini_set("display_errors", 1);