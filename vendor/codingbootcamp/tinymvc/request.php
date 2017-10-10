<?php

    namespace codingbootcamp\tinymvc;

    // $_REQUEST provide us all data stored in $_GET and $_POST
    class request
    {
        // easy way to access and retrieve information from request
        // by using this function
        public static function get($name, $default = null)
        {
            // checking is the $_REQUEST is set
            if(isset($_REQUEST[$name]))
            {
                echo $name; // echoing the value from $_GET
            }
            else
            {
                echo $default; // echoing the default value
            }
        }
    }