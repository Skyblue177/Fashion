<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<!-- Title here -->
	<title>Thiên Vũ</title>
	<!-- Description, Keywords and Author -->
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your,Keywords">
	<meta name="author" content="ResponsiveWebInc">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>
	
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<!-- Animate css -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animate.min.css" />
	<!-- Dropdown menu -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ddlevelsmenu-base.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ddlevelsmenu-topbar.css" />
	<!-- Countdown -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.countdown.css" />     
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" />
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/shop.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/cloudzoom.css" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.gif">
	
</head>

<body>


<!-- Logo & Navigation starts -->
      
<div class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-2">
			  <!-- Logo -->
				<div class="logo">
					<h1><a href="<?php echo $this->createUrl('/site/index')?>">Fashion</a></h1>
				</div>
			</div>
			<div class="col-md-6 col-sm-5">
			  <!-- Navigation menu -->
				<div class="navi">
					<div id="ddtopmenubar" class="mattblackmenu">
						<ul>
							<li><a href="<?php echo $this->createUrl('/site/index')?>">Trang chủ</a></li>
							<li><a href="<?php echo $this->createUrl('/shop/products/index')?>">Sản phẩm</a></li>
							<li><a href="#" rel="ddsubmenu1">Thời trang</a>
								<ul id="ddsubmenu1" class="ddsubmenustyle">
									<h4>Nam</h4>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/1') ?>">Áo khoác & Áo</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/2') ?>">Hoodies & Sweatshirts</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/3') ?>">Áo thun</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/4') ?>">Áo Sơ Mi</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/5') ?>">Áo Len</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/6') ?>">Suit & Blazers</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/7') ?>">Quần & Quần Soóc</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/8') ?>">Jean</a></li>
									
									<h4>Nữ</h4>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/9') ?>">Áo kiểu</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/10') ?>">Áo khoác</a></li>
									<li><a href="<?php echo $this->createUrl('/shop/category/view/id/11') ?>">Váy đầm</a></li>
								</ul>
							</li>
							<li><a href="<?php echo $this->createUrl('/post/index')?>">News</a></li>
							<li><a href="#" rel="ddsubmenu1">Tư vấn</a>
								<ul id="ddsubmenu1" class="ddsubmenustyle">
									<li><a href="<?php echo $this->createUrl('/site/faq')?>">Giới thiệu</a></li>
									<li><a href="<?php echo $this->createUrl('/review/index')?>">Tư vấn cho khách hàng</a></li>
									<li><a href="<?php echo $this->createUrl('/site/gifts')?>">Quà tặng</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				

				<!-- Dropdown NavBar -->
				<div class="navis"></div>                  
			  
		   </div>
		   
		   <div class="col-md-4 col-sm-5">
				<div class="kart-links">
					<?php if(Yii::app()->user->isGuest){
						
						echo CHtml::link('Đăng ký', array('/user/registration/'),array('class'=>'fa fa-sign-in'));
						echo CHtml::link('Đăng nhập', array('/user/login/'),array('class'=>'fa fa-sign-in'));
					?>
					<?php }else{
						
						echo CHtml::link(Yii::app()->user->name, array('/user/profile'),array('class'=>'fa fa-user'));
						
						echo CHtml::link('Đăng xuất', array('/user/logout'),array('class'=>'fa fa-sign-out'));
					}?>
				</div>
		   </div>
		</div>
	</div>
</div>

<!-- Logo & Navigation ends -->
<div class="clearfix"></div>

<?php echo $content; ?>



