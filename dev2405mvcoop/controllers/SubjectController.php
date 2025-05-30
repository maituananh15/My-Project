<?php 
    class SubjectController extends Controller{
        // properties
        protected $SubjectModel = NULL;
        public function __construct(){
            $this->SubjectModel = $this->model('Subject');
        }
        // Treatment methods searchs the corres view to display
        public function index(){
            //take data -> pass on view
            $subject = $this->SubjectModel::all();

            // search view and display
            $this->view('index',[
                'subject'=>$subject
            ] );
        } 
        public function edit($id){
            if(isset($_POST['btnSave'])){
                // take a data on form
                $id_subject   = $_POST['id_subject'];
                $name_subject = $_POST['name_subject'];
                $lesson = $_POST['lesson'];
            
                // Save db
                $this->SubjectModel::update($id_subject,$name_subject);

                // Back List page
                header("Location:".URLROOT."/subject");
            }
            else{
                $subject = $this->SubjectModel::findid($id);
                return $this->view('edit', [
                    'subject'=>$subject
                ]);
            }
        }
    }
?>