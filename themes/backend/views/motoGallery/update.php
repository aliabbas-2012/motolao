<?php
/* @var $this MotoGalleryController */
/* @var $model MotoGallery */

$this->breadcrumbs=array(
	'Moto Galleries'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List MotoGallery', 'url'=>array('index')),
array('label'=>'Create MotoGallery', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update MotoGallery <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>