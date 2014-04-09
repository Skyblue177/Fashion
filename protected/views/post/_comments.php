<?php foreach($comments as $comment): ?>
<div class="comment-list" id="c<?php echo $comment->id; ?>">
	<div class="comment">
		<?php echo CHtml::link("", $comment->getUrl($post), array(
			'title'=>'Permalink to this comment',
		)); ?>
		
		<div class="comment-author">
			<?php echo $comment->authorLink; ?> says:
		</div>
		<div class="cmeta">
			<?php echo date('F j, Y',$comment->create_time); ?>
		</div>

		<p>
			<?php echo nl2br(CHtml::encode($comment->content)); ?>
		</p>
	</div>
	
	<hr>
</div><!-- comment -->
<?php endforeach; ?>