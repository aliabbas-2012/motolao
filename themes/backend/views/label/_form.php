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
                            'id' => 'label-form',
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
                            <?php echo $form->labelEx($model, 'category', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->dropDownList($model, 'category', Yii::app()->params['category'], array('class' => 'form-control', 'maxlength' => 20)); ?>
                                <?php echo $form->error($model, 'category'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'key', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-8">
                                <?php
                                    $key_htmlOpt = array('class' => 'form-control', 'maxlength' => 150,);
                                    if(!$model->isNewRecord){
                                        $key_htmlOpt['readonly'] = 'readonly';
                                    }
                                    echo $form->textArea($model, 'key', $key_htmlOpt);
                                ?>
                                <?php echo $form->error($model, 'key'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'value', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-8">
                                <?php echo $form->textArea($model, 'value', array('class' => 'form-control', )); ?>
                                <?php echo $form->error($model, 'value'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 input-group-btn">
                                <?php echo CHtml::submitButton('Save', array('class' => 'btn btn-primary')); ?>
                            </div>
                        </div>
                        <?php
                        $this->endWidget();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


