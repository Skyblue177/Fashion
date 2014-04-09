<ul>

	<?php foreach($this->getRecentPosts() as $post): ?>
	<li>
		<?php echo CHtml::link(CHtml::encode($post->title),array('post/view','id'=>$post->id)); ?>
	</li>
	<?php endforeach; ?>

</ul>
