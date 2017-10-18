<?php

    namespace app\controllers;

    // use our implementation of view
    use \codingbootcamp\tinymvc\view;


    class indexController
    {
        public function index()
        {
            $document = new view('document');

            // "give" teh variable $content to the template
            $document->content = '<h1>This is the homepage with some special info</h1><a href="list"><button>List</button></a>';

            return $document;
        }
    }