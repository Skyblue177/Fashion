<?php
$points = array(
		Shop::t('Thông tin khách hàng'),
		Shop::t('Giao hàng'),
		Shop::t('Thanh toán'),
		Shop::t('Xác nhận'),
		Shop::t('Mua hàng thành công')
);

$links = array(
		array('//shop/customer/create'),
		array('//shop/shippingMethod/choose'),
		array('//shop/paymentMethod/choose'),
		array('//shop/order/create'));


echo '<div id="waypointarea" class="waypointarea">';
	printf('<span class="waypoint %s">%s</span>',
			$point == 0 ? 'active' : '',
			CHtml::link(Shop::t('Shopping Cart'), array(
						'//shop/shoppingCart/view')));

foreach ($points as $p => $pointText) 
{
	printf('<span class="waypoint%s">%s</span>',
			($point == ++$p) ? ' active' : '',
			$point < ++$p ? $pointText : CHtml::link($pointText, @$links[$p-2])
			);
}
echo '</div>';
?>
