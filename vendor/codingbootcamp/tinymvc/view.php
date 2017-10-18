<?php
    namespace codingbootcamp\tinymvc;

    class view
    {
        protected $__view_name= null;

        public function __construct($view_name)
        {
            $this->__view_name = $view_name;
        }

        public function render()
        {
            // output buffering starts
            ob_start();
            // extract takes key from an array turns them into variables with values
            // turn this object's properties into variables
            extract(get_object_vars($this));
            include VIEWS_DIR . '/' . $this->__view_name . '.php';
            // ob ends and returns everything from the buffering 
            return ob_get_clean();
        }

        // another way of calling render method
        public function __toString()
        {
            return $this->render();
        }
    }