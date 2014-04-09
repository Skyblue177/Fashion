<?php
$this->breadcrumbs=array(
		Yii::t('ShopModule.shop', 'Categories')=>array('index'),
		Yii::t('ShopModule.shop', 'Create'),
		);

?>
<div class="container">
	<div id="shopcontent">
		<h3><i class="icon-desktop color"></i> &nbsp;<?php echo Yii::t('ShopModule.shop', 'Tạo ra một dan mục mới'); ?></h3>
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
</div>