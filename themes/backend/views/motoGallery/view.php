<?php
/* @var $this MotoGalleryController */
/* @var $model MotoGallery */

$this->breadcrumbs=array(
	'Moto Galleries'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'List MotoGallery', 'url'=>array('index')),
array('label'=>'Create MotoGallery', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View MotoGallery #<?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php $this->widget('zii.widgets.CDetailView', array(
                    'data'=>$model,
                    'attributes'=>array(
                    		'id',
		'lang_id',
		'alt',
		'title',
		'image_large',
		'image_detail',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		'activity_log',
                    ),
                    )); ?>

                </div>
            </div>
        </div>
    </div>
</div>    
