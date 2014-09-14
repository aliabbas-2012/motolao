<?php
/* @var $this TourController */
/* @var $model Tour */

$this->breadcrumbs = array(
    'Tours' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Tour', 'url' => array('index')),
    array('label' => 'Create Tour', 'url' => array('create')),
);
?>
<!-- Page-Level CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">View Tour #<?php echo $model->id; ?></h1>
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
                            'short_title',
                            'tour_type',
                            array(
                                'name' => 'category_id',
                                'value' => isset($model->category) ? $model->category->name : "",
                                'type' => "raw",
                            ),
                            'url',
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
<?php
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/scripts/jquery.ba-bbq1.js', CClientScript::POS_END);
?>
<div class="clear"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Tour Languages</a>
                </li>
                <li><a href="#profile" data-toggle="tab">Profile</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <?php
                    $criteria = new CDbCriteria();
                    $criteria->addCondition("parent_id =" . $model->id);
                    $lang = new CActiveDataProvider('TourLang', array(
                        'criteria' => $criteria,
                    ));

                    if (count($lang->getTotalItemCount()) > 0) {
                        $this->renderPartial("//tour/_languages", array("languages" => $lang));
                    }
                    ?>
                    <?php $this->renderPartial("//tour/_lang_form", array("model" => $model->tour_langs, "id" => $model->id)); ?>
                </div>
                <div class="tab-pane fade" id="profile">
                    <h4>Profile Tab</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

            </div>
        </div>
    </div>

</div>