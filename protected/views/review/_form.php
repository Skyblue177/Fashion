<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'review-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		'htmlOptions' => array(
			'enctype' => 'multipart/form-data',
		),
	)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'name',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textField($model,'name',array('class'=>'form-control','placeholder'=>'Tên...')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'email',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'Email...')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="form-group">
		<?php echo $form->labelEx($model,'review',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo $form->textArea($model,'review',array('class'=>'form-control','placeholder'=>'Review...')); ?>
		<?php echo $form->error($model,'review'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'image',array('class'=>'col-lg-3 control-label')); ?>
		<?php echo CHtml::activeFileField($model, 'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<?php if($model->isNewRecord!='1'){ ?>
		<div class="form-group">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/view/'.$model->image,"",array('class'=>'thumbnails')); ?>
		</div>
	<?php } ?>
	
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-info')); ?>
		</div>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->