<?php
$this->breadcrumbs=array(
	Shop::t('Products'),
);
Shop::renderFlash();
?>

<!-- Page content -->
      
<div class="shop-items">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
			<!-- Breadcrumb -->
				<ul class="breadcrumb">
					<li><a>Trang chủ</a> <span class="divider"></span></li>
					<li><a><?php echo Shop::t('Tất cả sản phẩm'); ?></a> <span class="divider"></span></li>
				</ul>
	   
			<!-- Items List starts -->

				
				<div class="box featured">
					<div class="box-content">
						<div class="box-product">
							<?php
								$this->widget ('zii.widgets.CListView', array (
									'dataProvider' => $dataProvider,
									'itemView' => '_view',
									'ajaxUpdate'=>false,
									'id'=>'My-grid',
									'pager'=>array(
											'header'         => '',
											'firstPageLabel' => '&lt;&lt;',
											'prevPageLabel'  => 'Left',
											'nextPageLabel'  => 'Right',
											'lastPageLabel'  => '&gt;&gt;',
									),
									'template'=>'{items}{pager}',
								));
							?>
						</div>
					</div>
				</div>
	   
			</div>
			
			<div class="cart" >
				<div class="cart_right">
				<!-- Start quang cao-->
				<a href="<?php echo $this->createUrl('//shop/shoppingCart/view') ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cart/shopcart.png" width="90px" height="90px"/>Sản phẩm</a>
				 
				<!-- End quang cao -->
				</div>
			</div>
	   
			<div class="col-md-3 col-md-pull-9">
				<div class="sidey">
					<ul class="nav">
						<li><a href="<?php echo $this->createUrl('/site/index')?>"><i class="icon-home"></i> &nbsp;Trang chủ</a>
						<li><a href="#"><i class="icon-mobile-phone"></i> &nbsp;Nam</a>
							<ul>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/1') ?>">Áo khoác & Áo</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/2') ?>">Hoodies & Sweatshirts</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/3') ?>">Áo Thun</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/4') ?>">Áo Sơ Mi</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/5') ?>">Áo Len</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/6') ?>">Suit & Blazers</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/7') ?>">Quần & Quần soóc</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/8') ?>">Jean</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="icon-laptop"></i> &nbsp;Nữ</a>
							<ul>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/9') ?>">Áo Kiểu</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/10') ?>">Áo Khoác</a></li>
								<li><a href="<?php echo $this->createUrl('/shop/category/view/id/11') ?>">Váy Đầm</a></li>
							</ul>
						</li>
					</ul>
				</div>
		  
				<!-- Sidebar items (featured items)-->

				<div class="sidebar-items">

					<h5>Mục tính năng</h5>

					<!-- Item #1 -->
					<div class="sitem">
						<div class="onethree-left">
							<!-- Image -->
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/7.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<!-- Title -->
							<?php echo CHtml::link('Váy liền MT454 :',array('/shop/products/view/id/118/Váy+liền+MT454.html'));?>
							<!-- Para -->
							<p>Set váy sọc kẻ + áo thun dài tay bên ngoài cá tính.</p>
							<!-- Price -->
							<p class="bold">$29.99</p>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/8.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT451 :',array('/shop/products/view/id/119/Váy+liền+MT451.html'));?>
							<p>Váy liền dài tay đính nút trước ngực kèm thắt lưng.</p>
							<p class="bold">$17.89</p>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/9.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT450 :',array('/shop/products/view/id/120/Váy+liền+MT450.html'));?>
							<p>Váy liền dài tay sọc kẻ, thắt nơ eo duyên dáng.</p>
							<p class="bold">$11.55</p>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/10.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT449 :',array('/shop/products/view/id/121/Váy+liền+MT449.html'));?>
							<p>Váy dạ xòe cổ sen đáng yêu và xinh đẹp.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/11.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT447 :',array('/shop/products/view/id/122/Váy+liền+MT447.html'));?>
							<p>Váy chấm bi chiffon Thượng Hải thanh lịch và duyên dáng.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/12.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT418 :',array('/shop/products/view/id/123/Váy+liền+MT418.html'));?>
							<p>Váy liền xòe cổ cao đáng yêu và xinh đẹp.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/13.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT383 :',array('/shop/products/view/id/124/Váy+liền+MT383.html'));?>
							<p>Váy liền dài tay công sở Hàn Quốc tay ren dễ thương.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/14.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT379 :',array('/shop/products/view/id/125/Váy+liền+MT379+.html'));?>
							<p>Váy ren Hàn Quốc dài tay cổ thuyền xinh đẹp.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/15.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT377 :',array('/shop/products/view/id/126/Váy+liền+MT377.html'));?>
							<p>Váy liền cotton dài tay 2 màu.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/16.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT376 :',array('/shop/products/view/id/127/Váy+liền+MT376.html'));?>
							<p>Váy liền cổ chữ V dài tay</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/17.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT418 :',array('/shop/products/view/id/128/Váy+liền+MT372+.html'));?>
							<p>Váy liền xòe cổ cao đáng yêu và xinh đẹp.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/18.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Váy liền MT372 :',array('/shop/products/view/id/129/Váy+liền++MT370.html'));?>
							<p>Váy liền dài tay thể thao</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					
										 
				</div>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>
     
<div class="float-ck" >
	<div id="hide_float_right">
		<a href="javascript:hide_float_right()">Tắt quảng cáo [X]</a>
	</div>
	<div id="float_content_right">
	<!-- Start quang cao-->
	<a href="http://www.fashionmagazine.com/" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/31.gif" title="Click me"/></a>
	 
	<!-- End quang cao -->
	</div>
	<script type="text/javascript">
	function hide_float_right() {
		var content = document.getElementById('float_content_right');
		var hide = document.getElementById('hide_float_right');
		if (content.style.display == "none")
		{
			content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt quảng cáo [X]</a>'; }
			else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Xem quảng cáo...</a>';
		}
    }
	</script>
</div>

