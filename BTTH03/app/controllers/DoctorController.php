<?php
// require_once '../confign/confign.php';
require_once APP_ROOT.'./app/services/DoctorService.php';
// require_once APP_ROOT.'./app/services/PatientService.php';

class DoctorController {
    public function index() {
        // Gọi dữ liệu từ 
        $DoctorService = new DoctorService();
        
        $doctors = $DoctorService->getAllDoctor();

        include APP_ROOT.'./app/views/doctor/index.php';

    }
    // View Them
    public function add_doctor(){
        include APP_ROOT.'./app/views/doctor/add_doctor.php';
    }

    // public function process_add(){
        
    //     if(isset($_POST['doctorName'])){

    //         $doctorName = $_POST['doctorName'];

    //         $doctorService = new DoctorService();
    //         $check = $doctorService->addDoctor($doctorName);
    
    //         if ($check){
    //             $this->index();
    //         } else {
    //             $this->add_doctor();
    //         }
    //     }
    // }

    // // View Sua
    // public function edit_class1(){

    //     $id = isset($_GET['idSelect'])? $_GET['idSelect'] : null;

    //     $class1Service = new Class1Service();
    //     $class1 = $class1Service->getByClass1Id($id);

    //     include APP_ROOT.'/app/views/class1/edit_class1.php';
    // }

    // public function process_edit(){

    //     if(isset($_POST['id']) && isset($_POST['nameClass1'])){

    //         $id = $_POST['id'];
    //         $nameClass1 = $_POST['nameClass1'];

    //         $class1Service = new Class1Service();
    //         $check = $class1Service->editClass1($id, $nameClass1);

    //         if ($check){
    //             $this->index();
    //         } else {
    //             $this->edit_class1();
    //         }
    //     }
    // }



    // // Xoa
    // public function delete_class1(){

    //     $id = isset($_GET['idSelect'])? $_GET['idSelect'] : null;

    //     $class1Service = new Class1Service();
    //     $class1Service->deleteClass1($id);

    //     $this->index();
    // }
}