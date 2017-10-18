<?php

    namespace app\controllers;

    // use our implementation of view
    use \codingbootcamp\tinymvc\view;
    
    use \app\note;
    
    class notesController
    {
        public function listing()
        {
            $note = note::find(1);
            
            $document = new view('document');
            $list = new view('notes/list');
            // "give" the variable $content to the template
            $document->content = $list;

            return $document;
        }

        public function edit()
        {
            $note = new \app\note();
            $note->title = 'This is my first note';
            $note->text = 'This is the text of my first noe.';
            $note->added_at = date('Y-m-d H:i:s');
            $note->insert();

            $document = new view('document');
            $editform = new view('notes/edit');
            // "give" the variable $content to the template
            $document->content = $editform;

            return $document;
        }
    }