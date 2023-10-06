<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <header>
        <?php

        include_once (APP_ROOT . './app/views/layout/header.php')

        ?>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="?controller=doctor&action=add_doctor">
                        <button type="button" class="btn btn-success my-4">Thêm mới Lớp học</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Mã bệnh nhân</th>
                                <th scope="col">Tên bệnh nhân</th>
                                <th scope="col">Ngày khám</th>
                                <th scope="col">Triệu chứng</th>
                                <th scope="col">Mã bác sĩ</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($patients as $patient) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $patient->getId(); ?></th>
                                    <td><?php echo $patient->getPatientName(); ?></td>
                                    <td><?php echo $patient->getDateExamination(); ?></td>
                                    <td><?php echo $patient->getSymptom(); ?></td>
                                    <td><?php echo $patient->getDoctorID(); ?></td>
                                    <td>
                                        <a class="fs-4 color-primary px-1" href="?controller=class1&action=edit_class1&idSelect=<?php echo $patient->getId(); ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a class="fs-4 color-primary user-delete-link" href="" data-bs-toggle="modal" data-bs-target="#modal<?php echo $patient->getId();?>">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>