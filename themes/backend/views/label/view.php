<?php
/* @var $this LabelController */
/* @var $model Label */

$this->breadcrumbs = array(
    'Labels' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Label', 'url' => array('index')),
    array('label' => 'Create Label', 'url' => array('create')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View Label #<?php echo $model->id; ?></h1>
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
                        'attributes' => array(
                            array(
                                'name' => 'lang',
                                'value' => isset($model->lang) ? $model->lang->name : ""
                            ),
                            'key',
                            'value',
                        ),
                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>    
