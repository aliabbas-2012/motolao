<?php
/* @var $this TeamImageController */
/* @var $model TeamImage */

$this->breadcrumbs=array(
	'Team Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeamImage', 'url'=>array('index')),
	array('label'=>'Manage TeamImage', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create TeamImage</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>