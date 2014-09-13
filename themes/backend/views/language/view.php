<?php
/* @var $this LanguageController */
/* @var $model Language */

$this->breadcrumbs = array(
    'Languages' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Language', 'url' => array('index')),
    array('label' => 'Create Language', 'url' => array('create')),
);
?>
<!-- Page-Level CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View Language [<?php echo $model->name; ?>]</h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.CDetailView', array(
                        'data' => $model,
                        'htmlOptions' => array("class" => "table table-striped table-bordered table-hover"),
                        'attributes' => array(
                            'name',
                            'code',
                            'flag_img',
                            'meta_title',
                            'meta_description',
                            'description',
                        ),
                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>    
