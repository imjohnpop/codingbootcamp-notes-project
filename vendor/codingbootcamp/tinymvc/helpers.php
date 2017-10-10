<?php
    // declaring the request function
    function request($name, $default = null)
    {
        // using the request class method get with coresponding namespace
        // and returning it
        return \codingbootcamp\tinymvc\request::get($name,$default);
    }