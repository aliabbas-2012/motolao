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
                            'id' => 'language-form',
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
                            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'name'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <div class="col-lg-2">
                                <?php echo $form->labelEx($model, 'code'); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $form->textField($model, 'code', array('class' => 'form-control', 'size' => 60, 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'code'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-2">
                                <?php echo $form->labelEx($model, 'flag_img'); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $form->fileField($model, 'flag_img', array('class' => 'form-control', 'size' => 60, 'maxlength' => 150)); ?>
                                <?php
                                if (!empty($model->flag_img)) {
                                    echo CHtml::link($model->flag_img, $model->show_image['link'], array("target" => "_blank"));
                                }
                                ?>
                                <?php echo $form->error($model, 'flag_img'); ?>
                            </div>
                        </div>



                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'meta_title', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'meta_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'meta_title'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'meta_description', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textArea($model, 'meta_description', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'meta_description'); ?>

                            </div>

                        </div><!-- group -->


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


