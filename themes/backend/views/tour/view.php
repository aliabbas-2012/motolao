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
                                'value' => isset($model->category)?$model->category->name:"",
                                'type'=>"raw",
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
<div class="clear"></div>
<?php
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/scripts/jquery.ba-bbq1.js', CClientScript::POS_END);
?>
<?php
$criteria = new CDbCriteria();
$criteria->addCondition("parent_id =".$model->id);
$lang = new CActiveDataProvider('TourLang', array(
    'criteria' => $criteria,
));

if (count($lang->getTotalItemCount()) > 0) {
    $this->renderPartial("//tour/_languages", array("languages" => $lang));
}
?>
<?php $this->renderPartial("//tour/_lang_form", array("model" => $model->tour_langs, "id" => $model->id)); ?>