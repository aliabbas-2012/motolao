<?php
/* @var $this LanguageController */
/* @var $model Language */

$this->breadcrumbs = array(
    'Languages' => array('index'),
    $model->name => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List Language', 'url' => array('index')),
    array('label' => 'Create Language', 'url' => array('create')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Update Language [<?php echo $model->name; ?>]</h1>
    </div>
    <!--end page header -->
</div>
<?php $this->renderPartial('_form', array('model' => $model)); ?>