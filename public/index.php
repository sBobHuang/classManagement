<?php


/*

r=teacher/home
r=teacher/create_class

*/

$route = isset($_GET['r']) ? $_GET['r'] : NULL;

set_include_path(get_include_path() . PATH_SEPARATOR . '../');

if ($route) {

	session_start();
	
	$partials = explode("/", $route);

	if (count($partials) != 2) {
		die('invalid route');
	}

	$filename = $partials[0];
	$class_name = ucfirst(strtolower($filename)) . "Controller";

	$function_name = $partials[1];

	if (!file_exists('../controller/' . $class_name . '.php')) {
		die('error route');
	}

	include('controller/' . $class_name . '.php');

	if (!class_exists($class_name)) {
		die('error route');
	}

	$controller = new $class_name();
	if (!method_exists($controller, $function_name)) {
		die('error route');
	}
	$controller->$function_name();

} else {
	include('controller/LoginController.php');
	$loginController = new LoginController();
	$loginController->login_page();
}
