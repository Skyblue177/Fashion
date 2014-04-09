<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>

<div class="blocky">
    <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="reg-login-info">
					<h2>Đăng nhập để có những trải nghiệm tuyệt vời <span class="color">!!!</span></h2>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/carousel/back1.jpg" alt="" class="img-responsive img-thumbnail" />
					<p>Hãy đến cửa hàng của chúng tôi,quý khách sẽ có những phút giây thật sự thoải mái với đầy đủ các mẫu thời trang đang thịnh hành nhất hiện nay mẫu mã đẹp,chất lượng và phù hợp với túi tiền của quý khách.</p>
				</div>
			</div>
			<div class="col-md-6">
                <div class="register-login">
                    <div class="cool-block">
                        <div class="cool-block-bor">
							<h3><?php echo UserModule::t("Khôi phục"); ?></h3>

							<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
							<div class="success">
							<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
							</div>
							<?php else: ?>

							<div class="form-horizontal" role="form">
							<?php echo CHtml::beginForm(); ?>

								<?php echo CHtml::errorSummary($form); ?>
								
								<div class="form-group">
									<?php echo CHtml::activeLabel($form,'login_or_email',array('class'=>'col-lg-4 control-label')); ?>
									<?php echo CHtml::activeTextField($form,'login_or_email',array('class'=>'form-control')) ?>
								</div>
								
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<?php echo CHtml::submitButton(UserModule::t("Restore"),array('class'=>'btn btn-info')); ?>
									</div>
								</div>

							<?php echo CHtml::endForm(); ?>
							</div><!-- form -->
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>

<div class="recent-posts blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Section title -->
				<div class="section-title">
					<h4><i class="icon-desktop color"></i> &nbsp;Whats New in Our Company</h4>
				</div>    
		  
				<div class="row">
					<div class="col-md-12">
						<div class="my_carousel">
				
						   <div class="carousel_nav pull-right">
							   <!-- Carousel navigation -->
							   <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
							   <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
						   </div>
				  
						   <ul id="carousel_container">
							  <!-- Carousel item -->
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/1.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo khoác & Áo</a></h5>
										<p>Stylish Double Breasted Overcoat Men Long Trench Winter Coat</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $29.99</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/2.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Hoodies & Sweatshirt</a></h5>
										<p>Men's Slim Mixed Colors Jackets Sweatshirts</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $17.89</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/3.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo Thun</a></h5>
										<p>2013 Men's Stylish Casual Formal Slim Fit Short Sleeve T-Shirts</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $11.55</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/4.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Quần / Quần soóc</a></h5>
										<p>Men's Fashion Casual Cotton Skinny Straight Long Pants Trousers</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $11.39</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/5.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo sơ mi</a></h5>
										<p>2013 Mens Casual Slim Fit Stylish Long Sleeve Dress Shirtsp>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $12.98</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/6.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Jean</a></h5>
										<p>Mens Cotton Casual Jeans Drape Straight Blue Jeans </p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $23.26</a>
									</div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>