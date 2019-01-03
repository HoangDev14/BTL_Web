<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin StarBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="../fav_star.ico">
    <link rel="stylesheet" type="text/css" href="../css/starbStyle.css">
    <script type="text/javascript" src="../javascript/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="../javascript/myJS.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 18px;">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="trangchu.html" style="font-size: 23px;"><img src="../fav_star.ico" />StarBook</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="qlks.php">Quản lý khách sạn <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="qlvb.php">Quản lý vé bay</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="qltk.php">Quản lý tài khoản</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">
                                <h5 style="color: white;">Xin chào </h5>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
        <div class="row">
            <div style="text-align: center;margin: 0 auto;">
                <a href="qlks.php" id="adminlink">Quản lý khách sạn</a>
                <a href="qlvb.php" id="adminlink">Quản lý vé bay</a>
                <a href="qltk.php" id="adminlink">Quản lý tài khoản</a>
            </div>
        </div>
        <h2 style="margin-left: 500px; margin-bottom: 10px;  ">Danh sách tài khoản</h2>
        <div class="row bangadmin">
            <span style="height: 4px;background-color: #20a6e5; width: 400px; margin-left: 465px; margin-bottom: 6px;"></span>
            <table class="danhsach">
                <tr>
                    <th>Tên Đăng Nhập</th>
                    <th>Họ Tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Giới Tính</th>
                    <th>Mật Khẩu</th>
                    <th>Admin</th>
                    <th></th>
                </tr>
                <?php
					require ('database.php');
					$sql = "select * from taikhoan";
					$db=new database();
					$kq=$db->exec_sql($sql);
				?>
                <?php foreach ($kq as  $value) :?> 
                <tr>
                    <td><?php echo $value['TenDangNhap']?></td>
                    <td><?php echo $value['HoTen']?></td>
                    <td><?php echo $value['SDT']?></td>
                    <td><?php echo $value['Email']?></td>
                    <td><?php echo $value['GioiTinh']?></td>
                    <td><?php echo $value['MatKhau']?></td>
                    <td><?php echo $value['Admin']?></td>
                    <td>
                        <input type="submit" id="xoatk" value="Xóa" class="admininput btn btn-danger">
                        <input type="submit" id="suatk" value="Sửa" class="admininput btn btn-info">
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
        <?php 
        $tendn=""; $mk=""; $hoTen = ""; $email=""; $sdt=""; $gioiTinh="";
        $tendnLoi=""; $mkLoi=""; $hoTenLoi = ""; $emailLoi=""; $sdtLoi=""; $gioiTinhLoi="";
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
                $tendnLoi = "Chỉ nhập chữ cái"; 
              }
            }
            if (empty($_POST["mk"])) {
                $hienLoi = "block";  
                $mkLoi = "Phải nhập mật khẩu";
              } else {
                $mk = kiemTraDL($_POST["mk"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$mk)) {
                  $hienLoi = "block";
                  $mkLoi = "Chỉ nhập chữ cái"; 
                }
            }
            if (empty($_POST["hoTen"])) {
                $hienLoi = "block";  
                $hoTenLoi = "Phải nhập họ tên";
              } else {
                $hoTen = kiemTraDL($_POST["hoTen"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$hoTen)) {
                  $hienLoi = "block";
                  $hoTenLoi = "Chỉ nhập chữ cái"; 
                }
            }
            if (empty($_POST["email"])) {
                $hienLoi = "block";  
                $emailLoi = "Phải nhập email";
              } else {
                $email = kiemTraDL($_POST["email"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$email)) {
                  $hienLoi = "block";
                  $emailLoi = "Chỉ nhập chữ cái"; 
                }
            }
            if (empty($_POST["sdt"])) {
                $hienLoi = "block";  
                $sdtLoi = "Phải nhập số điện thoại";
              } else {
                $sdt = kiemTraDL($_POST["sdt"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9]*$/",$sdt)) {
                  $hienLoi = "block";
                  $sdtLoi = "Chỉ nhập chữ số"; 
                }
            }
            if (empty($_POST["gioiTinh"])) {
                $hienLoi = "block";  
                $gioiTinhLoi = "Phải chọn giới tính";
              } else {
                $gioiTinh = kiemTraDL($_POST["gioiTinh"]);
            }

        }
    ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 style="margin-left:195px;margin-top:10px;">
                    Thêm tài khoản
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
                        <input type="password" class="form-control" name="mk" />
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $mkLoi;
                        ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label >
                            Họ và tên
                        </label>
                        <input type="password" class="form-control" name="hoTen"/>
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $hoTenLoi;
                        ?>
                    </div>
                    <div class="form-group">

                        <label for="">
                            Email
                        </label>
                        <input type="email" class="form-control" name="email" />
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $emailLoi;
                        ?>
                    </div>
                    <div class="form-group">
                        <label>
                            Số điện thoại
                        </label>
                        <input type="text" class="form-control" name="sdt" />
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $sdtLoi;
                        ?>
                    </div>
                    <div class="form-group">
                        <label>
                            Giới tính
                        </label><br/>
                        <input type="radio" name="gioiTinh" checked value="Nam" />Nam
                        <input type="radio" name="gioiTinh" value="Nữ" />Nữ<br/>
                        <div class="alert alert-dismissable alert-danger" style="display: <?php echo $hienLoi; ?>;">
                        <?php 
                            echo $gioiTinhLoi;
                        ?>
                    </div>
                    <button type="submit" class="admininput btn btn-success">
                        Thêm
                    </button>
                </form>
        </div>
    </div>
    </div>
</body>

</html>