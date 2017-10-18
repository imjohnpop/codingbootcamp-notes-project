<?php

    namespace codingbootcamp\tinymvc;

    // $_REQUEST provide us all data stored in $_GET and $_POST
    class request
    {
        // easy way to access and retrieve information from request
        // by using this function
        /*
        *   get information from request or a default value
        */
        public static function get($name, $default = null)
        {
            // checking if the $_REQUEST is set
            if(isset($_REQUEST[$name]))
            {
                return $_REQUEST[$name]; // return the value from $_GET
            }
            else
            {
                return $default; // return the default value
            }
        }
    }