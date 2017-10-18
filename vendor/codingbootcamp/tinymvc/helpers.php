<?php

/*
*   alias for \codingbootcamp\tinymvc\request::get
*/


    // declaring the request function
    function request($name, $default = null)
    {
        // using the request class method get with coresponding namespace
        // and returning it
        return \codingbootcamp\tinymvc\request::get($name,$default);
    }

/*
*   alias for \polakjan\tinymvc\config::get
*/

    // declaring the config function
    function config($key, $default = null)
    {
        // using the config class method get with coresponding namespace
        // and returning it
        return \polakjan\tinymvc\config::get($key, $default);
    }