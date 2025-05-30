<?php 
    class Controller{
        public $model = "Home";
        // method to load model
        public function model($model){
            require_once './models/'.$model.'.php';
            $this->model = $model;
            return new $model;
        }

        // method to load views
        public function view($view, $data=[]){
            require_once './views/'.$this->model.'/'.$view.'.php';
        }

    }
?>