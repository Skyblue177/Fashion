<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Products')=>array('index'),
	$model->title=>array('view','id'=>$model->product_id),
	Yii::t('ShopModule.shop', 'Update'),
);

?>

<div class="container">
	<div class="prepend-1" id="shopcontent">

	<h3><i class="icon-desktop color"></i> &nbsp;<?php echo Yii::t('ShopModule.shop', 'Cập nhật'); ?>
	 <?php echo $model->title; ?></h3>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

	</div>
</div>
