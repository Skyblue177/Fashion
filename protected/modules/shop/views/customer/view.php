<?php
if(!isset($hideEmail)) {
	echo '<h3>'.Shop::t('Customer information').'</h3>';
	
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
	),
)); 
}

if($model->address && !isset($hideAddress)) {
	echo '<h3>'.Shop::t('Address').'</h3>';
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->address,
	'attributes'=>array(
		'firstname',
		'lastname',
		'street',
		'zipcode',
		'city',
		'country',
	),
)); 

}

echo '<div class="box-delivery-address">';
echo '<h3>'.Shop::t('Địa chỉ giao hàng').'</h3>';
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->deliveryAddress ? $model->deliveryAddress : $model->address,
	'attributes'=>array(
		'firstname',
		'lastname',
		'street',
		'zipcode',
		'city',
		'country',
	),
));
echo CHtml::link(Shop::t('Địa chỉ giao hàng').' '.Shop::t('Edit'), array(
			'//shop/shippingMethod/choose', 'order' => true)); 
echo '</div>';

echo '<div class="box-billing-address">';
echo '<h3>'.Shop::t('Địa chỉ thanh toán').'</h3>';
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->billingAddress ? $model->billingAddress : $model->address,
	'attributes'=>array(
		'firstname',
		'lastname',
		'street',
		'zipcode',
		'city',
		'country',
	),
)); 
echo CHtml::link(Shop::t('Địa chỉ thanh toán').' '.Shop::t('Edit'), array(
			'//shop/paymentMethod/choose', 'order' => true)); 
echo '</div>';
echo '<div class="clear"></div>';
?>
