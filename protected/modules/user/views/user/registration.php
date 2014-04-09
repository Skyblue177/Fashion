<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("Registration"),
);
?>

<div class="blocky">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="reg-login-info">
                    <h2>Đăng ký để trở thành khách vip của Thiên Vũ <span class="color">!!!</span></h2>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/carousel/back1.jpg" alt="" class="img-responsive img-thumbnail" />
                    <p>Hãy đến cửa hàng của chúng tôi,quý khách sẽ có những phút giây thật sự thoải mái với đầy đủ các mẫu thời trang đang thịnh hành nhất hiện nay mẫu mã đẹp,chất lượng và phù hợp với túi tiền của quý khách.</p>
                    <p>Hãy đăng ký ngay hôm nay để trở thành khách hàng quen thuộc của Thiên Vũ,quý khách sẽ nhận được nhiều ưu đãi và những món quà thật sự ý nghĩa từ Thiên Vũ .</p>
                </div>
			</div>
			<div class="col-md-6">
				<div class="register-login">
					<div class="cool-block">
						<div class="cool-block-bor">
					
							<h3><?php echo UserModule::t("Đăng ký"); ?></h3>

							<?php if(Yii::app()->user->hasFlash('registration')): ?>
							<div class="success">
							<?php echo Yii::app()->user->getFlash('registration'); ?>
							</div>
							<?php else: ?>

							<div class="form-horizontal" role="form">
								<?php $form=$this->beginWidget('UActiveForm', array(
									'id'=>'registration-form',
									'enableAjaxValidation'=>true,
									'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
									'clientOptions'=>array(
										'validateOnSubmit'=>true,
									),
									'htmlOptions' => array('enctype'=>'multipart/form-data'),
								)); ?>
								
								<?php echo $form->errorSummary(array($model,$profile)); ?>
								
								<div class="form-group">
									<?php echo $form->labelEx($model,'username',array('class'=>'col-lg-4 control-label')); ?>
									<?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Tên đăng nhập...')); ?>
									<?php echo $form->error($model,'username'); ?>
								</div>
								
								<div class="form-group">
									<?php echo $form->labelEx($model,'password',array('class'=>'col-lg-4 control-label')); ?>
									<?php echo $form->passwordField($model,'password',array('class'=>'form-control','placeholder'=>'Mật khẩu...')); ?>
									<?php echo $form->error($model,'password'); ?>
								</div>
								
								<div class="form-group">
									<?php echo $form->labelEx($model,'verifyPassword',array('class'=>'col-lg-4 control-label')); ?>
									<?php echo $form->passwordField($model,'verifyPassword',array('class'=>'form-control','placeholder'=>'Nhập lại mật khẩu...')); ?>
									<?php echo $form->error($model,'verifyPassword'); ?>
								</div>
								
								<div class="form-group">
									<?php echo $form->labelEx($model,'email',array('class'=>'col-lg-4 control-label')); ?>
									<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'email...')); ?>
									<?php echo $form->error($model,'email'); ?>
								</div>
								
								<?php 
									$profileFields=$profile->getFields();
									if ($profileFields) {
										foreach($profileFields as $field) {
										?>
										
									<div class="form-group">
										<?php echo $form->labelEx($profile,$field->varname,array('class'=>'col-lg-4 control-label')); ?>
										<?php 
										if ($widgetEdit = $field->widgetEdit($profile)) {
											echo $widgetEdit;
										} elseif ($field->range) {
											echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
										} elseif ($field->field_type=="TEXT") {
											echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
										} else {
											echo $form->textField($profile,$field->varname,array('class'=>'form-control','placeholder'=>'Họ tên...','size'=>37,'maxlength'=>(($field->field_size)?$field->field_size:255)));
										}
										 ?>
										<?php echo $form->error($profile,$field->varname); ?>
									</div>	
											<?php
											}
										}
								?>
								<?php if (UserModule::doCaptcha('registration')): ?>
								<div class="form-group">
									<?php echo $form->labelEx($model,'verifyCode',array('class'=>'col-lg-4 control-label')); ?>
									
									<?php $this->widget('CCaptcha'); ?>
									<?php echo $form->textField($model,'verifyCode',array('class'=>'form-control','style'=>'margin-left:150px','placeholder'=>'Mã xác minh...')); ?>
									<?php echo $form->error($model,'verifyCode'); ?>
									
								</div>
								<?php endif; ?>
								
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<?php echo CHtml::submitButton(UserModule::t("Register"),array('class'=>'btn btn-info')); ?>
									</div>
								</div>

							<?php $this->endWidget(); ?>
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
					<h4><i class="icon-desktop color"></i> &nbsp;Sản phẩm mới của công ty chúng tôi</h4>
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
	  

