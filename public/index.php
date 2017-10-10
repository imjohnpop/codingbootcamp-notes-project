<?php
    // include bootstraping
    include '../bootstrap/bootstrap.php';
    // calling the request function from helpers.php and asigning to $route
    $route = request('route',404);

    echo $route;