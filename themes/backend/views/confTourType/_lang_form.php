<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Language of Conf Tour Types
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
                            <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'name', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'name'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <div class="col-lg-2">
                                <?php echo $form->labelEx($model, 'lang_id'); ?> 
                            </div>
                            <div class="col-lg-6">
                                <?php
                                $criteria = new CDbCriteria();
                                $criteria->addCondition("Lower(name)<>'english'");
                                $languages = array("" => "Select") + CHtml::listData(Language::model()->findAll($criteria), "id", "name");
                                echo $form->dropDownList($model, 'lang_id', $languages, array('class' => 'form-control'));
                                ?>
                                <?php echo $form->error($model, 'lang_id'); ?>
                            </div>
                        </div>


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


