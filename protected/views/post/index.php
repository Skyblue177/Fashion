<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><i class="icon-desktop color"></i> Blog </h2>
		<hr />
	</div>
</div>
<!-- Page title -->

<!-- Page content -->
<div class="blog">
	<div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="posts">
					<?php 
						$this->widget('zii.widgets.CListView', array(
							'dataProvider'=>$dataProvider,
							'itemView'=>'_view',
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
			<div class="col-md-4">
			<!-- Sidebar 1 -->

				<div class="sidebar">
					<!-- Widget -->
					<div class="widget">
						<h4>Tìm kiếm</h4>
						<form class="form-inline widget-search" role="form">
							<div class="form-group">
								<input id="exampleInputEmail2" class="form-control" type="text" name="title" placeholder="Type...">
							</div>
							<button class="btn btn-info" type="submit">Tìm kiếm</button>
						</form>
					</div>
					<div class="widget">
						<h4>Bài viết mới nhất</h4>
						<?php $this->widget('RecentPosts', array(
							'maxPosts'=>Yii::app()->params['recentPostCount'],
						)); ?>
						
					</div>
					
					<div class="widget">
						<h4>Mặc đẹp</h4>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng yêu." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/1.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng yêu',array('/shop/products/view/id/94/Áo+kiểu+MT440.html'));?>
							</div>
							<span>11.5 $</span>
						</div>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT444 : Áo ren lưới Hàn Quốc dễ thương và đáng yêu." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/2.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT444 : Áo ren lưới Hàn Quốc dễ thương và đáng yêu.',array('/shop/products/view/id/95/Áo+kiểu+MT441.html'));?>
							</div>
							<span>12.5 $</span>
						</div>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT443 : Áo ren hoa mai cổ cao Hàn Quốc đính ngọc trai xinh đẹp." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/3.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT443 : Áo ren hoa mai cổ cao Hàn Quốc đính ngọc trai xinh đẹp.',array('/shop/products/view/id/96/Áo+kiểu+MT442.html'));?>
							</div>
							<span>14.5 $</span>
						</div>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT442 : Áo thun dáng dài hình hổ xinh đẹp." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/4.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT442 : Áo thun dáng dài hình hổ xinh đẹp.',array('/shop/products/view/id/97/Áo+kiểu+MT443.html'));?>
								
							</div>
							<span>10.5 $</span>
						</div>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT441 : Áo thun dài tay hình hươu đáng yêu." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/5.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT441 : Áo thun dài tay hình hươu đáng yêu.',array('/shop/products/view/id/97/Áo+kiểu+MT443.html'));?>
							</div>
							<span>10.5 $</span>
						</div>
						
						<div class="randomsanpham">
							<a title="Áo kiểu MT436 : Áo thun dài tay phối sọc kẻ cá tính, xinh đẹp." href="#" rel="nofollow">
								<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/model/6.jpg" alt="Áo kiểu MT445 : Áo thun dài tay phối 2 màu có nón đáng iu" width="280px"/>
							</a>
							<div class="sptitle">
								<?php echo CHtml::link('Áo kiểu MT436 : Áo thun dài tay phối sọc kẻ cá tính, xinh đẹp.',array('/shop/products/view/id/98/Áo+kiểu+MT444.html'));?>
							</div>
							<span>10.5 $</span>
						</div>
					</div>
					
					<div class="widget">
						<h4>Thiên Vũ</h4>
						<p>Hãy đến cửa hàng của chúng tôi,quý khách sẽ có những phút giây thật sự thoải mái với đầy đủ các mẫu thời trang <a href="<?php echo $this->createUrl('/site/faq') ;?>">FAQ</a> đang thịnh hành nhất hiện nay mẫu mã đẹp,chất lượng và phù hợp với túi tiền của quý khách.</p>
					</div>                              
				</div>                                                
			</div>

			<div class="col-md-3">

				<!-- Sidebar 2 -->
				<div class="sidebar">
					<div class="widget">
						<h4>Thể loại</h4>
						<ul>
							<li><?php echo CHtml::link('Xu hướng thời trang',array('/posts/xu+hướng+thời+trang'));?></li>
							<li><?php echo CHtml::link('Phong cách',array('/posts/phong+cách'));?></li>
							<li><?php  echo CHtml::link('Trang phục',array('/posts/trang+phục'));?></li>
							<li><?php echo CHtml::link('Tuần lễ thời trang',array('/posts/tuần+lễ+thời+trang'));?></li>
							<li><?php echo CHtml::link('Văn hóa giải trí',array('/posts/Văn+hóa+giải+trí'));?></li>
						</ul>		
					</div>
					
					<div class="widget">
						<h4>Giới thiệu</h4>
						<p>Ngày càng nhiều người Việt Nam sử dụng hàng cao cấp đắt tiền, không chỉ vì cái đẹp tinh tế, phong cách khác biệt, mà còn ở bản thân giá trị của thương hiệu đó. Đặt một món đồ hiệu kế bên đồ phổ thông, sẽ rất dễ dàng để nhận ra sự khác biệt đẳng cấp, từ những điểm nhỏ nhặt nhất. Đôi khi chỉ là một logo hết sức đơn giản như dấu Swoosh của Nike chẳng hạn, đơn giản đến mức hoàn hảo.</p>
						<p>Với các tín đồ thời trang, mặc hàng hiệu để trải nghiệm chất lượng chỉ mới là điều kiện “cần”, hàng hiệu có phù hợp với phong cách của mình cũng như có bật lên được cá tính của mình không mới là điều kiện “đủ”. Nhiều năm kinh nghiệm trong ngành thời trang, <a href="<?php echo $this->createUrl('/site/index')?>">Thiên Vũ</a>  mang đến những thương hiệu thời trang hàng đầu tại Mỹ như: Affliction, Rebel Spirit, Sinful, True Religion, Ed Hardy, Christian Audigier, Roar, Xzavier, Rawyalty, Konflic, Xtreme Couture, Throwdown, Robin's Jean, Crash & Burn...</p>
						<p>Trong đó, Affliction, Rebel Spirit, True Religion, Sinful, Roar là những thương hiệu thời trang mới mẻ đối với người Việt Nam, nhưng trên thế giới mà đặc biệt là ở Mỹ, đây là những thương hiệu đậm màu sắc cá tính nhất, luôn được dân sành điệu săn lùng. Những chiếc quần jeans True Religion phủi bụi, chiếc áo thun mang phong cách rock nổi loạn Affliction hay những chiếc áo sơ-mi Roar thiết kế và phối màu độc lạ mang lại một phong cách vừa ấn tượng táo bạo, vừa trẻ trung cá tính cho người mặc. Những thương hiệu này thổi một làn gió hoàn toàn mới vào những tín đồ của thời trang thích sự mới mẻ, lạ lẫm và thể hiện chất riêng của mình.</p>
						<p>Đến với <a href="<?php echo $this->createUrl('/site/index')?>">Thiên Vũ</a> bạn không chỉ mua được những sản phẩm hàng hiệu chính gốc mà còn sở hữu chúng với những mức giá bất ngờ dựa vào chương trình bán hàng hấp dẫn theo từng đợt của <a href="<?php echo $this->createUrl('/site/index')?>">Thiên Vũ</a>.</p>
						<p>Bạn có thể mua sắm thoải mái trên <a href="#">Thiên Vũ</a> mà không có bất kỳ lo lắng nào,hãy gọi ngay tới bộ phận chăm sóc khách hàng 123-456-7890 hoặc email: taixng@gmail.com để có được những giải đáp chi tiết và tận tình nhất.Quý khách hàng có thể tìm hiểu thêm về shop thời trang <a href="<?php echo $this->createUrl('/site/index')?>">Thiên Vũ</a> thông qua các mạng xã hội.Mọi thông tin chi tiết xin liên hệ 123-456-7890 gọi cho chúng tôi để được tư vấn,Thiên Vũ mong nhận được sự đóng góp của quý khách. </p>
						<p>Hãy đến <a href="<?php echo $this->createUrl('/site/index')?>">Thiên Vũ</a> để trải nghiệm thời trang hàng hiệu theo cách chuyên nghiệp và kinh tế nhất nhé!</p>
								
					</div>
					
					<div class="widget">
						<h4>Liên lạc</h4>
						<p>
							Bạn có thể mua sắm thoải mái trên Thiên Vũ mà không có bất kỳ lo lắng nào,hãy gọi ngay tới bộ phận chăm sóc khách hàng 123-456-7890 hoặc email: taixng@gmail.com để có được những giải đáp chi tiết và tận tình nhất. 
						</p>
						<br/>
						<p>
							<i class="icon-home color contact-icon"></i>
							12, Nguyễn Văn Quá, Q12, Hồ Chí Minh
						</p>
						<p>
							<i class="icon-phone color contact-icon"></i>
							Chi nhánh
						</p>
						<p>
							<i class="icon-home color contact-icon"></i>
							216B, Bạch Đằng, Bình Thạnh, Hồ Chí Minh
						</p>
						<p>
							<i class="icon-phone color contact-icon"></i>
							123-456-7890
						</p>
						<p>
							<i class="icon-envelope color contact-icon"></i>
							<a href="mailto:something@gmail.com">taixng@gmail.com</a>
						</p>
					</div>                              
				</div>                                                
			</div>
		</div>
	</div>
</div>


