<?php 
    class StudentController extends Controller{
        public $StudentModel = NULL;

        public function __construct(){
            $this->StudentModel = $this->model('Student');
        }
        public function index(){
            $student = $this->StudentModel::all();
            $this->view('index',[
                'student'=>$student
            ]);
        }
    }
?>