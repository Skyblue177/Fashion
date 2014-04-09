<li>	
	    <div class="image2">
			<?php
				if ($data->images) {
					$this->renderPartial ( '/image/view', array (
							'thumb' => false,
							'model' => $data->images [0],
					) );
				} else {
					echo CHtml::image ( Shop::register ( 'no-pic.jpg' ));
				}
			?>
		</div>
		<div class="item-details">
			<!-- Name -->
			<h5><?php echo CHtml::link(CHtml::encode($data->title), array('products/view', 'id' => $data->product_id, $data->title.'.html' => '')); ?></h5>
			<p><?php echo CHtml::encode($data->description);?></p>
			<hr />
			<!-- Price -->
			<div class="item-price pull-left"><?php echo Shop::priceFormat($data->price); ?></div>
			 <!-- Add to cart -->	
			<div class="pull-right">
				<?php echo CHtml::link('<span>Details</span>', array('products/view', 'id' => $data->product_id, $data->title.'.html' => ''), array('class'=>'btn btn-danger btn-sm')); ?>
			</div>		
		</div>
</li>


