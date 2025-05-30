<?php 
    class ResultController extends Controller{
        protected $ResultModel = NULL;
        public function __construct(){
            $this->ResultModel = $this->model('Result');
        }
        public function index(){
            $result = $this->ResultModel::all();
            
            $this->view('index',[
                'result'=>$result
            ] );
        }
        public function edit($id){
            if(isset($_POST['btnSave'])){
                $id = $_POST['id'];
                $id_subject = $_POST['id_subject'];
                $score = $_POST['score'];
                $this->ResultModel::update($id_subject,$score);
                header("Location:".URLROOT."/result");
            }
            else{
                $result = $this->ResultModel::findid($id);
                return $this->view('edit',[
                    'result'=>$result
                ]);
            }
        }
    }
?>