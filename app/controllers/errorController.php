<?php

    namespace app\controllers;
    
    // use our implementation of view
    use \codingbootcamp\tinymvc\view;


    class errorController
    {
        public function error404()
        {
            $document = new view('document');

            // "give" the variable $content to the template
            $document->content = 'Error: 404 - page not found';

            return $document;
        }
    }