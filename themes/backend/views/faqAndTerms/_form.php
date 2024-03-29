<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">


                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'faq-form',
                            'enableAjaxValidation' => false,
                            'htmlOptions' => array(
                                'class' => 'form-horizontal'
                            )
                        ));
                        ?>

                        <p class="form-group alert alert-info">
                            <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                        </p>

                        <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-block alert-danger')); ?>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'lang_id', array('class' => 'control-label col-lg-4')); ?>
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
                            <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->dropDownList($model, 'type', array("faq" => "faq", "term" => 'term'), array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'type'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'css_class', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->dropDownList($model, 'css_class', array("primary" => "primary", "success" => 'success', "warning" => 'warning'), array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'css_class'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'question', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textField($model, 'question', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'question'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'answer', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php
                                $this->widget('application.extensions.tinymce.ETinyMce', array(
                                    'editorTemplate' => 'full',
                                    'model' => $model,
                                    'attribute' => 'answer',
                                    'options' => array('theme' => 'advanced')));
                                ?>
                                <?php echo $form->error($model, 'answer'); ?>

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


