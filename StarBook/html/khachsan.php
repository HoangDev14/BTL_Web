<!DOCTYPE html>
<html>
<head>
	<title>StarBook Tìm Khách Sạn</title>
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
	<div class="container-fluid" style="background-color: #e8e8e8;">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="navbar-toggler-icon"></span>
					</button> <a class="navbar-brand" href="trangchu.html" style="font-size: 23px;"><img src="../fav_star.ico"/>StarBook</a>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Khách Sạn <span class="sr-only">(current)</span></a>
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
								<button class="nutdangnhap" onclick="document.getElementById('modal-wrapper').style.display='block'">Đăng nhập
								</button>
								<div id="modal-wrapper" class="modal">

									<form class="modal-content animate" action="/action_page.php">

										<div class="imgcontainer">
											<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
											<img src="../images/signup.png" alt="Avatar" class="avatar">
											<h1 style="text-align:center">Đăng Nhập</h1>
										</div>

										<div class="container">
											<input class="signup" type="text" placeholder="Tên Đăng Nhập" name="uname">
											<input class="signup"  type="password" placeholder="Mật Khẩu" name="psw">      
											<button class="nutdangnhap" type="submit" style="width: 90%; margin-left: 26px; height: 50px;">Đăng Nhập</button>
											<input type="checkbox" style="margin:26px 30px;"> Lưu mật khẩu      
											<a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Quên mật khẩu ?</a>
										</div>

									</form>

								</div>

							</li>
						</ul>
					</div>
				</nav>

			</div>
			<div id="carouselExampleControls" class="col-md-12 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carouselExampleControls" class="active">
					</li>
					<li data-slide-to="1" data-target="#carouselExampleControls">
					</li>
					<li data-slide-to="2" data-target="#carouselExampleControls">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item  slidee ">
						<br/>
						<img class="d-block w-100" src="../images/banner.png" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
					<div class="carousel-item slidee">
						<img class="d-block w-100" src="../images/ks1.png" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>King Plaza</h2>
						</div>
					</div>
					<div class="carousel-item active slidee">
						<img class="d-block w-100" src="../images/danangslide.png" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h2>Đà Nẵng</h2>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<br><br>
		</div>
		<br/>
		<div class="row">
			
			<div class="col-md-4" style="position: sticky;">
				<div class="khoi">
					<button class="nutdangnhap nuttimkiem">Tìm theo thành phố</button>
					<input class="timttp" type="text" name="timtheotp">
					<br/>
					<button class="nutdangnhap nuttimkiem">Tìm theo tên</button>
					<input class="timttp" type="text" name="timtheoten">
				</div>
				<div class="khoi" style="padding-left: 18px;">
					<h4>Sắp xếp kết quả</h4>
					<input type="radio" name="giacaonhat"> Giá giảm dần  <i class="fa fa-arrow-down" style="color: green;"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" name="giacaonhat"> Giá tăng dần  <i class="fa fa-arrow-up" style="color: red;"></i>
				</div>
				<div class="khoi" style="padding-left: 18px;padding-right: 18px;">
					<h4>Khoảng giá</h4>
					<input type="range" min="200000" max="10000000" value="50" class="slider" step="10000" id="myRange">
					<p>Từ 0 đến: <span id="giaks"></span></p>
				</div>
				<div class="khoi" style="padding-left: 10px;">
					<h4>Hạng sao</h4>
					<input type="checkbox" style="height: 20px; margin-right: 10px;"><i class="fa fa-star fa-2x star"></i>
					<br>
					<input type="checkbox" style="height: 20px; margin-right: 10px;"><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i>
					<br>
					<input type="checkbox" style="height: 20px; margin-right: 10px;"><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i>
					<br>
					<input type="checkbox" style="height: 20px; margin-right: 10px;"><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i>
					<br>
					<input type="checkbox" style="height: 20px; margin-right: 10px;"><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i><i class="fa fa-star fa-2x star"></i>
					<br>
				</div>
			</div>
			<div class="col-md-8">

				<?php
					require ('database.php');
					$sql = "select * from khachsan";
					$db=new database();
					$kq=$db->exec_sql($sql);
				?>

				<?php foreach ($kq as  $value) :?> 
				
				<div class="row hove" style="width: 885px; cursor: pointer;" onclick="window.location='file:///C:/xampp/htdocs/StarBook/html/trangchu.html';">
				
				<div class="">
						<img class="anhks" src="../images/<?php echo ($value['Anh'])?>">
						
					</div>
					<div class="ttks">
						<h3>&nbsp;&nbsp;<?php echo $value['TenKS'] ?></h3>
						<i class="fa fa-map-marker fa-lg"><?php echo $value['DiaChi'] ?></i>
						<span style="display: block;">
								<?php 
									for($i=0;$i<$value['SoSao'];$i++)
									{
										echo "<i class='fa fa-star fa-lg star'></i>";
									}
								?>
						</span>
						<p style="font-size:15px;">
						<?php echo $value['MoTa'] ?>
						</p>
							<h3 class="giatien">
							<?php echo number_format($value['GiaPhong'],0,'','.')?>
							<u>&#273;</u></h3>
						</div>
					</div>
				
				<?php endforeach ?>
				
				
			</div>
		</div>
	</div>
	
<!-- <script>var slider = document.getElementById("myRange");
var output = document.getElementById("giaks");

slider.oninput = function gia() {
output.innerHTML = slider.value;
  output.innerHTML = this.value;
}</script> -->
</body>
</html>