<?php
    // define the constant for directiories
    define('SYSTEM_DIR',__DIR__ . '/..');                     // system directory
    define('APP_DIR',SYSTEM_DIR . '/app');                    // app directory
    define('PUBLIC_DIR',SYSTEM_DIR . '/public');              // public directory
    define('ROUTES_DIR',SYSTEM_DIR . '/routes');              // routes directory
    define('VENDOR_DIR',SYSTEM_DIR . '/vendor');              // vendor directory
    define('VIEWS_DIR', SYSTEM_DIR . '/resources/views');     // views directory
    define('CONFIG_DIR', SYSTEM_DIR . '/config');             // config directory
    // required once all necessary libraries
    require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php'; // database
    require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php'; // helper function
    require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php'; //request handler
    require_once VENDOR_DIR . '/polakjan/tinymvc/config.php'; // view class
    require_once VENDOR_DIR . '/codingbootcamp/tinymvc/view.php'; // configuration loading
    // require all the necessary models
    require_once APP_DIR . '/note.php'; // model for the notes table