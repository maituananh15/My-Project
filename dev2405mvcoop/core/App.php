<?php
    class App{
        protected $controller = 'HomeController';
        protected $action = 'index';
        public $param = [];

        // Ham xu ly URL (index.php?url=khoa/index ~ /khoa/index)

        public function urlExplode(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $filter = filter_var($url);
                return explode('/', $filter);
            }
        }

        // Ham khoi tao - function initialization
        public function __construct(){
            $url = $this->urlExplode();
            print_r($url);

            // Loc tu mang de xac dinh controller dc dung
            if(isset($url[0])){ // neu co controller tu url
                $controller = $url[0]."Controller";
                if(file_exists('./controllers/'.$controller.'.php')){
                    // Gan lai gia tri cho bien $controller cua lop App
                    $this->controller = $controller;
                }
                unset($url[0]); // loai bo ra khoi mang
            }
            // Dua file controller do vao ung dung
            require_once './controllers/'.$this->controller .'.php';

            // Khoi tao lai controller moi - re-initialize new controller
            $this->controller = new $this->controller;

            // Filter the action to use
            if(isset($url[1])){
                // if action have exist in controller, Reassign variable to $action
                if(method_exists($this->controller, $url[1])){
                    // Reassign value to $action
                    $this->action = $url[1];

                }
                unset($url[1]);
            }

            // get params
            // if para exist on url (http://localhost:8888/project/index.php?url=khoa/index/123/chung)
            // url[] = 123; url[] = chung
            // => param value: 123, chung
            $this->params = $url?array_values($url):[];

            // re-initialize class from controller
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }
?>