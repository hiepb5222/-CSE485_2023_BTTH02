<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location:/CSE485_2023_BTTH02/index.php?controller=home&action=login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style_login.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?controller=admin&action=list">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./index.php?controller=category&action=list">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?controller=author&action=list">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="./index.php?controller=article&action=list">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?controller=member&action=list">Người dùng</a>
                    </li>
                </ul>
                <a class="nav-link " href="./index.php?controller=home&action=logout">Logout</a>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="./index.php?controller=article&action=store" method="post"  enctype="multipart/form-data">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblTieude">Tiêu đề</span>
                        <input type="text" class="form-control" required name="txtTieude" value="<?php echo isset($data['tieude']) ? $data['tieude']  :""?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblBaihat">Tên bài hát</span>
                        <input type="text" class="form-control"  required name="txtBaihat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblTheloai">Tên thể loại</span>
                        <select class="form-select" aria-label="Default select example" id="ten_tloai" name="txtTheloai" >
                        <?php

                        foreach($categories as $categorie){
                            echo "<option value='" . $categorie->getMa_tloai() . "'>" . $categorie->getTen_tloai() . "</option>";
                        }
                        ?>
                            </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblTomtat">Tóm tắt</span>
                        <input type="text" class="form-control"required name="txtTomtat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" d="lblNoidung">Nội dung </span>
                        <input type="text" class="form-control"  required name="txtNoidung" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblTacGia">Tác giả</span>
                        <select class="form-select" aria-label="Default select example" id="ten_tgia" name="txtTacgia" >
                        <?php

                        foreach($authors as $author){
                            echo "<option value='" . $author->getAuthor_id() . "'>" . $author->getAuthor_name() . "</option>";
                        }
                        ?>
                            </select>

                    </div>
                    <!-- <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblNgayViet">Ngày Viết</span>
                        <input type="text" class="form-control" name="txtNgayviet" >
                    </div> -->
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" style="width: 100px" id="lblHinhanh"> Hình ảnh</span>
                        <input type="file" class="form-control" name="txtHinhanh" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" name="submit" class="btn btn-success">
                        <a href="./index.php?controller=article&action=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
