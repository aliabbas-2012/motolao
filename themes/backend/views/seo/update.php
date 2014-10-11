<?php
/* @var $this SeoController */
/* @var $model Seo */

$this->breadcrumbs=array(
	'Seos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List Seo', 'url'=>array('index')),
array('label'=>'Create Seo', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Seo <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>