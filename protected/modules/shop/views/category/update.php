<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Categories')=>array('index'),
	$model->title=>array('view','id'=>$model->category_id),
	Yii::t('ShopModule.shop', 'Update'),
);

?>

<div class="container">
	<h3><i class="icon-desktop color"></i> &nbsp;<?php echo Yii::t('ShopModule.shop', 'Cập nật một danh mục mới'); ?> <?php echo $model->category_id; ?></h3>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
