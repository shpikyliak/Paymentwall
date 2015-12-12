<?php


class Route
{
    static function start()
    {
        // default
        $controller_name = 'Main';
        $action_name = 'index';
        require_once 'app/models/Luhn.php';
        require_once 'app/models/Error.php';
        require_once 'app/models/Answer.php';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // get contoler name
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // get action name
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // make names
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        // include model fie

        $model_file = strtolower($model_name) . '.php';
        $model_path = "app/models/" . $model_file;
        if (file_exists($model_path)) {
            include "app/models/" . $model_file;
        }

        // incude controller file
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "app/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "app/controllers/" . $controller_file;
        } else {
            exit('<h3>404! Page don\'t found</h3>');
        }
        //make controller
        $controller = new $controller_name;
        $action = $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            exit('<h3>404! Page don\'t found</h3>');
        }
    }


}
