<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('ShopModule.shop', 'Categories')=>array('index'),
	$model->title,
);

?>

<div class="container">
	<div class="box featured">
		<div class="box-content">
			<ul class="breadcrumb">
				<li><a>Trang chủ</a> <span class="divider"></span></li>
				<li><a><?php echo $model->title; ?></a> <span class="divider"></span></li>
			</ul>
			<div class="box-product">
				<div class="items">
					<?php
						foreach($model->Products as $product) {
								$this->renderPartial('/products/_view', array('data' => $product));
						}
					?>
				</div>
			</div>
			
		</div>
		<div class="sep-bor"></div>
	</div>
</div>

<div class="cart" >
	<div class="cart_right">
	<!-- Start quang cao-->
	<a href="<?php echo $this->createUrl('//shop/shoppingCart/view') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cart/shopcart.png" width="90px" height="90px"/>Mua ngay</a>
	 
	<!-- End quang cao -->
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
										<h5><a href="#">Quần / Quần soóc</a></h5>
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
										<h5><a href="#">Áo Sơ Mi</a></h5>
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

<div class="float-ck" >
	<div id="hide_float_right">
		<a href="javascript:hide_float_right()">Tắt quảng cáo [X]</a>
	</div>
	<div id="float_content_right">
	<!-- Start quang cao-->
	<a href="http://www.fashionmagazine.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/31.gif" title="Click me"/></a>
	 
	<!-- End quang cao -->
	</div>
	<script type="text/javascript">
	function hide_float_right() {
		var content = document.getElementById('float_content_right');
		var hide = document.getElementById('hide_float_right');
		if (content.style.display == "none")
		{
			content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Táº¯t quáº£ng cÃ¡o [X]</a>'; }
			else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem quáº£ng cÃ¡o...</a>';
		}
    }
	</script>
</div>