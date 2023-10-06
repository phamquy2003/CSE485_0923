<?php
require_once APP_ROOT.'./app/services/PatientService.php';
require_once APP_ROOT.'./app/services/DoctorService.php';


class PatientController{
    public function index() {
        // Gọi dữ liệu từ 
        $PatientService = new PatientService();
        
        $patients = $PatientService->getAllPatients();

        include APP_ROOT.'./app/views/patient/index.php';

    }
}