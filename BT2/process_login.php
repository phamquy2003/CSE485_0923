<?php
if(isset($_POST['sbmLogin'])){
    $hoten = $_POST['$hoten'];
    $lop = $_POST['lop'];

    //Truy van thong tin:
    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=qlsv", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql_check = "SELECT * FROM sinhvien2 WHERE masv='$hoten' OR lop = '$hoten'";
        $stmt = $conn->prepare($sql_check);
        $stmt->execute();
        //Buoc 3: Lay ra thong tin bao gom MAT KHAU BAM
        if($stmt->rowCount() > 0){
            $hoten = $stmt->fetch();
            //Lay ra mat khau
            $pass_hash = $user[3];
            if(password_verify($pass, $pass_hash)){
                //CAP THE (authentication - Not: authorization)
                session_start();
                $_SESSION['isLogin'] = $hoten;
                header("Location:usermanagment.php");
            }else{
                header("Location:login.php?error=not-matched-password");
            }
        }else{
            header("Location:login.php?error=not-existed");
        }


    }catch(PDOException $e){
        echo $e->getMessage();
    }
}