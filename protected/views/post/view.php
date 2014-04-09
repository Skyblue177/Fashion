<?php
$this->breadcrumbs=array(
	$model->title,
);
$this->pageTitle=$model->title;
?>

<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><i class="icon-desktop color"></i> Blog <small>Subtext for header</small></h2>
		<hr />
	</div>
</div>
<!-- Page title -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="posts">
					 <!-- Each posts should be enclosed inside "entry" class" -->
					<!-- Post one -->
					<div class="entry">
						
						<h2><?php echo $model->title; ?></h2>
					 
						<!-- Meta details -->
						<div class="meta">
							<i class="icon-user"></i> <?php echo $model->author->username;?> <i class="icon-calendar"></i> <?php echo date('F j, Y',$model->create_time); ?>
							<span class="pull-right"><i class="icon-comment"></i> <?php echo CHtml::link("Comments ({$model->commentCount})",$model->url.'#comments'); ?></span>
							<span class="pull-right"><i class="icon-folder-open"></i> <?php echo CHtml::link('Permalink', $model->url); ?></span>
						</div>
					 
						<!-- Thumbnail -->
						<div class="bthumb">
							<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fashion/'.$model->image,"image",array('class'=>'img-responsive')); ?>
						</div>
					 
						<!-- Para -->
						<p>  
							<?php
								$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
								echo $model->content;
								$this->endWidget();
							?>
						</p>

					</div>
					
					<div class="comments">
						<?php if($model->commentCount>=1): ?>
						
						<div class="title">
							<h5><?php echo $model->commentCount>1 ? $model->commentCount . ' comments' : 'One comment'; ?></h5>
						</div>
							
						<?php $this->renderPartial('_comments',array(
							'post'=>$model,
							'comments'=>$model->comments,
						)); ?>
						<?php endif; ?>
					</div>
					<div class="respond">
						<div class="title"><h5>Leave a Comment</h5></div>

						<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
							<div class="flash-success">
								<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
							</div>
						<?php else: ?>
							<?php $this->renderPartial('/comment/_form',array(
								'model'=>$comment,
							)); ?>
						<?php endif; ?>
					</div><!-- comments -->
				</div>
			</div>
			
			<div class="col-md-4 col-sm-4">

				<!-- Sidebar 1 -->

				<div class="sidebar">
					<!-- Widget -->
					<div class="widget">
						<h4>Tìm kiếm</h4>
						<form class="form-inline widget-search" role="form">
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Type">
							</div>
							<button type="submit" class="btn btn-info">Tìm kiếm</button>
						</form>
					</div>
					<div class="widget">
						<h4>Bài viết mới nhất</h4>
						<?php $this->widget('RecentPosts', array(
							'maxPosts'=>Yii::app()->params['recentPostCount'],
						)); ?>
					</div>
					<div class="widget">
						<h4>Thiên Vũ</h4>
						<p>Hãy đến cửa hàng của chúng tôi,quý khách sẽ có những phút giây thật sự thoải mái với đầy đủ các mẫu thời trang <a href="#">FQA</a> đang thịnh hành nhất hiện nay mẫu mã đẹp,chất lượng và phù hợp với túi tiền của quý khách.</p>
					</div>                              
			   </div>                                                
			</div>		
		</div>
	</div>
</div>