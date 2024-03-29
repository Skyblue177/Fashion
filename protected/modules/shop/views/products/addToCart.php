<?php
echo Shop::renderFlash();
echo '<div class="product-price-info">';
echo Shop::pricingInfo();
echo '</div>';

echo CHtml::beginForm(array('shoppingCart/create'));

if($variations = $model->getVariations()) {
	$i = 0;
	foreach($variations as $variation) {
		$i++;
		$field = "Variations[{$variation[0]->specification_id}][]";
		echo '<div class="product_variation product_variation_'.$i.'">';
		echo CHtml::label($variation[0]->specification->title,
				$field, array(
					'class' => 'lbl-header'));

		if($variation[0]->specification->required)
			echo ' <span class="required">*</span>';

		echo  '<br />';
		if($variation[0]->specification->is_user_input) {
			echo CHtml::textField($field);
		}
		else {
			// If the specification is required, preselect the first field. Otherwise
			// let the customer choose which one to pick
			echo CHtml::radioButtonList($field,
					$variation[0]->specification->required ? $variation[0]->id : null,
					ProductVariation::listData($variation));
		}
		echo '</div>';
		if($i % 2 == 0)
			echo '<div style="clear: both;"></div>';
	}

}

echo '<div style="clear: both;"></div>';
echo '<br />';
echo CHtml::hiddenField('product_id', $model->product_id);
echo CHtml::label(Shop::t('Số lượng'), 'ShoppingCart_amount');
echo ': ';
echo CHtml::textField('amount', 1, array('size' => 3));
echo '<br />';

echo CHtml::submitButton(Shop::t('Thêm vào giỏ hàng'), array( 'class' => 'btn btn-danger'));
echo CHtml::endForm();
?>
