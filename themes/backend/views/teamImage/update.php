<?php
/* @var $this TeamImageController */
/* @var $model TeamImage */

$this->breadcrumbs=array(
	'Team Images'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List TeamImage', 'url'=>array('index')),
array('label'=>'Create TeamImage', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update TeamImage <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>