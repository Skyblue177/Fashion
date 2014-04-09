<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

<a class="pull-left">
	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/view/'.$data->image,"",array('class'=>'thumbnail','style'=>'padding: 0px')); ?>
</a>
<div class="review-author">
	<?php echo CHtml::encode($data->name); ?>
</div>
<div class="rmeta"><?php echo CHtml::encode($data->create_time); ?></div>
<p class="review-detail"><?php echo CHtml::encode($data->review); ?></p>
<hr>
