<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
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
                            <a class="nav-link" aria-current="page" href="./">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Trang ngoài</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="category.php">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="author.php">Tác giả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="article.php">Bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" href="users.php">Người dùng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main class="container mb-5" style="margin-top: 120px;">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin người dùng</h3>
                <form action="./index.php?controller=member&action=edit" method="post">

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">ID</span>
                        <input readonly type="text" name="txtID" class="form-control" value="<?= $findMember->getId() ?>">
                    </div>
                    <div class="input-group mb-3 ">

                    </div>

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">Full Name</span>
                        <input type="text" name="txtName" class="form-control" required placeholder="Nhập tên " id="txtName" value="<?= $findMember->getName() ?>">
                    </div>

                    <div class="input-group mb-3 ">
                        <span class="text" style="color:red ;margin-left:140px;font-weight:12px;" id="errorName"></i></span>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">Email</span>
                        <input type="email" name="txtEmail" class="form-control" required value="<?= $findMember->getEmail() ?>">
                    </div>
                    <div class="input-group mb-3 ">

                    </div>

                    <div class="input-group ">
                        <span class="input-group-text" style="width:140px;">Username</i></span>
                        <input type="text" name="txtUser" id="txtUser" class="form-control" required value="<?= $findMember->getUser() ?>">
                    </div>

                    <div class="input-group mb-3 ">
                        <span class="text" style="color:red ;margin-left:140px;font-weight:12px;" id="errorUser"></i></span>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">Is admin</span>
                        <input type="text" name="txtIs_admin" id="txtIs_admin" class="form-control" required value="<?= $findMember->getIs_admin() ?>">
                    </div>

                    <div class="input-group mb-3 ">
                        <span class="text" style="color:red ;margin-left:140px;font-weight:12px;" id="errorIs_admin"></i></span>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">Password</span>
                        <input type="password" name="txtPass" id="password1" class="form-control" required value="<?= $findMember->getPass() ?>">
                    </div>

                    <div class="input-group mb-3 ">
                        <span class="text" style="color:red ;margin-left:140px;font-weight:12px;" id="errorPass"></i></span>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text" style="width:140px;">Reset password</span>
                        <input type="password" name="txtResetPass" id="password2" class="form-control" required value="<?= $findMember->getPass() ?>">
                        <span class="input-group-text" onclick="showPassword()"><i class="fas fa-eye"></i></span>
                    </div>

                    <div class="input-group mb-3 ">
                        <span class="text" style="color:red ;margin-left:140px;font-weight:12px;" id="errorPasse"></i></span>
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" id="signbtn" name="signbtn" value="Lưu lại" class="btn btn-success">
                        <a href="./index.php?controller=member&action=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="footer fixed-bottom bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>

    <script>
        var elementN = document.getElementById("errorName");
        var elementP = document.getElementById("errorPass");
        var elementPe = document.getElementById("errorPasse");
        var elementU = document.getElementById("errorUser");
        var elementIs = document.getElementById("errorIs_admin");
        var input = document.getElementById("signbtn");
        var regex = /[\u00C0-\u024F\u1EA0-\u1EF9]+/g;
        elementN.style.display = "none";
        elementP.style.display = "none";
        elementPe.style.display = "none";
        elementU.style.display = "none";
        elementIs.style.display = "none";
        document.getElementById("txtUser").onchange = function() {
            myFunction();
        }
        document.getElementById("txtName").onchange = function() {
            myFunction();
        }
        document.getElementById("txtIs_admin").onchange = function() {
            myFunction();
        }
        document.getElementById("password1").onchange = function() {
            myFunction();
        }
        document.getElementById("password2").onchange = function() {
            myFunction();
        }



        function myFunction() {
            var user = document.getElementById("txtUser");
            var name = document.getElementById("txtName");
            var isadmin = document.getElementById("txtIs_admin");
            var pass1 = document.getElementById("password1");
            var pass2 = document.getElementById("password2");

            if (user.value.length >= 20) {
                elementU.innerHTML = "* User không quá 20 ký tự!";
                elementU.style.display = "block";
                input.setAttribute("disabled", true);
            } else
            if (regex.test(user.value)) {
                elementU.innerHTML = "* User không chứa dấu!";
                elementU.style.display = "block";
                input.setAttribute("disabled", false);
            } else if (name.value.length > 50) {
                elementN.innerHTML = "* Name không quá 50 ký tự!";
                elementN.style.display = "block";
                input.setAttribute("disabled", true);
            } else if (pass1.value.length >= 255) {
                elementPe.innerHTML = "* Pass không quá 255 ký tự!";
                elementPe.style.display = "block";
                input.setAttribute("disabled", true);
            // } else if (isadmin.value != 0 || isadmin.value != 1) {
            //     elementIs.innerHTML = "* chỉ nhập 0 hoặc 1!";
            //     elementIs.style.display = "block";
            //     input.setAttribute("disabled", true);
            } else
            if (pass1.value != pass2.value) {
                elementPe.innerHTML = "* Reset pass không đúng!";
                elementPe.style.display = "block";
                input.setAttribute("disabled", true);
            } else {
                elementU.style.display = "none";
                elementN.style.display = "none";
                elementIs.style.display = "none";
                elementPe.style.display = "none";
                input.removeAttribute("disabled");
            }
        }


        function showPassword() {
            var password1 = document.getElementById("password1");
            var password2 = document.getElementById("password2");

            if (password2.type === "password") {
                password1.type = "text";
                password2.type = "text";
            } else {
                password1.type = "password";
                password2.type = "password";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>