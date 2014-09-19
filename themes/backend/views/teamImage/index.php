<?php
/* @var $this TeamImageController */
/* @var $model TeamImage */

$this->breadcrumbs = array(
    'Team Images' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List TeamImage', 'url' => array('index')),
    array('label' => 'Create TeamImage', 'url' => array('create')),
);
?>

<!-- Page-Level CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Manage Team Images</h1>
    </div>
    <!-- end  page header -->
</div>
<?php
$criteria = new CDbCriteria();
$languages_db = CHtml::listData(Language::model()->findAll($criteria), "id", "name");
$languages = array("" => "Select") + $languages_db;
$this->renderPartial("_form", array("model" => $model_form, 'languages' => $languages));
?>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                All Images
            </div>
            <div class="col-lg-2">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="row">
                            <ul class="nav nav-tabs">
                                <?php
                                foreach ($languages_db as $id => $name) {
                                    $css_class = $id == $model->lang_id ? 'active' : '';
                                    echo "<li class='" . $css_class . "'>";
                                    echo CHtml::link($name, $this->createUrl("index", array('TeamImage[lang_id]' => $id)));
                                    echo "</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="row">
                            <?php
                            if ($model->search()->itemCount > 0):
                                foreach ($model->search()->getData() as $data):
                                    ?>
                                    <!--Default Pannel, Primary Panel And Success Panel   -->
                                    <div class="col-lg-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <?php echo $data->name; ?>
                                                <?php
                                                echo CHtml::link(" (Edit) ", $this->createUrl("index", array("id" => $data->id)));
                                                ?>
                                            </div>

                                            <div class="panel-footer">
                                                <?php echo $data->role; ?>
                                            </div>
                                            <div class="panel-footer">
                                                <?php echo $data->description; ?>
                                            </div>
                                            <div class="panel-footer">
                                                <?php echo "Language :" . $data->lang->name; ?>
                                            </div>
                                            <div class="panel-body">
                                                <?php
                                                echo CHtml::link(CHtml::image($data->image_url['image_large'], $data->alt, array("class" => "col-lg-12")), $data->image_url['image_large'], array("target" => "_blank"));
                                                ?>
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
