<?php
$this->breadcrumbs=array(
	Yii::t('shop', 'Product')=>array('index'),
	Yii::t('shop', 'Create'),
);
?>

<div class="container">
	<div id="shopcontent">
		<h3><i class="icon-desktop color"></i> &nbsp;<?echo Yii::t('ShopModule.shop', 'Tạo ra một sản phẩm mới'); ?></h3>
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>