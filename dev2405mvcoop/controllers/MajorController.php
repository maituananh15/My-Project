<?php 
    class MajorController extends Controller{
        // properties
        protected $MajorModel = NULL;
        public function __construct(){
            $this->MajorModel = $this->model('Major');
        }
        // Treatment methods searchs the corres view to display
        public function index(){
            //take data -> pass on view
            $major = $this->MajorModel::all();

            // search view and display
            $this->view('index',[
                'major'=>$major
            ] );
        } 

        // Method edit information
        public function edit($id){
            if(isset($_POST['btnSave'])){
                // take a data on form
                $id_major = $_POST['id_major'];
                $name_major = $_POST['name_major'];
            
                // Save db
                $this->MajorModel::update($id_major,$name_major);

                // Back List page
                header("Location:".URLROOT."/major");
            }
            else{
                $major = $this->MajorModel::findid($id);
                return $this->view('edit', [
                    'major'=>$major
                ]);
            }
        }

        //editPost
        // public function editPost($id){
        //     if(isset($_POST['btnSave'])){
        //         // take a data on form
        //         $id_major = $_POST['id_major'];
        //         $name_major = $_POST['name_major'];
            
        //         // Save db
        //         $this->MajorModel::update($id_major,$name_major);

        //         // Back List page
        //         header("Location:".URLROOT."/major");
        //     }
        // }

        // Create
        public function create(){
            if(isset($_POST['btnSave'])){
                // take a data on form
                $id_major = $_POST['id_major'];
                $name_major = $_POST['name_major'];
            
                // Save db
                $this->MajorModel::add($id_major,$name_major);

                // Back List page
                header("Location:".URLROOT."/major");
            }
            else{
                return $this->view('create', []);
            }
        }

        // Delete
        public function delete($id){
            $this->MajorModel::delete($id);
            header("Location:".URLROOT."/major");
        }

        // View
        public function detail($id){
            $major = $this->MajorModel::findid($id);
            return $this->view('detail', [
                'major'=>$major
            ]);
        }
    }
?>