<?php
    // include bootstraping
    include '../bootstrap/bootstrap.php';
    // calling the request function from helpers.php and asigning to $route
    $route = request('route',404);
    /*
    *   have a look at the request and return the name
    *   oft he controller and name of the action that
    *   should handle this request
    */
    function getControllerActionFromRequest()
    {
        // declare routes as an empty array
        $routes = [];
        // replace $routes with the variable $routes defined in web.php
        include ROUTES_DIR . '/web.php';

        $current_uri = $_SERVER['REQUEST_URI'];
        // remove '/' from both sides of the uri (turning /foo into just foo)
        $current_uri = trim($current_uri, '/');
        // get individual parts of the URL
        $uri_parts = explode('/', $current_uri);
        // get the current route from the request or 'homepage' if it is not there
        $current_route = $uri_parts[0] != '' ? $current_uri : 'homepage';
        // if there is an item is $routes with $current_route for index
        if (isset($routes[$current_route])) 
        {
            return $routes[$current_route];
        } else
        {
            // return the error 404 controller and action
            return [
                'controller' => 'errorController',
                'action' => 'error404'
            ];
        }
    }

    function runControllerMethod($controller_name, $action_name)
    {
        // include the RIGHT controller
        include APP_DIR . '/controllers/' . $controller_name . '.php';
        // create the controller object
        $controller_class = '\\app\\controllers\\' . $controller_name;
        $controller = new $controller_class;
        // call action of the controller object
        echo $controller->$action_name();
    }
    // we get the array with the name of the controller and it's action from request
    $controller_action = getControllerActionFromRequest();
    // we run the right controller and it's action
    runControllerMethod($controller_action['controller'], $controller_action['action']);