<!-- Catchy starts -->
<div class="catchy blocky">
	<div class="catchy-inner1">
		<div class="catchy-inner2">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="catchy-subscribe">
							<h3>Tham gia!</h3>
							<p>Bạn có thể mua sắm thoải mái trên Thiên Vũ mà không có bất kỳ lo lắng nào,hãy gọi ngay tới bộ phận chăm sóc khách hàng 123-456-7890 hoặc email: taixng@gmail.com để có được những giải đáp chi tiết và tận tình nhất. </p>
							<br />
						   <form class="form-inline" role="form">
							 <div class="form-group">
							   <input type="text" class="form-control " id="exampleInputEmail2" placeholder="Enter your email">
							 </div>
							 <button type="submit" class="btn btn-danger">Subscribe</button>
						   </form>

						</div>
					</div>
					<div class="col-md-7">
			 
						<div class="report">
							<div class="report-bor">
								<div class="row">
									<!-- Report data starts -->
									<div class="col-md-4 col-sm-4">
										<div class="report-data">
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-4">
												 <!-- Icon -->
													<div class="report-icon">
														<i class="icon-group color"></i>
													</div>
												</div>
												<div class="col-md-8 col-md-8 col-xs-8">
													<!-- Details -->
													<span class="report-big color">40,000</span> <span>Khách hàng</span>
												</div>
										   </div>
										</div>
									</div>
									<!-- Report data ends -->
						 
									 <!-- Report data starts -->
									<div class="col-md-4 col-sm-4">
										<div class="report-data">
											<div class="row">
												<div class="col-md-4 col-sm-4 col-xs-4">
													<!-- Icon -->
													<div class="report-icon">
														<i class="icon-calendar color"></i>
													</div>
												</div>
												<div class="col-md-8 col-md-8 col-xs-8">
													<!-- Details -->
													<span>Ká»ƒ tá»«</span><span class="report-big color">2008</span>
												</div>
										   </div>
										</div>
									</div>
									<!-- Report data ends -->

									<!-- Report data starts -->
									<div class="col-md-4 col-sm-4">
										<div class="report-data">
										   <div class="row">
											  <div class="col-md-4 col-sm-4 col-xs-4">
												 <!-- Icon -->
												 <div class="report-icon">
													<i class="icon-android color"></i>
												 </div>
											  </div>
											  <div class="col-md-8 col-md-8 col-xs-8">
												 <!-- Details -->
												 <span class="report-big color">30,000</span> <span>Doanh thu</span>
											  </div>
										   </div>
										</div>
									</div>
									<!-- Report data ends -->
										 
								</div>
						  
								<hr class="hidden-xs">
						  
								<div class="row">
									 
									<!-- Report data starts -->
										<div class="col-md-4 col-sm-4">
											<div class="report-data">
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<!-- Icon -->
														<div class="report-icon">
															<i class="icon-building color"></i>
														</div>
													</div>
													<div class="col-md-8 col-md-8 col-xs-8">
														<!-- Details -->
														<span class="report-big color">150 +</span> <span>Công ty</span>
													</div>
												</div>
											</div>
										</div>
									<!-- Report data ends -->
							 
									<!-- Report data starts -->
										<div class="col-md-4 col-sm-4">
											<div class="report-data">
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<!-- Icon -->
														<div class="report-icon">
															<i class="icon-signal color"></i>
														</div>
													</div>
													<div class="col-md-8 col-md-8 col-xs-8">
														<!-- Details -->
														<span class="report-big color">70.60%</span> <span>Tăng trưởng</span>
													</div>
											   </div>
											</div>
										 </div>
									<!-- Report data ends -->

									<!-- Report data starts -->
										<div class="col-md-4 col-sm-4">
											<div class="report-data">
												<div class="row">
													<div class="col-md-4 col-sm-4 col-xs-4">
														<!-- Icon -->
														<div class="report-icon">
															<i class="icon-truck color"></i>
														</div>
													</div>
													<div class="col-md-8 col-md-8 col-xs-8">
														<!-- Details -->
														<span class="report-big color">100 +</span> <span>Nhân viên</span>
													</div>
												</div>
											</div>
										</div>
									<!-- Report data ends -->
							 
								</div>
						  
							</div>
						</div> 
			 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>      
<!-- Catchy ends -->           
      
