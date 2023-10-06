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
    .main-box{
        display: flex;
        flex:1;
        align-items: center;
        justify-content: center;
        gap: 50px;
    }
</style>
<body>
    <div class="container-fluid border border-dark pb-5 m-2 ">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h5 class="px-2 pt-1">Administraton</h5>
                <a class="navbar-brand fw-bold" href="#">Trang chủ</a>
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
                            <a class="nav-link disabled" aria-disabled="true">Thể loại</a>
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
        <div class="main-box pt-4">
            <div class="sub-box text-center border border-light-subtle px-5 pt-2">
                <h6 class="text-primary">Người dùng</h6>
                <p class="fw-400 fs-3">100</p>
            </div>
            <div class="sub-box text-center border border-light-subtle px-5 pt-2">
                <h6 class="text-primary">Thể loại</h6>
                <p class="fw-400 fs-3">10</p>
            </div>
            <div class="sub-box text-center border border-light-subtle px-5 pt-2">
                <h6 class="text-primary">Tác giả</h6>
                <p class="fw-400 fs-3">20</p>
            </div>
            <div class="sub-box text-center border border-light-subtle px-5 pt-2">
                <h6 class="text-primary">Bài viết</h6>
                <p class="fw-400 fs-3">110</p>
            </div>
        </div>
    </div>
</body>

</html>