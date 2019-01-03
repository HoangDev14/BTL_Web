<!DOCTYPE html>
<html lang="en">

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
								<a class="nav-link" href="dichvusanbay.php">Đến sân bay</a>
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
				<div class="idanh" style="background-image:url(../images/anhbiadv.png); margin-top: 10px; height: 300px;	">
					<div class="body" style="height: 450px; width: 1000px;">
						<h1 style="text-align:center; color: white;">Đến sân bay không còn mệt mỏi</h1>
						<p style="text-align:center; color: white;">Biến chuyến đi đến và từ sân bay đi trở nên tiện lợi nhất có thể!</p>
						<p style="text-align:center; color: white; "> Với nhiều lựa chọn phương tiện phù hợp với nhu cầu của bạn</p>
						<p style="text-align:center; color: white;"> Hãy đặt ngay xe đưa đón sân bay hôm nay để bớt đi một nỗi lo nhé.</p>
					</div>
				</div>
				<div class="main_top " style="background: #CEF6F5;">
					<div class="card" style="margin-left: 200px; margin-right: 200px; background-color: #F2F2F2;">
						<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-left: 619px;">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="navbar-toggler-icon"></span>
							</button> <a class="navbar-brand" href="#">Tìm xe</a>
							<form class="form-inline">
								<input class="form-control mr-sm-2" type="text" />
								<button class="btn btn-primary my-2 my-sm-0" type="submit">
									Search
								</button>
							</form>
						</nav>

						<div class="card-header">
							<a class="card-link" data-toggle="collapse" data-parent="#card-376831" href="#card-element-644927" style="color: black;">Đặt
								xe</a>
						</div>
						<div id="card-element-644927" class="collapse show">
							<div class="card-body">
								<form>
									<h1>Đặt xe</h1>
									<input placeholder="vị trí của bạn " type="text" required="">
									<input placeholder="điểm đến " type="text" required="">
									<input placeholder="chọn kiểu xe" type="text" required="">
									<input placeholder="Tên người đặt " type="text" required="">
									<input placeholder="SDT" type="text" required="">
									<button style="margin-top: 5px; color: white; height: 40px; width: 157.5px; background-color: blue;">Đặt
									</button>
								</form>
							</div>
						</div>

					</div>
				</div>
				<div class="main_up" style="background: #CEF6F5; margin-top: 5px; height: 320px;">
					<strong style="margin-left:370px; font-size: 30px;">Tại sao tôi nên đặt xe đưa đón sân bay qua StarBook?</strong>

					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-4">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
											<div class="card-block">
												<h5 class="card-title" style="text-align: center;">
													Phù hợp với nhu cầu
												</h5>
												<p class="card-text" style="text-align: center;">
													Với nhiều lựa chọn từ xe riêng đến xe buýt sân bay, bạn có thể dễ dàng tìm lựa chọn phương tiện đến sân
													bay phù hợp nhất.
												</p>

											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
											<div class="card-block">
												<h5 class="card-title" style="text-align: center;">
													Không cần lo lắng
												</h5>
												<p class="card-text" style="text-align: center;">
													Đặt trước để không phải xếp hàng tại sân bay. Giá cuối cùng đã bao gồm phí cầu đường và đậu xe, bạn không
													cần phải lo lắng phải trả thêm phí.
												</p>

											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card">
											<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
											<div class="card-block">
												<h5 class="card-title" style="text-align: center;">
													Đối tác tốt nhất
												</h5>
												<p class="card-text" style="text-align: center;">
													Tự thoải mái của bạn là ưu tiên của chúng tôi. Vì thế, chúng tôi luôn chọn làm việc cùng những đối tác có
													nhiều kinh nghiệm tốt nhất trên thị trường.
												</p>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="main_down" style="background: #CEF6F5; margin-top: 5px;">
					<h2 style="margin-left: 600px;"> Đối tác của chúng tôi</h2>

					<br>

					<div class="row">
						<div class="column">
							<div class="card">
								<img src="../images/group.png" alt="Jane" style="width:437px;">
								<div class="container">
									<h2>Hãng: Groupby</h2>
									<p class="title">ôtô 4 chỗ & ôtô 5 chỗ</p>
									<p> chúng tôi phục vụ mọi lúc mọi nơi khi có đặt đạt xe</p>
									<p>example@example.com</p>

								</div>
							</div>
						</div>

						<div class="column">
							<div class="card">
								<img src="../images/mailinh.jpg" alt="Mike" style="width:450px;">
								<div class="container">
									<h2>Hãng: Mai Linh</h2>
									<p class="title">ôtô 4 chỗ & ôtô 5 chỗ</p>
									<p>chúng tôi phục vụ mọi lúc mọi nơi khi có đặt đạt xe</p>
									<p>example@example.com</p>

								</div>
							</div>
						</div>
						<div class="column">
							<div class="card">
								<img src="../images/basao.jpg" alt="John" style="width:440px;">
								<div class="container">
									<h2>Hãng: Grapby</h2>
									<p class="title">ôtô & xe máy</p>
									<p>chúng tôi phục vụ mọi lúc mọi nơi khi có đặt đạt xe.</p>
									<p>example@example.com</p>

								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="main" style="background: #CEF6F5; margin-top: 5px;">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<h3 style="margin-left: 500px;">
									Trải nghiệm chuyến đi suôn sẻ
								</h3>
								<p style="text-align: center;">
									Di chuyển đến sân bay
									Gần đến giờ bay, hẳn bạn không thể mạo hiểm trễ giờ đúng không? Đặt trước xe đưa đón sân bay và bỏ đi một gạch
									đầu dòng trong danh sách việc cần làm trước chuyến đi ngay hôm nay!

									Chỉ kết hợp với các nhà cung ứng dịch vụ chuyên chở riêng và công cộng đáng tin cậy, Traveloka bảo đảm bạn sẽ
									đến sân bay đúng giờ. Hãy để nỗi lo của bạn cho chúng tôi!
								</p>


								<ol style="margin-left: 470px;">
									<p style="margin-left: 40px;"> Các lợi ích</p>
									<li class="list-item">
										Có sẵn 24 giờ.
									</li>
									<li class="list-item">
										Tài xế luôn đợi bạn dù chuyến bay có bị hoãn.
									</li>
									<li class="list-item">
										Không cần phải xếp hàng ở sân bay
									</li>
									<li class="list-item">
										Điểm đón xe an toàn và tiện lợi
									</li>
									<li class="list-item">
										Đưa bạn đến chính xác điểm đến
									</li>
									<li class="list-item">
										Giá cuối cùng - đã bao gồm phí tài xế, xăng xe, cầu đường, đậu xe, và thuế.
									</li>
									<li class="list-item">
										Giờ xuất phát phù hợp với lịch trình chuyến bay.
									</li>
									<li class="list-item">
										Điểm xuống xe linh hoạt.

									</li>
								</ol>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<div class="footer" style="margin-top: 5px;">

		<footer style="background-color: #303030;height: 300px; color: white; width: 1500px;margin-left: 10px;" class="page-footer font-small mdb-color lighten-3 pt-4">

			<!-- Footer Links -->
			<div class="container1 text-center text-md-left">

				<!-- Grid row -->
				<div class="row">

					<!-- Grid column -->
					<div class="col-md-3 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1" style="margin-left: 50px;">

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
									<i class="fa fa-home mr-3"></i>Số 50 Từ Hoa Công Chúa, Hà Nội</p>
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
					<div class="footerr footer-copyright text-center " style="margin-right: 50px;">© 2018Copyright:
						<a href="https://mdbootstrap.com/education/bootstrap/"> StarBook</a>
					</div>
					<!-- Copyright -->

				</div>
				<!-- Grid row -->

			</div>
			<!-- Footer Links -->


		</footer>
		<!-- Footer -->

	</div>

</body>

</html>