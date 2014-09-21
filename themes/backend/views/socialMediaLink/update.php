<?php
/* @var $this SocialMediaLinkController */
/* @var $model SocialMediaLink */

$this->breadcrumbs=array(
	'Social Media Links'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List SocialMediaLink', 'url'=>array('index')),
array('label'=>'Create SocialMediaLink', 'url'=>array('create')),

);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Social Media Link <?php echo $model->id; ?></h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>