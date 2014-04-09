<div id="shopcontent">
	<div class="container">
		<h1> Webshop Administration </h1>

		<div class="span-8"> 
			<?php $this->beginWidget('zii.widgets.CPortlet',
					array('title' => Yii::t('ShopModule.shop', 'Administrate Categories'))); ?>
			<?php $this->renderPartial('/category/admin'); ?>
			<?php $this->endWidget(); ?>
		</div>

		<div class="span-15 last"> 
			<?php $this->beginWidget('zii.widgets.CPortlet',
					array('title' => Yii::t('ShopModule.shop', 'Administrate your Products'))); ?>
			<?php $this->renderPartial('/products/admin'); ?>
			<?php $this->endWidget(); ?>
		</div>

		<div class="clear">

		<div class="span-8 last"> 
			<?php $this->beginWidget('zii.widgets.CPortlet',
					array('title' => Yii::t('ShopModule.shop', 'Pending Orders'))); ?>
			<?php $this->renderPartial('/order/admin'); ?>
			<?php $this->endWidget(); ?>
		</div>

		<div class="clear">
	</div>
</div>
<?php
$this->breadcrumbs=array(
	Yii::t('ShopModule.shop', 'Shop')=>array('shop/index'),
	Yii::t('ShopModule.shop', 'Administration'),
);

?>


