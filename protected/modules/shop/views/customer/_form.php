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
							<h3><?php echo Shop::t('New customer'); ?></h3>
							<div class="form-horizontal" role="form">
	
								<?php
								if(isset($action) && $action !== null) 
									$form=$this->beginWidget('CActiveForm', array(
												'id'=>'customer-form',
												'action' => $action,
												'enableAjaxValidation'=>false,
												)); 
								else
								$form=$this->beginWidget('CActiveForm', array(
											'id'=>'customer-form',
											'enableAjaxValidation'=>false,
											)); ?>

								<?php echo $form->errorSummary(array($customer, $address)); ?>

										<?php echo $form->hiddenField($customer, 'user_id', array('value'=> Yii::app()->user->id)); ?>

									<div class="form-group">
										<?php echo $form->labelEx($address,'firstname',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($address,'firstname',array('class'=>'col-lg-7')); ?>
										<?php echo $form->error($address,'firstname'); ?>
									</div>

									<div class="form-group">
										<?php echo $form->labelEx($address,'lastname',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($address,'lastname',array('class'=>'col-lg-7')); ?>
										<?php echo $form->error($address,'lastname'); ?>
									</div>

									<div class="form-group">
										<?php echo $form->labelEx($customer,'email',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($customer,'email',array('class'=>'col-lg-7')); ?>
										<?php echo $form->error($customer,'email'); ?>
									</div>

									<div class="form-group">
										<?php echo $form->labelEx($address,'street',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($address,'street',array('class'=>'col-lg-7')); ?>
										<?php echo $form->error($address,'street'); ?>
									</div>

									<div class="form-group">
										<?php echo $form->labelEx($address,'city',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($address,'zipcode',array('size'=>10,'maxlength'=>45)); ?>
										<?php echo $form->error($address,'zipcode'); ?>

										<?php echo $form->textField($address,'city',array('size'=>25,'maxlength'=>45)); ?>
										<?php echo $form->error($address,'city'); ?>
									</div>

									<div class="form-group">
										<?php echo $form->labelEx($address,'country',array('class'=>'col-lg-3 control-label')); ?>
										<?php echo $form->textField($address,'country',array('class'=>'col-lg-7')); ?>
										<?php echo $form->error($address,'country'); ?>
									</div>

									<div style="clear: both;"> </div>

									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<?php echo CHtml::submitButton($customer->isNewRecord 
													? Yii::t('ShopModule.shop', 'Register') 
													: Yii::t('ShopModule.shop', 'Save')
													,array('class'=>'btn btn-info')
													); ?>
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



