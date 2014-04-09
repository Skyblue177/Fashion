<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reg-login-info">
                    <h2>Login to Access Amazing Benefits <span class="color">!!!</span></h2>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/carousel/back1.jpg" alt="" class="img-responsive img-thumbnail" />
                    <p>Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis. Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis.</p>
                     
                </div>
			</div>
			<div class="col-md-6">
				<div class="register-login">
					<div class="cool-block">
						<div class="cool-block-bor">
							<h3>Login</h3>

							
							<div class="form-horizontal" role="form">
								<?php $form=$this->beginWidget('CActiveForm', array(
									'id'=>'login-form',
									'enableClientValidation'=>true,
									'clientOptions'=>array(
										'validateOnSubmit'=>true,
									),
								)); ?>

								

								<div class="form-group">
									<?php echo $form->labelEx($model,'username',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo $form->textField($model,'username',array('class'=>'col-lg-7')); ?>
									<?php echo $form->error($model,'username'); ?>
								</div>

								<div class="form-group">
									<?php echo $form->labelEx($model,'password',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo $form->passwordField($model,'password',array('class'=>'col-lg-7')); ?>
									<?php echo $form->error($model,'password'); ?>
								</div>

								<div class="form-group">
									<?php echo $form->checkBox($model,'rememberMe',array('class'=>'col-lg-2')); ?>
									<?php echo $form->label($model,'rememberMe',array('class'=>'col-lg-5 control-label')); ?>
									<?php echo $form->error($model,'rememberMe'); ?>
								</div>

								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<?php echo CHtml::submitButton('Login',array('class'=>'btn btn-info')); ?>
									</div>
								</div>

							<?php $this->endWidget(); ?>
							</div><!-- form -->
					   
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



