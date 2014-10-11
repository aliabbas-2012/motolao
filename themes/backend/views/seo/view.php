<?php
/* @var $this SeoController */
/* @var $model Seo */

$this->breadcrumbs = array(
    'Seos' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Seo', 'url' => array('index')),
    array('label' => 'Create Seo', 'url' => array('create')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View Seo #<?php echo $model->id; ?></h1>
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
                                'name' => 'lang_id',
                                'value' => isset($model->lang) ? $model->lang->name : ""
                            ),
                            'key',
                            'title',
                            'keywords',
                            'description',
                        ),
                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>    
