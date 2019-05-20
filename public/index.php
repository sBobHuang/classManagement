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

    if ($partials[0] != 'login') {
        if (!isset($_SESSION['user'])) {
            header('Location: /index.php?r=login/login_page');
        }
        $user = $_SESSION['user'];
        if ($user['role'] == 'student') {
            if ($partials[0] != 'student') {
                die('权限不足');
            }
        } elseif ($user['role'] == 'teacher') {
            if (!in_array($partials[0], ['teacher', 'assignment'])) {
                die('权限不足');
            }
        } else {
            die("未授权的访问");
        }
    }

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