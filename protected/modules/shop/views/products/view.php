<?php
$this->breadcrumbs=array(
	Shop::t('Products')=>array('index'),
	$model->title,
);

?>

 <!-- Page content -->

<div class="shop-items">
	<div class="container">
	
		<div class="row">
	   
			<div class="col-md-9 col-md-push-3">
				 <!-- Breadcrumb -->
                 <ul class="breadcrumb">
                   <li><a>Trang chủ</a> <span class="divider"></span></li>
                   <li><a><?php echo $model->title; ?></a> <span class="divider"></span></li>
                 </ul>
				<div class="single-item">
                    <div class="row">
						<div class="col-md-4 col-xs-5">

							<div class="item-image">
								<?php 
									if($model->images) {
										foreach($model->images as $image) {
											$this->renderPartial('/image/view', array( 'model' => $image));
											echo '<br />'; 
										}
									} else 
									$this->renderPartial('/image/view', array( 'model' => new Image()));
								?>
							</div>
							  

						</div>
						
						<div class="col-md-5 col-xs-7">
						  <!-- Title -->
							<h4><?php echo $model->title; ?></h4>
							<?php printf('<h5><strong>Giá : %s </strong></h5>', Shop::priceFormat($model->price));?>
							<p><strong>
							<?php 
								$specs = $model->getSpecifications();
								if($specs) {
								echo '<table>';

								printf ('<tr><td colspan="2"><strong>%s</strong></td></tr>',
										Shop::t('Thông số kỹ thuật sản phẩm'));
										
								foreach($specs as $key => $spec) {
									if($spec != '')
										printf('<tr> <td> %s: </td> <td> %s </td> </td>',
												$key,
												$spec);
								}

								echo '</table>';
								} 
							?>
							</strong></p>
								 
							<!-- Add to wish list -->
							<?php $this->renderPartial('/products/addToCart', array('model' => $model)); ?>

							<!-- Share button -->
							
						</div>
					</div>
				</div>	
					

				<br />
			
				<!-- Description, specs and review -->

				<ul id="myTab" class="nav nav-tabs">
					<!-- Use uniqe name for "href" in below anchor tags -->
					<li class="active"><a href="#tab1" data-toggle="tab">Mô tả</a></li>
					<li><a href="#tab2" data-toggle="tab">Thông số kỹ thuật</a></li>
				</ul>

				<!-- Tab Content -->
				<div id="myTabContent" class="tab-content">
					<!-- Description -->
					<div class="tab-pane fade in active" id="tab1">
						<h5><strong><?php echo $model->title; ?></strong></h5>
						<p><?php echo $model->description; ?></p>
						<?php 
							$specs = $model->getSpecifications();
							if($specs) {
								echo '<table>';
								
								printf ('<tr><td colspan="2"><strong>%s</strong></td></tr>',
										Shop::t('Thông số kỹ thuật'));
										
								foreach($specs as $key => $spec) {
									if($spec != '')
										printf('<tr> <td> %s: </td> <td> %s </td> </td>',
												$key,
												$spec);
								}
								
								echo '</table>';
							} 
						?>
					</div>

				  <!-- Sepcs -->
					<div class="tab-pane fade" id="tab2">
				
						<h5><strong>Thông số kỹ thuật sản phẩm:</strong></h5>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td><strong>Sản phẩm</strong></td>
									<td><?php echo $model->title; ?></td>
								</tr>
								<tr>
									<td><strong>Hình ảnh</strong></td>
									<td><?php 
										if($model->images) {
											foreach($model->images as $image) {
												$this->renderPartial('/image/view', array( 'model' => $image));
												echo '<br />'; 
											}
										} else 
										$this->renderPartial('/image/view', array( 'model' => new Image()));
									?>
									</td>
								</tr>
								<tr>
									<td><strong>Mô tả</strong></td>
									<td><?php echo $model->description; ?></td>
								</tr>
								<tr>
									<td><strong>Thông số kỹ thuật</strong></td>
									<td><?php 
									$specs = $model->getSpecifications();
									if($specs) {
										echo '<table>';
										
										printf ('<tr><td colspan="2"><strong>%s</strong></td></tr>',
												Shop::t('Product Specifications'));
												
										foreach($specs as $key => $spec) {
											if($spec != '')
												printf('<tr> <td> %s: </td> <td> %s </td> </td>',
														$key,
														$spec);
										}
										
										echo '</table>';
									} 
									?></td>
								</tr>                                                                                              
							</tbody>
						</table>

					</div>
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

					<h5>Featured Items</h5>

					<!-- Item #1 -->

					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/23.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT900 :',array('/shop/products/view/id/106/Áo+khoác+MT900.html'));?>
							<p>Váy liền dài tay cổ sen</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/24.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT901 :',array('/shop/products/view/id/107/Áo+khoác+MT901.html'));?>
							<p>Áo khoác len cổ tim đơn giản và đáng yêu.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/25.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT902 :',array('/shop/products/view/id/108/Áo+khoác+MT902.html'));?>
							<p>Áo khoác Hàn Quốc 2 hàng nút phong cách.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/26.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT903 :',array('/shop/products/view/id/109/Áo+khoác+MT903.html'));?>
							<p>Áo khoác vest phối da beo cách điệu duyên dáng.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/29.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT904 :',array('/shop/products/view/id/110/Áo+khoác+MT904.html'));?>
							<p>Áo khoác sọc kẻ Hàn Quốc dễ thương.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/27.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT905 :',array('/shop/products/view/id/111/Áo+khoác+MT905.html'));?>
							<p>Áo khoác Jean phối ren viền cổ đáng yêu.</p>
							<p class="bold">$11.39</p>
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="sitem">
						<div class="onethree-left">
							<a href="single-item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/30.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div class="onethree-right">
							<?php echo CHtml::link('Áo khoác MT411 :',array('/shop/products/view/id/112/Áo+khoác+MT906.html'));?>
							<p>Áo khoác len sọc kẻ cá tính, xinh đẹp.</p>
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



