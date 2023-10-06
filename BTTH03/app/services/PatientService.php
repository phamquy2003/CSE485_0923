<?php

require_once APP_ROOT.'../app/models/patient.php';

class PatientService{
    public function getAllPatients() {
        // B1: Ket noi Database
        try{
            //Buoc 1: Ket noi Database
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root','');
            // Bước 2: Truy vấn dữ liệu từ bảng employees (điều này phụ thuộc vào tên bảng thực tế của bạn)
        $sql = "SELECT * FROM patient";
        $stmt = $conn->query($sql);

        $patients = [];
        while ($row = $stmt->fetch()) {
            $patient = new Patient($row['id'], $row['patientName'], $row['dateExamination'], $row['symptom'], $row['doctorID']);
            $patients[] = $patient;
        }
      
        return $patients; 
        
       
        }catch(PDOException $e){
            // echo $e->getMessage();
            return $patients = [];
        }

    }
}
