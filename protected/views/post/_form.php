<div class="col-md-6">
	<div class="register-login">
		<div class="cool-block">
			<div class="cool-block-bor">
				<div class="form-horizontal" role="form">

					<?php $form=$this->beginWidget('CActiveForm',array(
						'id'=>'post-form',
						 'enableAjaxValidation' => false,
						'htmlOptions' => array(
							'enctype' => 'multipart/form-data',
						),
					)); ?>
				
					

					<?php echo CHtml::errorSummary($model); ?>

					<div class="form-group">
						<?php echo $form->labelEx($model,'title',array('class'=>'col-lg-3 control-label')); ?>
						<?php echo $form->textField($model,'title',array('class'=>'col-lg-7')); ?>
						<?php echo $form->error($model,'title'); ?>
					</div>
					
					<div class="row">
						<?php echo $form->labelEx($model,'image',array('class'=>'col-lg-3 control-label')); ?>
						<?php echo CHtml::activeFileField($model, 'image'); ?>
						<?php echo $form->error($model,'image'); ?>
					</div>

					<?php if($model->isNewRecord!='1'){ ?>
						<div class="row">
							<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fashion/'.$model->image,"image",array("width"=>200)); ?>
						</div>
					<?php } ?>
	
					<div class="form-group">
						<?php echo $form->labelEx($model,'content',array('class'=>'col-lg-3 control-label')); ?>
						<?php echo CHtml::activeTextArea($model,'content',array('class'=>'col-lg-7')); ?>
						<p class="col-lg-8 control-label">You may use <a target="_blank" href="http://daringfireball.net/projects/markdown/syntax">Markdown syntax</a>.</p>
						<?php echo $form->error($model,'content'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'tags',array('class'=>'col-lg-3 control-label')); ?>
						<?php $this->widget('CAutoComplete', array(
							'model'=>$model,
							'attribute'=>'tags',
							'url'=>array('suggestTags'),
							'multiple'=>true,
							'htmlOptions'=>array('class'=>'col-lg-7'),
						)); ?>
						
						<?php echo $form->error($model,'tags'); ?>
					</div>

					<div class="form-group">
						<?php echo $form->labelEx($model,'status',array('class'=>'col-lg-3 control-label')); ?>
						<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
						<?php echo $form->error($model,'status'); ?>
					</div>

					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info')); ?>
						</div>
					</div>

				<?php $this->endWidget(); ?>

				</div><!-- form -->
		   
			</div>
		</div>   
	</div>
</div>








