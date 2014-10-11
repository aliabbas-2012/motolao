<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Create Update Seo Meta
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">


                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'seo-form',
                            'enableAjaxValidation' => false,
                            'htmlOptions' => array(
                                'class' => 'form-horizontal'
                            )
                        ));
                        $criteria = new CDbCriteria();
                        $languages_db = CHtml::listData(Language::model()->findAll($criteria), "id", "name");
                        $languages = array("" => "Select") + $languages_db;
                        ?>

                        <p class="form-group alert alert-info">
                            <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                        </p>

                        <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-block alert-danger')); ?>

                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'lang_id', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php
                                echo $form->dropDownList($model, 'lang_id', $languages, array('class' => 'form-control'));
                                ?>
                                <?php echo $form->error($model, 'lang_id'); ?>
                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'key', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->dropDownList($model, 'key', Yii::app()->params['keys'], array('class' => 'form-control', 'maxlength' => 20)); ?>
                                <?php echo $form->error($model, 'key'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'title'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'keywords', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'keywords', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'keywords'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-4')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textArea($model, 'description', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                <?php echo $form->error($model, 'description'); ?>
                            </div>
                        </div><!-- group -->

                        <div class="form-group">
                            <div class="col-lg-4"></div>
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


