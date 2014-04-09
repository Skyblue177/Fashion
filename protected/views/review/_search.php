<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div role="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('class'=>'form-control','placeholder'=>'Id...')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('class'=>'form-control','placeholder'=>'Tên...')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('class'=>'form-control','placeholder'=>'Email...')); ?>
	</div>
	
	
	<div class="form-group">
		<?php echo $form->label($model,'review'); ?>
		<?php echo $form->textArea($model,'review',array('class'=>'form-control','placeholder'=>'Review...')); ?>
	</div>

	
	<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-info')); ?>

<?php $this->endWidget(); ?>

</div><!-- search-form -->