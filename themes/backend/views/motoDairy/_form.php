<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo CHtml::link("[Add New]", $this->createUrl("index")); ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">


                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'moto-dairy-form',
                            'enableAjaxValidation' => false,
                            'htmlOptions' => array(
                                'class' => 'form-horizontal',
                                'enctype' => 'multipart/form-data'
                            )
                        ));
                        ?>

                        <p class="form-group alert alert-info">
                            <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                        </p>

                        <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-block alert-danger')); ?>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'lang_id', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php
                                $criteria = new CDbCriteria();
                                $languages = array("" => "Select") + CHtml::listData(Language::model()->findAll($criteria), "id", "name");
                                echo $form->dropDownList($model, 'lang_id', $languages, array('class' => 'form-control'));
                                ?>
                                <?php echo $form->error($model, 'lang_id'); ?>
                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'alt', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'alt', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'alt'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'title'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'image_large', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->fileField($model, 'image_large', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php
                                if (!empty($model->id) && !empty($model->image_large)) {
                                    echo CHtml::link("View Image", $model->image_url["image_large"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                }
                                ?>
                                <?php echo $form->error($model, 'image_large'); ?>
                            </div>

                        </div><!-- group -->
                        <?php
                        $this->renderPartial("_images_title", array("model" => $model, "form" => $form));
                        ?>
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php
                                $this->widget('application.extensions.tinymce.ETinyMce', array(
                                    'editorTemplate' => 'full',
                                    'model' => $model,
                                    'attribute' => 'description',
                                    'options' => array('theme' => 'advanced')));
                                ?>
                                <?php echo $form->error($model, 'description'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 input-group-btn">
                                <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
                                <?php
                                $this->endWidget();
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


