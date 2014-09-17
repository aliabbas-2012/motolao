<?php
/* @var $this SocialMediaLinkController */
/* @var $model SocialMediaLink */

$this->breadcrumbs=array(
	'Social Media Links'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SocialMediaLink', 'url'=>array('index')),
	array('label'=>'Manage SocialMediaLink', 'url'=>array('admin')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Create SocialMediaLink</h1>
    </div>
    <!--end page header -->
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>