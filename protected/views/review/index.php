<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
);
?>

<div class="about-us blocky">
	<div class="container">
		<div class="row">
			<div class="about-team">
				<h3>
					<i class="icon-group color"></i>
					Đội ngũ của chúng tôi
				</h3>
				<hr>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="staff">
							<div class="pic">
							<img class="img-responsive" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/operating/1.jpg">
							</div>
							<div class="details">
								<div class="desig pull-left">
									<p class="name"> Lee Chae Rin</p>
									<em>Chủ cửa hàng Thiên Vũ</em>
								</div>
								<div class="asocial pull-right">
									<a href="#">
										<i class="icon-facebook"></i>
									</a>
									<a href="#">
										<i class="icon-twitter"></i>
									</a>
									<a href="#">
										<i class="icon-linkedin"></i>
									</a>
								</div>
								<div class="clearfix"></div>
								<p class="adesc">
									Quản lý cửa hàng,kết hợp cùng các bộ phận khác lên kế hoạch phát triển cho cửa hàng và ký kết hợp đồng với các bên liên quan...
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="staff">
							<div class="pic">
								<img class="img-responsive" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/operating/2.jpg">
							</div>
							<div class="details">
								<div class="desig pull-left">
									<p class="name">Park Bom</p>
									<em>Nhân viên kế toán</em>
								</div>
								<div class="asocial pull-right">
									<a href="#">
										<i class="icon-facebook"></i>
									</a>
									<a href="#">
										<i class="icon-twitter"></i>
									</a>
									<a href="#">
										<i class="icon-linkedin"></i>
									</a>
								</div>
								<div class="clearfix"></div>
								<p class="adesc">
									Cập nhật các hoá đơn bán hàng, bao gồm hoá đơn bán hàng hoá và hoá đơn bán dịch vụ...
								</p>
								</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="staff">
							<div class="pic">
								<img class="img-responsive" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/operating/3.jpg">
							</div>
							<div class="details">
								<div class="desig pull-left">
									<p class="name"> Sandara Park</p>
									<em>Nhân viên tư vấn</em>
								</div>
								<div class="asocial pull-right">
									<a href="#">
										<i class="icon-facebook"></i>
									</a>
									<a href="#">
										<i class="icon-twitter"></i>
									</a>
									<a href="#">
										<i class="icon-linkedin"></i>
									</a>
								</div>
								<div class="clearfix"></div>
								<p class="adesc">
									Tiếp đón khách hàng đến cửa hàng, chủ động tìm hiểu nhu cầu của khách và tư vấn cho khách các thông tin về hàng hoá, dịch vụ khi khách có yêu cầu...
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="staff">
							<div class="pic">
								<img class="img-responsive" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/operating/4.jpg">
							</div>
							<div class="details">
								<div class="desig pull-left">
									<p class="name">Gong Min Ji.</p>
									<em>Nhân viên bán hàng</em>
								</div>
								<div class="asocial pull-right">
									<a href="#">
										<i class="icon-facebook"></i>
									</a>
									<a href="#">
										<i class="icon-twitter"></i>
									</a>
									<a href="#">
										<i class="icon-linkedin"></i>
									</a>
								</div>
								<div class="clearfix"></div>
								<p class="adesc">
									Các nhân viên có nhiệm vụ luôn chăm chút hàng hoá, giữ gìn vệ sinh sản phẩm, hướng dẫn khách hàng xem, kiểm tra sản phẩm đúng cách...
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id="tab3" class="tab-pane fade active in">
				
				<h3>Phản hồi của khách hàng :</h3>
				<hr>
				<h5>
					<strong> Viết bài đánh giá <a href="<?php echo $this->createUrl('/review/create') ?>">ở đây</a>. Hãy để chúng tôi tư vấn cho bạn</strong>
				</h5>
				<hr>
				<div class="item-review">
					<?php $this->widget('zii.widgets.CListView', array(
						'dataProvider'=>$dataProvider,
						'itemView'=>'_view',
						'ajaxUpdate'=>false,
						'id'=>'My-grid',
						'pager'=>array(
								'header'         => '',
								'firstPageLabel' => '&lt;&lt;',
								'prevPageLabel'  => 'Left',
								'nextPageLabel'  => 'Right',
								'lastPageLabel'  => '&gt;&gt;',
						),
						'template'=>'{items}{pager}',
					)); ?>
				</div>
				
			</div>
			<div class="sep-bor"></div>
		</div>
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


