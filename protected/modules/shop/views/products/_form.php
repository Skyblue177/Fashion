<div class="blocky">
    <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="reg-login-info">
                    <h2>Login to Access Amazing Benefits <span class="color">!!!</span></h2>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/carousel/back1.jpg" alt="" class="img-responsive img-thumbnail" />
                    <p>Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis. Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis.</p>
                    <p>Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis. Duis leo risus, vehicula luctus nunc. Quiue rhoncus, a sodales enim arcu quis turpis. Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc. Quisque rhoncus, a sodales enim arcu quis turpis.</p>
                </div>
			</div>
			<div class="col-md-6">
                  <div class="register-login">
                     <div class="cool-block">
                        <div class="cool-block-bor">
							<?php 
								function renderVariation($variation, $i) { 
									if(!ProductSpecification::model()->findByPk(1))
										return false;
									if(!$variation) {
										$variation = new ProductVariation;
										$variation->specification_id = 1;
									}

									$str = '<tr> <td>';
									$str .= CHtml::dropDownList("Variations[{$i}][specification_id]",
											$variation->specification_id, CHtml::listData(
												ProductSpecification::model()->findall(), "id", "title"), array(
												'empty' => '-'));  

									$str .= '</td> <td>';
									$str .= CHtml::textField("Variations[{$i}][title]", $variation->title); 
									$str .= '</td> <td>';
									$str .= CHtml::dropDownList("Variations[{$i}][sign]",
											$variation->price_adjustion >= 0 ? '+' : '-', array(
												'+' => '+',
												'-' => '-'));
									$str .= '</td> <td>';
									$str .= CHtml::textField("Variations[{$i}][price_adjustion]", abs($variation->price_adjustion));  
									$str .= '</td> <td>';
									for($j = -10; $j <= 10; $j++)
										$positions[$j] = $j;
									$str .= CHtml::dropDownList("Variations[{$i}][position]",
											$variation->position,
											$positions);
									$str .= '</td> </tr>';

								return $str;
								} 
							?>
							
							<div class="form-horizontal" role="form">

								<?php $form=$this->beginWidget('CActiveForm', array(
											'id'=>'products-form',
											'enableAjaxValidation'=>true,
											)); ?>

								<?php echo $form->errorSummary($model); ?>

								
									
								<h3> <?php echo Shop::t('Thông tin sản phẩm'); ?> </h3>
								<div class="form-group">
									<?php echo $form->labelEx($model,'category_id',array('class'=>'col-lg-3 control-label')); ?>
									<?php $this->widget('application.modules.shop.components.Relation', array(
										'model' => $model,
										'relation' => 'category',
										'fields' => 'title',
										'showAddButton' => false
										)); 
									?>
									<?php echo $form->error($model,'category_id'); ?>
								</div>

								<div class="form-group">
									<?php echo $form->labelEx($model,'title',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo $form->textField($model,'title',array('class'=>'form-control','placeholder'=>'Tiêu đề...')); ?>
									<?php echo $form->error($model,'title'); ?>
								</div>

								<div class="form-group">
									<?php echo $form->labelEx($model,'description',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo $form->textArea($model,'description',array('class'=>'form-control','placeholder'=>'Mô tả...')); ?>
									<?php echo $form->error($model,'description'); ?>
								</div>
									

								<div class="form-group">
									<?php echo $form->labelEx($model,'price',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo $form->textField($model,'price',array('class'=>'form-control','placeholder'=>'Giá...')); ?>
									<?php echo $form->error($model,'price'); ?>
								</div>

								<?php foreach(ProductSpecification::model()->findAll() as $specification) { ?>
								<div class="form-group">
									<?php echo CHtml::label($specification->title, '',array('class'=>'col-lg-3 control-label')); ?>
									<?php echo CHtml::textField("Specifications[{$specification->title}]",
										$model->getSpecification($specification->title),array('class'=>'form-control','placeholder'=>'Đặc tính...')); 
									?>
								</div>
									<?php } ?>

								</fieldset>
								<?php if(!$model->isNewRecord) { ?>
									<fieldset>
										<h3> <?php echo Shop::t('Article Variations'); ?> </h3>
											<div id="variations">
												<table>
													<?php 
														printf('<tr><th>%s</th><th>%s</th><th colspan = 2>%s</th><th>%s</th></tr>',
																Shop::t('Specification'), 
																Shop::t('Value'), 
																Shop::t('Price adjustion'),
																Shop::t('Position'));


														$i = 0;
														foreach($model->variations as $variation) { 
															echo renderVariation($variation, $i); 
															$i++;
														}

															echo renderVariation(null, $i); 
													?>
												</table>	
												<?php echo CHtml::button(Shop::t('Save specifications'), array(
													'submit' => array(
														'//shop/products/update',
														'return' => 'product',
														'id' => $model->product_id))); 
												?>

											</div>
									</fieldset>

								<?php } ?>

								<br />
								
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<?php echo CHtml::submitButton($model->isNewRecord ?
												Yii::t('ShopModule.shop', 'Create') 
												: Yii::t('ShopModule.shop', 'Save'),array('class'=>'btn btn-info')); 
										?>
									</div>
								</div>

								<?php $this->endWidget(); ?>

							</div><!-- form -->
                           
                        </div>
                    </div>   
                </div>
            </div>
        </div>
        <div class="sep-bor"></div>
    </div>
</div>

<div class="recent-posts blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Section title -->
				<div class="section-title">
					<h4><i class="icon-desktop color"></i> &nbsp;Whats New in Our Company</h4>
				</div>    
		  
				<div class="row">
					<div class="col-md-12">
						<div class="my_carousel">
				
						   <div class="carousel_nav pull-right">
							   <!-- Carousel navigation -->
							   <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
							   <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
						   </div>
				  
						   <ul id="carousel_container">
							  <!-- Carousel item -->
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/1.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo khoác & Áo</a></h5>
										<p>Stylish Double Breasted Overcoat Men Long Trench Winter Coat</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $29.99</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/2.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Hoodies & Sweatshirt</a></h5>
										<p>Men's Slim Mixed Colors Jackets Sweatshirts</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $17.89</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/3.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo Thun</a></h5>
										<p>2013 Men's Stylish Casual Formal Slim Fit Short Sleeve T-Shirts</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $11.55</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/4.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Quần / Quần soóc</a></h5>
										<p>Men's Fashion Casual Cotton Skinny Straight Long Pants Trousers</p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $11.39</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/5.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Áo sơ mi</a></h5>
										<p>2013 Mens Casual Slim Fit Stylish Long Sleeve Dress Shirtsp>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $12.98</a>
									</div>
								</li>
								<li>
									<a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/caroufredsel/6.jpg" alt="" class="img-responsive"/></a>
									<div class="carousel_caption">
										<h5><a href="#">Jean</a></h5>
										<p>Mens Cotton Casual Jeans Drape Straight Blue Jeans </p>
										<a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $23.26</a>
									</div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			




