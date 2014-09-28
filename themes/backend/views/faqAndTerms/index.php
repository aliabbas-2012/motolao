<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->breadcrumbs = array(
    'Faqs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Faq', 'url' => array('index')),
    array('label' => 'Create Faq', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#faq-grid').yiiGridView('update', {
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
        <h1 class="page-header">Manage Faq AND Terms</h1>
    </div>
    <!-- end  page header -->
</div>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<div class="col-lg-12">
    <div class="panel-body">
        <div class="table-responsive">
            <div class="row">
                <ul class="nav nav-tabs">
                    <?php
                    $total_types = array(
                        "faq" => "faq", "term" => 'term'
                    );
                    foreach ($total_types as $type) {
                        $css_class = $type == $model->type ? 'active' : '';
                        echo "<li class='" . $css_class . "'>";
                        echo CHtml::link(ucfirst($type), $this->createUrl("index", array('Faq[type]' => $type)));
                        echo "</li>";
                    }
                    echo "<li>";
                    echo CHtml::link("All", $this->createUrl("index"));
                    echo "</li>";
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a class="search-button" href="#">Advanced Search</a>            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'faq-grid',
                        'dataProvider' => $model->search(),
                        'htmlOptions' => array(
                            'class' => 'table-responsive'
                        ),
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'filter' => $model,
                        'columns' => array(
                            array(
                                'name' => 'lang_id',
                                'value' => 'isset($data->lang)?$data->lang->name:""'
                            ),
                            array(
                                'name' => 'type',
                                'value' => 'isset($data->type)?$data->type:""'
                            ),
                            array(
                                'name' => 'css_class',
                                'value' => 'isset($data->css_class)?$data->css_class:""'
                            ),
                            'question',
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