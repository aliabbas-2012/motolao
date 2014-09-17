<?php
/* @var $this MotoDairyController */
/* @var $model MotoDairy */

$this->breadcrumbs=array(
	'Moto Dairies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MotoDairy', 'url'=>array('index')),
	array('label'=>'Manage MotoDairy', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create MotoDairy</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>