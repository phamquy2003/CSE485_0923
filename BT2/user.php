<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<style>
    .logo img {
        width: 150px;
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

    i.fa-solid.fa-circle-up.text-danger {
        font-size: 25px;
        float: right;
    }

    .g-5,
    .gy-5 {
        --bs-gutter-y: 0rem;
    }

    button.btn.btn-danger.btn-md {
        width: 112px;
    }

    .btn-clear {
        background-color: #fff;

    }

    .content-filter.bg-white {
        border-radius: 5px;
        padding-bottom: 40px;
    }

    .btn-add_user {
        width: 130px !important;
    }
</style>

<body style="background-color: #ccc;">
    <div class="container-fluid">
        <div class="row">
            <?php
            include "./layout/sidebar.php";
            ?>
            <div class="col-md-9 mt-1">
                <?php
                include "./layout/menu.php"
                ?>
                <div class=" content-filter bg-white">
                    <div class="main-filter">
                        <h3 class="text-danger px-4 pt-4">Filter <span class="drop-up"><i class="fa-solid fa-circle-up text-danger"></i></span></h3>

                    </div>

                    <form class="row g-5 px-4">
                        <div class="col-md-9 ">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Email" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Mobile" required>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername" " placeholder=" Select Group" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-danger btn-md"><i class="fa fa-search"></i> Filter</button>
                                </div>
                                <div class="col-md-6">

                                    <button type="button" class="btn btn-danger btn-md btn-clear text-danger">Clear</button>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="main-content bg-white mt-4 rounded p-4">
                    <div class="main-title  h3 text-danger">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-user">
                                    <h3>Users</h3>
                                </div>

                            </div>
                            <div class="col-md-6 float-md-end">
                                <div class="btn-add-del float-end">
                                    <button type="button" class="btn btn-danger btn-md btn-clear text-danger">Delete</button>
                                    <button type="button" class="btn btn-danger btn-md btn-add_user"> <a href="./user_add.php" target="_blank" class="text-decoration-none text-white">ADD USER</a> <i class="bi bi-person-add"></i></i></button>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- <hr> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        </label>
                                    </div>
                                </th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Groups</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require_once './conncert_user.php';

                                $lietke_sql = "SELECT * FROM main_users order by fullname,email, gender, groups,mobile, date_of_birth";

                                $result = mysqli_query($conn, $lietke_sql);

                                while ($row = mysqli_fetch_assoc($result)){
                                ?>

                                                                    <tr>
                                        <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </label>
                                        </div>
                                        </th>
                                        <td><?php echo $row['fullname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['gender'] ; ?></td>
                                        <td><?php echo $row['groups'] ; ?></td>
                                        <td><?php echo $row['mobile'] ; ?></td>
                                        <td><?php echo $row['date_of_birth'] ; ?></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                <?php

                                }
                                ?>

                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        Page 1 of 3.
                        <ul class="pagination float-md-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="col-md-1 bg-white mt-3 rounded-start"></div>

        </div>


    </div>

</body>

</html>