<?php
/* @var $this LabelController */
/* @var $model Label */

$this->breadcrumbs = array(
    'Labels' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Label', 'url' => array('index')),
    array('label' => 'Create Label', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#label-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<!-- Page-Level CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Manage Labels</h1>
    </div>
    <!-- end  page header -->
</div>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    $criteria = new CDbCriteria();
    $languages_db = CHtml::listData(Language::model()->findAll($criteria), "id", "name");

    $criteria = new CDbCriteria();
    $criteria->group = 'category';
    $criteria->select = 'category';
    $groups = Label::model()->findAll($criteria);
    ?>
</div><!-- search-form -->
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="search-button" href="#">Advanced Search</a>           
            </div>
            <div class="col-lg-8">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="row">
                            <ul class="nav nav-tabs">
                                <?php
                                foreach ($languages_db as $id => $name) {
                                    $css_class = $id == $model->lang_id ? 'active' : '';
                                    echo "<li class='" . $css_class . " '>";
                                    echo CHtml::link($name, $this->createUrl("index", array('Label[lang_id]' => $id)));
                                    echo "</li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="row">
                            <ul class="nav nav-tabs">
                                <?php
                                foreach ($groups as $group) {
                                    $css_class = $model->category == $group->category ? 'active' : '';
                                    echo "<li class='" . $css_class . " '>";
                                    echo CHtml::link($group->category, $this->createUrl("index", array('Label[category]' => $group->category)));
                                    echo "</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'label-grid',
                        'dataProvider' => $model->search(),
                        'htmlOptions' => array(
                            'class' => 'table-responsive'
                        ),
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'filter' => $model,
                        'columns' => array(
                            array(
                                'name' => 'lang_id',
                                'value' => 'isset($data->lang)?$data->lang->name:""',
                                "type" => 'raw'
                            ),
                            'category',
                            'key',
                            'value',
                            array(
                                'class' => 'CButtonColumn',
                            ),
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