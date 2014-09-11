<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tour', 'url'=>array('index')),
	array('label'=>'Create Tour', 'url'=>array('create')),
	array('label'=>'Update Tour', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tour', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tour', 'url'=>array('admin')),
);
?>

<h1>View Tour #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'short_title',
		'tour_type',
		'category_id',
		'url',
		'meta_title',
		'meta_description',
		'description',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		'activity_log',
	),
)); ?>
