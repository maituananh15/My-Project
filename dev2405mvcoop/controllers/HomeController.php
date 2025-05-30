<?php 
    class HomeController extends Controller{
        protected $HomeModel = "";

        public function __constuct(){
            $this->HomeModel = "Home";

        }
        public function index(){
            $db = Database::getInstance();
            print_r($db);
        }
    }
?>