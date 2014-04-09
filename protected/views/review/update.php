<div class="blocky">
	<div class="container">
		<div class="row">
		   <div class="col-md-6">
				<div class="reg-login-info">
					<?php
					/* @var $this ReviewController */
					/* @var $model Review */

					$this->breadcrumbs=array(
						'Reviews'=>array('index'),
						$model->name=>array('view','id'=>$model->id),
						'Update',
					);

					/*$this->menu=array(
						array('label'=>'List Review', 'url'=>array('index')),
						array('label'=>'Manage Review', 'url'=>array('admin')),
					);
					*/
					?>
					<h2><i class="icon-heart color"></i> Phản hồi của khách hàng</h2>
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/customer.jpg" alt="" class="img-responsive img-thumbnail" />
					<p>Hãy cho chúng tôi biết nhưng vấn đề mà quý khách quan tâm,hãy đến với chúng tôi để được tư vấn những gì tốt nhất,đội ngũ nân viên của chúng tôi sẽ làm hài lòng quý khách.Quý khách hàng có thể tìm hiểu thêm về shop thời trang Thiên Vũ thông qua các mạng xã hội.Mọi thông tin chi tiết xin liên hệ đường dây nóng 123-456-7890 hoặc hỏi đáp trực tiếp để được tư vấn,Thiên Vũ mong nhận được sự đóng góp của quý khách.</p>
				</div>
		   </div>
		   <div class="col-md-6">
			  <div class="register-login">
				 <div class="cool-block">
					<div class="cool-block-bor">
						<h3>Chỉnh sửa phản hồi</h3>
						<?php $this->renderPartial('_form', array('model'=>$model)); ?>
					</div>
				 </div>   
			  </div>
		   </div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>

<!-- Recent posts CarouFredSel Starts -->

<div class="recent-posts blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Section title -->
				<div class="section-title">
					<h4><i class="icon-desktop color"></i> &nbsp;Sản phẩm mới của cửa hàng chúng tôi</h4>
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
	
<!-- Recent posts Ends -->