<!-- CTA Starts -->
<div class="blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="cta">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<h5><i class="icon-angle-right"></i> Chúc quý khách mua sắm vui vẻ tại  <span class="color">Thiên Vũ</span></h5>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="cta-buttons pull-right">
								<a href="#" class="btn btn-info btn-lg">Download</a> &nbsp; <a href="#" class="btn btn-danger btn-lg">Get It Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>               
		</div>
	</div>
</div>
<!-- CTA Ends -->
      
<!-- Clients starts -->
<div class="clients blocky">
	<div class="container">
		  
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/amazon-f.png" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/google-f.png" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/facebook-f.png" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/twitter-f.png" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/skype-f.png" alt="" class="img-responsive" />
				</div>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<div class="client">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/client/youtube-f.png" alt="" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Clients ends -->
      
<!-- Footer starts -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="fwidget">
				   
					<h4>Dịch vụ<span class="color"> hỗ trợ</span> khách hàng</h4>
					<hr />
					<p>Quý khách hàng có thể tìm hiểu thêm về shop thời trang Thiên Vũ thông qua các mạng xã hội.Mọi thông tin chi tiết xin liên hệ 123-456-7890 gọi cho chúng tôi để được tư vấn,Thiên Vũ mong nhận được sự đóng góp của quý khách.<a href="<?php echo $this->createUrl('/site/contact')?>"> Gmap </a></p>
					  
					<div class="social">
						<a href="#" class="facebook"><i class="icon-facebook"></i></a>
						<a href="#" class="twitter"><i class="icon-twitter"></i></a>
						<a href="#" class="google-plus"><i class="icon-google-plus"></i></a>
						<a href="#" class="linkedin"><i class="icon-linkedin"></i></a>
						<a href="#" class="pinterest"><i class="icon-pinterest"></i></a>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="fwidget">
					<h4>Thời trang</h4>
					<hr />
					<ul>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/1') ?>">Áo khoác & Áo</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/2') ?>">Hoodies & Sweatshirts</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/3') ?>">Áo Sơ Mi</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/4') ?>">Áo Thun</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/5') ?>">Áo Len</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/6') ?>">Suit & Blazers</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/7') ?>">Quần & Quần Soóc</a></li>
						<li><a href="<?php echo $this->createUrl('/shop/category/view/id/8') ?>">Jean</a></li>
					</ul>
				</div>
			</div>        

			   

			<div class="col-md-4 col-sm-4">
				<div class="fwidget">
			   
					<h4>Địa chỉ</h4>
					<hr />
					<div class="address">
						<p><i class="icon-home color contact-icon"></i> 12, Nguyễn Văn Quá, Q12, Hồ Chí Minh</p>
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Chi nhánh</p>
						<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 216B, Bạch Đằng, Bình Thạnh, Hồ Chí Minh</p>
						<p><i class="icon-phone color contact-icon"></i> 123-456-7890</p>
						<p><i class="icon-envelope color contact-icon"></i> <a href="mailto:something@gmail.com">taixng@gmail.com</a></p>
					</div>
			   
				</div>
			</div>

		</div>
		<hr />
	
		<div class="copy text-center">
		   Copyright 2013 &copy; - <a href="http://responsivewebinc.com/bootstrap-themes">Thien Vu</a>
		</div>
	</div>
</footer>
<!-- Footer ends -->






<!-- Javascript files -->
<!-- jQuery -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

<!-- Dropdown menu -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/ddlevelsmenu.js"></script>
   
<!-- CaroFredSel -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- Countdown -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.countdown.min.js"></script>  
<!-- jQuery Navco -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.navgoco.min.js"></script>
<!-- Filter for support page -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/filter.js"></script>     
<!-- Respond JS for IE8 -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>

<!-- Custom JS -->
<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>

<script type="text/javascript"src="<?php echo Yii::app()->request->baseUrl; ?>/js/cloudzoom.js"></script>

<!-- Call quick start function. -->
<script type="text/javascript">
	CloudZoom.quickStart();
</script> 

</body>
</html>
