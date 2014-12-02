<?php
if (!$model->isNewRecord) {
    ?>
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
                                ),
                            ));
                            ?>

                            <p class="form-group alert alert-info">
                                <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                            </p>

                            <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-block alert-danger')); ?>


                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-4">
                                    <?php echo $form->textField($model, 'email', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'email'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'phone', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-4">
                                    <?php echo $form->textField($model, 'phone', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'phone'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'skype', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-4">
                                    <?php echo $form->textField($model, 'skype', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'skype'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'facebook', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'facebook', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'facebook'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'google_plus', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'google_plus', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'google_plus'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'print_rest', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'print_rest', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'print_rest'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'flicker', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'flicker', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'flicker'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'youtube', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'youtube', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'youtube'); ?>

                                </div>

                            </div><!-- group -->

                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'address', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textArea($model, 'address', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'address'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'search_address', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-10">
                                    <?php echo $form->textField($model, 'search_address', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'search_address'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'lat', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-4">
                                    <?php echo $form->textField($model, 'lat', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'lat'); ?>

                                </div>

                            </div><!-- group -->
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'lng', array('class' => 'control-label col-lg-2')); ?>
                                <div class="col-lg-4">
                                    <?php echo $form->textField($model, 'lng', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                    <?php echo $form->error($model, 'lng'); ?>

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

    <?php
}


