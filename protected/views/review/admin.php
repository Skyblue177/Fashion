<div class="container">
	<?php
	/* @var $this ReviewController */
	/* @var $model Review */

	$this->breadcrumbs=array(
		'Reviews'=>array('index'),
		'Manage',
	);

	/*$this->menu=array(
		array('label'=>'List Review', 'url'=>array('index')),
		array('label'=>'Create Review', 'url'=>array('create')),
	);
	*/
	
	Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#review-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
	");
	?>

	<h2>Quản lý phản hồi của khách hàng </h2>
	<hr>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'review-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'name',
			'review',
			'email',
			'image',
			'create_time',
			/*
			'update_time',
			*/
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
	<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
	<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
	</div><!-- search-form -->
</div>
