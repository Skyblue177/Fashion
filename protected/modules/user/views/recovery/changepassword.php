<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Change Password"),
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
							<h3><?php echo UserModule::t("Thay đổi mật khẩu"); ?></h3>


							<div class="form-horizontal" role="form">
							<?php echo CHtml::beginForm(); ?>

								
								<?php echo CHtml::errorSummary($form); ?>
								
								<div class="form-group">
								<?php echo CHtml::activeLabelEx($form,'password',array('class'=>'col-lg-4 control-label')); ?>
								<?php echo CHtml::activePasswordField($form,'password',array('class'=>'col-lg-7')); ?>
								</div>
								
								<div class="form-group">
								<?php echo CHtml::activeLabelEx($form,'verifyPassword',array('class'=>'col-lg-4 control-label')); ?>
								<?php echo CHtml::activePasswordField($form,'verifyPassword',array('class'=>'col-lg-7')); ?>
								</div>
								
								
								<div class="form-group">
								<?php echo CHtml::submitButton(UserModule::t("Save"),array('class'=>'btn btn-info')); ?>
								</div>

							<?php echo CHtml::endForm(); ?>
							</div><!-- form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>