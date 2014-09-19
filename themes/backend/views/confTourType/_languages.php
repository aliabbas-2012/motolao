<div class="row">
    <div class="col-lg-12" >
        <?php
        if (!empty($_GET['child_id'])) {
            if($_GET['child_id']=='new'){
                $childModel = new ConfTourTypeLang;
            }
            else {
                $childModel = ConfTourTypeLang::model()->findByPk(($_GET['child_id']));
            }
            
            $this->renderPartial('//confTourType/_lang_form', array(
                'model' => $childModel,
            ));
        }
        ?>
    </div><!-- search-form -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Item Languages
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <?php
                    $this->widget('zii.widgets.grid.CGridView', array(
                        'id' => 'confiItem-grid',
                        'dataProvider' => ConfTourTypeLang::model()->search($model->id),
                        'htmlOptions' => array(
                            'class' => 'table-responsive'
                        ),
                        'itemsCssClass' => 'table table-striped table-bordered table-hover',
                        'columns' => array(
                            array(
                                'name' => 'name',
                                'value' => '$data->name'
                            ),
                            array(
                                'class' => 'CButtonColumn',
                                'template' => '{update}',
                                'buttons' => array(
                                    'update' => array(
                                        'url' => 'Yii::app()->controller->createUrl("load",array("id"=>$data->conf_tour->id,"child_id"=>$data->id,"m"=>"TourType"))'
                                    ),
                                )
                            ),
                        ),
                    ));
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>    
