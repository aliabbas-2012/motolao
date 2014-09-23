<?php
/* @var $this SocialMediaLinkController */
/* @var $model SocialMediaLink */

$this->breadcrumbs = array(
    'Social Media Links' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List SocialMediaLink', 'url' => array('index')),
    array('label' => 'Create SocialMediaLink', 'url' => array('create')),
);
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View Social Media Link #<?php echo $model->id; ?></h1>
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
                            'title',
                            'url',
                            'meta_tag',
                        ),
                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>    
