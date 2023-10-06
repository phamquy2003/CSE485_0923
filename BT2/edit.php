<?php

$id = $_GET['sid'];
//ket noi
require_once'./connect.php';
$edit_sql = "SELECT * FROM sinhvien2 WHERE id = $id";
$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

//hien thi thong tin len form


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <title>Document</title>

</head>
<style>
    .logo img {
        width: 70%;
        height: 100%;
        object-fit: cover;
    }

    .fa-caret-right {
        float: right;
        padding-top: 7px;
        color: #ccc;
    }

    span {
        color: grey;
        padding-left: 15px;
    }

    .sidebar-list {
        padding: 10px 0 10px 0;
    }

    .main-content {
        padding-bottom: 30px;
    }
</style>

<body>
        <div class="container-fluid">
        <div class="row">
            <?php
            include './layout/sidebar.php';
            ?>
            <div class="col-md-9 ">
                <?php
                include './layout/menu.php';
                ?>
                <div class="main-content">
                    <h1>Form update</h1>
                    <form action="update.php" method="post">
                        <input type="hidden" name = "sid" value= "<?php echo $row['id']; ?>">

                        <div class="mb-3 mt-3">
                            <label for="uname" class="form-label">HỌ VÀ TÊN:</label>
                            <input type="text" class="form-control" id="hoten" name="hoten" value=" <?php echo $row['hoten']; ?>">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="msv" class="form-label">MÃ SINH VIÊN:</label>
                            <input type="text" class="form-control" id="msv" name="masv" value="<?php echo $row['masv']; ?>">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="lop" class="form-label">LỚP:</label>
                            <input type="text" class="form-control" id="lop" name="lop" value="<?php echo $row['lop']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu Sửa</button>
                    </form>
                </div>
            </div>

        </div>
    </body>

</html>