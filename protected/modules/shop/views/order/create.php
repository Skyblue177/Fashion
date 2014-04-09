<div class="container">
	<?php
	$this->renderPartial('/order/waypoint', array('point' => 4));

	$this->breadcrumbs=array(
			Shop::t('Order')=>array('index'),
			Shop::t('New Order'),
			);
	?>

	<?php 
	Shop::renderFlash();
	echo CHtml::beginForm(array('//shop/order/confirm'));
	echo '<h2>'.Shop::t('Xác nhận').'</h2>';
	echo '<hr/>';

	if(Shop::getCartContent() == array())
		return false;

		// If the customer is not passed over to the view, we assume the user is 
		// logged in and we fetch the customer data from the customer table
	if(!isset($customer))
		$customer = Shop::getCustomer();
		$this->renderPartial('application.modules.shop.views.customer.view', array(
					'model' => $customer,
					'hideAddress' => true,
					'hideEmail' => true));
	echo '<br />';
	echo '<hr />';
					
					
	echo '<p>';
		$shipping = ShippingMethod::model()->findByPk(Yii::app()->user->getState('shipping_method'));
		echo '<strong>'.Shop::t('Phương thức giao hàng').': </strong>'.' '.$shipping->title.' ('.$shipping->description.')';
		echo '<br />';
		echo CHtml::link(Shop::t('Chỉnh sửa phương thức vận chuyển'), array(
				'//shop/shippingMethod/choose', 'order' => true));
				echo '</p>';


	echo '<p>';
		$payment = 	PaymentMethod::model()->findByPk(Yii::app()->user->getState('payment_method'));
		echo '<strong>'.Shop::t('Phương thức thanh toán').': </strong>'.' '.$payment->title.' ('.$payment->description.')';	
		echo '<br />';
		echo CHtml::link(Shop::t('Chỉnh sửa phương thức thanh toán'), array(
				'//shop/paymentMethod/choose', 'order' => true));
	echo '</p>';

	echo '<hr />';

	$this->renderPartial('application.modules.shop.views.shoppingCart.view'); 


	echo '<h3>'.Shop::t('Xin thêm ý kiến ​​bổ sung cho các đơn đặt hàng ở đây').'</h3>'; 

	echo CHtml::textArea('Order[Comment]',
			@Yii::app()->user->getState('order_comment'), array('style'=>'width:600px; height:100px;padding:10px;'));
			
	echo '<br /><br />';

	echo '<hr />';
	$this->renderPartial(Shop::module()->termsView);

	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Shop::t('Confirm Order'),array ('class'=>'btn btn-info'), array(
					'//shop/order/confirm')); ?>
	</div>
	<?php echo CHtml::endForm(); ?>
	<div class="sep-bor"></div>
</div>

<!-- Recent posts CarouFredSel Starts -->

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
	
<!-- Recent posts Ends -->