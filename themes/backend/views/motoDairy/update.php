<?php
/* @var $this MotoDairyController */
/* @var $model MotoDairy */

$this->breadcrumbs=array(
	'Moto Dairies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List MotoDairy', 'url'=>array('index')),
array('label'=>'Create MotoDairy', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update MotoDairy <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>