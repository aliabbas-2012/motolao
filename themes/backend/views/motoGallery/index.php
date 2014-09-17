<?php
/* @var $this MotoGalleryController */
/* @var $model MotoGallery */

$this->breadcrumbs=array(
	'Moto Galleries'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List MotoGallery', 'url'=>array('index')),
array('label'=>'Create MotoGallery', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#moto-gallery-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<!-- Page-Level CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Manage Moto Galleries</h1>
    </div>
    <!-- end  page header -->
</div>

<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="search-button" href="#">Advanced Search</a>            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'moto-gallery-grid',
                    'dataProvider'=>$model->search(),
                    'htmlOptions' => array(
                    'class' => 'table-responsive'
                    ),
                    'itemsCssClass' => 'table table-striped table-bordered table-hover',
                    'filter'=>$model,
                    'columns'=>array(
                    		'id',
		'lang_id',
		'alt',
		'title',
		'image_large',
		/*
		'image_detail',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		'activity_log',
		*/
                    array(
                    'class'=>'CButtonColumn',
                    ),
                    ),
                    )); ?>

                </div>
            </div>
        </div>
    </div>
</div>    
