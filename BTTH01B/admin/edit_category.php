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
<style>
    .input-group{
        margin-bottom: 30px;
    }
</style>
<body>
    <div class="container-fluid border border-dark pb-5 m-2 ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h5 class="px-2 pt-1">Administraton</h5>
                <a class="nav-link disabled" aria-disabled="true">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Trang ngoài</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-dark" aria-disabled="true">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Tác giả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Bài viết</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>

            </div>
        </nav>
        <h3 class="fw-bold text-center">THÊM MỚI THỂ LOẠI</h3>
        <form action="" class="px-3">
        <div class="input-group ms-4">
            <span class="input-group-text">Mã thể loại</span>
            <input type="text" class="form-control" placeholder="1">
        </div>
        <div class="input-group ms-4">
            <span class="input-group-text">Tên thể loại</span>
            <input type="text" class="form-control" placeholder="Nhạc trữ tình">
        </div>
        
        <button type="button" class="btn btn-warning float-end">Quay lại</button>
        <button type="button" class="btn btn-success float-end">Lưu lại</button>
        </form>


    </div>
</body>

</html>