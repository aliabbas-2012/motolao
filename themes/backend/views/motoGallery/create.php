<?php
/* @var $this MotoGalleryController */
/* @var $model MotoGallery */

$this->breadcrumbs=array(
	'Moto Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MotoGallery', 'url'=>array('index')),
	array('label'=>'Manage MotoGallery', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create MotoGallery</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>