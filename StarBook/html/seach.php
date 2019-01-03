

<?php
include('database.php');
$db=new Database;
?>
<!DOCTYPE html>
<html>

<head>
	<title>StarBook vé bay</title>
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
					</button> <a class="navbar-brand" href="trangchu.html" style="font-size: 23px;"><img src="../fav_star.ico" />StarBook</a>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Khách Sạn <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#">Vé Bay</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#">Đến sân bay</a>
							</li>
						</ul>


						<ul class="navbar-nav ml-md-auto">
							<a  style="color: white;background: blue;" href="phplogin/logout.php" class="btn btn-secondary">Đăng xuất</a>
						</ul>

					</div>
				</nav>

			</div>
			<div class="col-md-6">
				<img src="../images/plane1.jpg" style="width: 673px; height: 400px;">
			</div>
			<div class="col-md-6">
				<img src="../images/plane2.jpg" style="width: 644px; height: 400px;">
			</div>
			<br><br>
		</div>
		<br />

		<div class="row">
			<div class="col-md-3"></div>
			<div style="margin-left: 350px;">
				<form name="seach" method="GET" action="seach.php"> 
					<input type="text" name="batdau" value="" placeholder="nhập điểm xuất phát">
					<input type="text" name="dich" value="" placeholder="nhập điểm đến ">
					<input type="submit" name="submit" value="tìm kiếm">
					<a href=""> quay về</a>
				</form>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="center"> 
				<div class="box_seach">
					<div class="box_seach_top" style="margin-left: 250px;"> Danh sách tìm kiếm</div>
					<div class="box_seach_main">
						<div class="row" style="margin-left: 195px; border: solid 5px white; background-color: white; width: 1000px; margin-left: 250px;">
							<label style="margin-left: 135px;">Điểm khởi hành</label>
							<label style="margin-left: 70px;">Điểm đến</label>
							<label style="margin-left: 85px;">Giờ Cất Cánh</label>
							<label style="margin-left: 85px;">Giờ Đến</label>
							<label style="margin-left: 100px;">Ngày</label>
						</div>
						<div>

							<br>
							<?php
							if (isset($_REQUEST['submit'])) {
							if(isset($_GET['batdau'],$_GET['dich']))
							{
									$batdau=$_GET['batdau'];
								$dich=$_GET['dich'];

								if(empty($batdau)&&empty($dich))
								{
									echo "<p style='color:blue; margin-left:350px;'> Bạn cần nhâp thông tin vào ô tìm kiếm </p>";
								}
								else
								{
									$sql = "SELECT * FROM vebay WHERE DiemDen like '%".$dich."%' and DiemKH like '%".$batdau."%'";
		
									$kq=$db->exec_sql($sql); 
									if(empty($kq))
									{
										echo(' <h1 style="margin-left:450px; color:blue;">Không Có Kết Quả Nào Phù Hợp!</h1>');
									}
									else
									{
										?>
										 
											<div class="row" style="margin-left: 15px; width: 1500px;">
												<?php  foreach ($kq as $value) :?>
												<div class="col-md-2" style="">
												</div>

												<div class="col-md-8 row hove" style="cursor: pointer;height: 180px;" onclick="window.location='file:///C:/xampp/htdocs/StarBook/html/trangchu.html';">
													<div>

														<img src="../images/<?php echo $value['Anh'];?>" alt=""> 
														<label style="margin-left: 55px;"><?php echo $value['DiemKH'] ?></label>
														<label style="margin-left: 110px;"><?php echo $value['DiemDen'] ?></label>
														<label style="margin-left: 85px;"><?php echo $value['CatCanh'] ?></label>
														<label style="margin-left: 85px;"><?php echo $value['HaCanh'] ?></label>
														<label style="margin-left: 80px;"><?php echo $value['NgayBay'] ?></label>
													</div>
													<div style="margin-left: 10px;">
														<h4 style="margin-left: 850px;;color:orange;"><?php echo $value['GiaTien'] ?></h4>
														<input type="submit" class="btn btn-success" style="width:90px; margin-left: 850px;" value="Chọn">
													</div>

												</div>
												<div class="col-md-2" style="">
												</div>
	                                            <?php endforeach?>
											<?php
										}
                                       }
									}
								}
								?>

							</div>

						</div>
					</div>
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

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1477.6138072377612!2d105.82936580635673!3d21.058538729308044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1544069660195" width="450" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>

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
