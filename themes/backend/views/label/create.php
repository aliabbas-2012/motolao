<?php
/* @var $this LabelController */
/* @var $model Label */

$this->breadcrumbs=array(
	'Labels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Label', 'url'=>array('index')),
	array('label'=>'Manage Label', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create Label</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>