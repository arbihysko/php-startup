<?php

// Require config files
require_once 'config/paths.php';
require_once 'config/database.php';

// Autoloader for libs
function __autoload($class) {
	require_once "libs/$class.php";
}

// Lauch Application
$app = new Bootstrap();

?>