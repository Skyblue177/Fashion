<div class="form-horizontal" role="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'comment-form',
		'enableAjaxValidation'=>true,
	)); ?>


	<div class="form-group">
		<?php echo $form->labelEx($model,'author',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textField($model,'author',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'url',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textField($model,'url',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'content',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textArea($model,'content',array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save',array('class'=>'btn btn-info')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->