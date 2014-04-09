<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile"),
);
/*$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
	array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
	array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
	array('label'=>UserModule::t('Change password'), 'url'=>array('changepassword')),
	array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);


*/
?>

<div class="shop-items blocky">
	<div class="container">
		<div class="row">
			<h2><i class="icon-desktop color"></i> <?php echo UserModule::t('Trang cá nhân của khách hàng'); ?></h2>
			<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
			<div class="success">
				<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
			</div>
			<?php endif; ?>
			<br>
			<a href="#" class="thumbnail">
				<img src="#" alt="">
				<button class="btn btn-large btn-primary" type="button">Upload File</button>
			</a>
			
			<dl class="dl-horizontal">
				<dt><?php echo CHtml::encode($model->getAttributeLabel('username')); ?> :</dt> 
				<dd><?php echo CHtml::encode($model->username); ?></dd>
				<?php 
					$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
					if ($profileFields) 
					{
						foreach($profileFields as $field) 
						{
							//echo "<pre>"; print_r($profile); die();
						?>
				<dt><?php echo CHtml::encode(UserModule::t($field->title)); ?> :</dt> 
				<dd><?php echo (($field->widgetView($profile))?$field->widgetView($profile):CHtml::encode((($field->range)?Profile::range($field->range,$profile->getAttribute($field->varname)):$profile->getAttribute($field->varname)))); ?></dd>
				<?php
						}//$profile->getAttribute($field->varname)
					}
				?>
				<dt><?php echo CHtml::encode($model->getAttributeLabel('email')); ?> :</dt> 
				<dd><?php echo CHtml::encode($model->email); ?></dd>
				
				<dt><?php echo CHtml::encode($model->getAttributeLabel('create_at')); ?> :</dt> 
				<dd><?php echo $model->create_at; ?></dd>
				
				<dt><?php echo CHtml::encode($model->getAttributeLabel('lastvisit_at')); ?> :</dt> 
				<dd><?php echo $model->lastvisit_at; ?></dd>
				
				<dt><?php echo CHtml::encode($model->getAttributeLabel('status')); ?> :</dt> 
				<dd><?php echo CHtml::encode(User::itemAlias("UserStatus",$model->status)); ?></dd>
				
				<hr style="margin:12px 0 5px 30px;">
				
				
				<div class="panel-body">
					<h4><i class="icon-heart color"></i> <i class="icon-heart color"></i> <i class="icon-heart color"></i> <?php echo UserModule::t('Album'); ?> <i class="icon-heart color"></i> <i class="icon-heart color"></i> <i class="icon-heart color"></i> </h4>
					<ul>
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/1.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/1.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/2.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/2.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/3.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/3.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/4.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/4.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/5.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/5.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/6.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/6.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/7.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/7.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/8.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/8.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/9.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/9.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/10.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/10.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/11.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/11.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/12.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/12.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/13.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/13.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/14.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/14.jpg'" />
						</li>
						
						<li>
							<img class = "cloudzoom" src = "<?php echo Yii::app()->request->baseUrl; ?>/images/profile1/15.jpg"
							data-cloudzoom = "zoomImage: '<?php echo Yii::app()->request->baseUrl; ?>/images/profile/15.jpg'" />
						</li>
						
					</ul>
				</div>
				</br>	
				<p>Hãy đến cửa hàng của chúng tôi,quý khách sẽ có những phút giây thật sự thoải mái với đầy đủ các mẫu thời trang đang thịnh hành nhất hiện nay mẫu mã đẹp,chất lượng và phù hợp với túi tiền của quý khách.</p>
			</dl>
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