<div class="container">
	<?php
	Shop::register('css/shop.css');
	$this->renderPartial('/order/waypoint', array('point' => 3));

	if(!isset($customer))
		$customer = new Customer;

		if(!isset($billingAddress))
			if(isset($customer->billingAddress))
				$billingAddress = $customer->billingAddress;
			else
				$billingAddress = new BillingAddress;

	if(!isset($this->breadcrumbs))
		$this->breadcrumbs = array(
				Shop::t('Order'),
				Shop::t('Payment method'));
				
	$form=$this->beginWidget('CActiveForm', array(
				'id'=>'customer-form',
				'action' => array('//shop/order/create'),
				'enableAjaxValidation'=>false,
				)); 
	?>

	<h2><?php echo Shop::t('Phương thức thanh toán'); ?></h2>
	<hr/>
	<h4><?php echo Shop::t('Địa chỉ thanh toán'); ?></h4>
	<div class="current_address">
	<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$customer->address,
				'htmlOptions' => array('class' => 'detail-view'),
				'attributes'=>array(
					'firstname',
					'lastname',
					'street',
					'zipcode',
					'city',
					'country'
					),
				)); ?>
	</div>
	<br/>
	<?php
	echo CHtml::checkBox('toggle_billing',
				$customer->billingAddress !== NULL, array(
					'style' => 'float: left')); 
		echo CHtml::label(Shop::t('Địa chỉ thanh toán thay thế'), 'toggle_billing', array(
					'style' => 'cursor:pointer'));
	?>
	<div class="form-horizontal" role="form">
		<fieldset id="billing_information" style="display: none;" >
			<div class="payment_address">
			
				<h3> <?php echo Shop::t('Địa chỉ thanh toán mới'); ?> </h3>
				<p><?php echo Shop::t('Giao hàng địa chỉ mới'); ?></p>
			
				<div class="row">
					<?php echo $form->labelEx($billingAddress,'firstname',array('class'=>'col-lg-3 control-label')); ?>
					<?php echo $form->textField($billingAddress,'firstname',array('class'=>'col-lg-4')); ?>
					<?php echo $form->error($billingAddress,'firstname'); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($billingAddress,'lastname',array('class'=>'col-lg-3 control-label')); ?>
					<?php echo $form->textField($billingAddress,'lastname',array('class'=>'col-lg-4')); ?>
					<?php echo $form->error($billingAddress,'lastname'); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($billingAddress,'street',array('class'=>'col-lg-3 control-label')); ?>
					<?php echo $form->textField($billingAddress,'street',array('class'=>'col-lg-4')); ?>
					<?php echo $form->error($billingAddress,'street'); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($billingAddress,'city',array('class'=>'col-lg-3 control-label')); ?>
					<?php echo $form->textField($billingAddress,'zipcode',array('size'=>13,'maxlength'=>45)); ?>
					<?php echo $form->error($billingAddress,'zipcode'); ?>
			
					<?php echo $form->textField($billingAddress,'city',array('size'=>32,'maxlength'=>45)); ?>
					<?php echo $form->error($billingAddress,'city'); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($billingAddress,'country',array('class'=>'col-lg-3 control-label')); ?>
					<?php echo $form->textField($billingAddress,'country',array('class'=>'col-lg-4')); ?>
					<?php echo $form->error($billingAddress,'country'); ?>
				</div>
			</div>
		 </fieldset>
	<br />
	<hr />  
	<h4> <?php echo Shop::t('Phương thức thanh toán'); ?> </h4><br/>
	<p> <?php echo Shop::t('Chọn phương thức thanh toán của bạn'); ?> </p>


	<?php
	$i = 0;
	foreach(PaymentMethod::model()->findAll() as $method) {
		echo '<div class="row">';
		echo CHtml::radioButton("PaymentMethod", $i == 0, array(
					'value' => $method->id,'class'=>'col-lg-1'));
		echo '<div class="col-lg-4">';
		echo CHtml::label($method->title, 'PaymentMethod');
		echo CHtml::tag('p', array(), $method->description);
		echo '</div>';
		echo '</div>';
		echo '<div class="clear"></div>';
		$i++;
	}
		?>


	<div class="row buttons">
	<?php
	echo CHtml::submitButton(Shop::t('Continue'),array('class'=>'btn btn-info'));
	?>
	</div>

	<?php
	echo '</div>';
	$this->endWidget(); 
	?>


	<?php
	Yii::app()->clientScript->registerScript('toggle', "
		if($('#toggle_billing').attr('checked'))
			$('#billing_information').show();

		$('#toggle_billing').click(function() { 
			$('#billing_information').toggle(500);
		});
	"); 
	?>
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