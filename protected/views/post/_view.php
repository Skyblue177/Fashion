<div class="entry">
	<h2><?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?></h2>
	
	<div class="meta">
		<i class="icon-user"></i> <?php echo $data->author->username;?> <i class="icon-calendar"></i> <?php echo date('F j, Y',$data->create_time); ?>
		<span class="pull-right"><i class="icon-comment"></i> <?php echo CHtml::link("Comments ({$data->commentCount})",$data->url.'#comments'); ?></span>
		<span class="pull-right"><i class="icon-folder-open"></i> <?php echo CHtml::link('Permalink', $data->url); ?></span>
	</div>
	
	<!-- Thumbnail -->
	<div class="bthumb">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fashion/'.$data->image,"image",array('class'=>'img-responsive')); ?>
	</div>
								 
	<p>
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			$str = "$data->content";
			echo substr($str,0,200)."...";
			$this->endWidget();
		?>
	</p>
	
		
	<?php echo CHtml::link('Read more', $data->url,array('class'=>'btn btn-info')); ?>
	<br><br>
	
	
	<h4>Tags</h4>	
	<?php echo CHtml::link('Xu hướng thời trang',array('/posts/xu+hướng+thời+trang'));?> ,
	<?php echo CHtml::link('Phong cách',array('/posts/phong+cách'));?> ,
	<?php echo CHtml::link('Trang phục',array('/posts/trang+phục'));?> ,
	<?php echo CHtml::link('Tuần lễ thời trang',array('/posts/tuần+lễ+thời+trang'));?> ,
	<?php echo CHtml::link('Văn hóa giải trí',array('/posts/Văn+hóa+giải+trí'));?> ,
	
		
	<!-- Pagination -->
		
</div>


				