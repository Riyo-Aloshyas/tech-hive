<?php 
// start session
session_start();

// config.php file
require_once 'config.php';

// include helpers
require_once 'helpers/system_helper.php';

// autoloader
function myAutoload($class_name){
	require_once 'lib/' .$class_name. '.php';
}

