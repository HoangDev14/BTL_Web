<?php 

require_once("database.php");

function login() {
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE TenDangNhap='{$username}' AND MatKhau='{$password}'";
        $db = new database();
    
        $stmt = $db->exec_sql($sql);
        $rows = $stmt;
    
        $login = false;  
        foreach ($rows as $row) {
            $login =true;
            return $row;
        }
    
        return $login;
    }
}
$login = login();

// if ($login == false) {
//     echo "Sai ten dang nhap hoac mat khau";
// } else {
//     echo "Xin chao ".$login['HoTen'];
// }
    // $kq = $db->($sql);
    // if($kq != ""){
        // header("Location: trangchu.php");
    // }
    // $stmt = $con->prepare($sql);
    
    // // bind parameter ke query
    // $params = array(
    //     ":username" => $username
    // );

    // $stmt->execute($params);

    // $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    
    
    // $db = new database();
    // $kq = $db->exec_sql($sql);   

    // if($kq != ""){
    //     // verifikasi password
    //     if(password_verify($password, $kq["MatKhau"])){
    //         // buat Session
    //         session_start();
    //         $_SESSION["user"] = $kq;
    //         // login sukses, alihkan ke halaman timeline
    //         header("Location: trangchu.php");
    //     }
    // }

?>

<!DOCTYPE html>
<html>

<head>
    <title>StarBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/starbStyle.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../fav_star.ico">
    <script type="text/javascript" src="../javascript/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="../javascript/myJS.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#" style="font-size: 23px;"><img src="../fav_star.ico" />StarBook</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="khachsan.php">Khách Sạn <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="vebay.html">Vé Bay</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Đến sân bay</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="dangky.php">Đăng ký <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="login.php" class="btn nutdangnhap">Đăng nhập</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6" style=" margin-left:320px;margin-top:20px;margin-bottom:20px;">
                
                
                <h4>Đăng nhập ngay</h4>
                <p>Bạn chưa có tài khoản? <a href="dangky.php">Mời bạn đăng ký</a></p>
                
            <form action="" method="POST">
                
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập" />
                </div>


                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input class="form-control" type="password" name="password" placeholder="Mật khẩu" />
                </div>
                <?php 
                    if ($login == false) {
                        echo "<h5 style='color:red;'>Sai tên đăng nhập hoặc mật khẩu<h5>";
                    } 
                    else {
                        echo "<h5>Xin chào ".$login['HoTen'];
                    }
                ?>
                <input type="submit" class="btn btn-success btn-block" style="height:50px;" name="login" value="Đăng nhập" />
                
            </form>
        </div>

        </div>

    </div>
    <!-- Footer -->
    <footer style="background-color: #303030;height: 300px; color: white;" class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1477.6138072377612!2d105.82936580635673!3d21.058538729308044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1544069660195"
                        width="450" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">



                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Địa chỉ văn phòng</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fa fa-home mr-3"></i>Số 50 Từ Hoa Công Chúa, HN</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-envelope mr-3"></i> StarBook@example.com</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Copyright -->
                <div class="footerr footer-copyright text-center ">© 2018 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/"> StarBook</a>
                </div>
                <!-- Copyright -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->



    </footer>
    <!-- Footer -->
</body>

</html>