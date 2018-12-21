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
    <?php 
        $tendn="";
        $tendnLoi="";
        $hienLoi="none";

        function kiemTraDL($duLieu) {
            $duLieu = trim($duLieu);
            $duLieu = stripslashes($duLieu);
            $duLieu = htmlspecialchars($duLieu);
            return $duLieu;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["tendn"])) {
              $hienLoi = "block";  
              $tendnLoi = "Phải nhập tên đăng nhập";
            } else {
              $tendn = kiemTraDL($_POST["tendn"]);
              // check if name only contains letters and whitespace
              if (!preg_match("/^[a-zA-Z ]*$/",$tendn)) {
                $hienLoi = "block";
                $tendnLoi = "Only letters and white space allowed"; 
              }
            }
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h3>
                    Đăng ký tài khoản
                </h3>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">

                        <label>
                            Tên đăng nhập
                        </label>
                        <input type="text" class="form-control" name="tendn" /> 
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $tendnLoi;
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >
                            Mật khẩu
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">
                        <label >
                            Họ và tên
                        </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <div class="form-group">

                        <label for="">
                            Email
                        </label>
                        <input type="email" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label>
                            Số điện thoại
                        </label>
                        <input type="text" class="form-control" id="" />
                    </div>
                    <div class="form-group">
                        <label>
                            Giới tính
                        </label><br/>
                        <input type="radio" name="a" id="exampleInputPassword1" />Nam
                        <input type="radio" name="a" id="exampleInputPassword1" />Nữ<br/>
                        
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Đăng ký
                    </button>
                </form>
                <div class="alert alert-dismissable alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                    </button>
                    <h4>
                        Alert!
                    </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. 
                    <a href="#" class="alert-link">alert
                        link</a>
                </div>
            </div>
        </div>
        <div>
            <h2>
            <?php 
                echo $tendn;
                ?>
            </h2>
        </div>
    </div>
</body>

</html>