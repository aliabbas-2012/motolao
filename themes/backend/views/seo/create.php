<?php
/* @var $this SeoController */
/* @var $model Seo */

$this->breadcrumbs=array(
	'Seos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seo', 'url'=>array('index')),
	array('label'=>'Manage Seo', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create Seo</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>