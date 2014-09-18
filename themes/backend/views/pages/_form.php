<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">

                        
                        <?php                         $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'pages-form',
                        'enableAjaxValidation' => false,
                        'htmlOptions' => array(
                        'class' => 'form-horizontal'
                        )
                        ));
                        ?>

                        <p class="form-group alert alert-info">
                            <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
                        </p>

                        <?php echo $form->errorSummary($model,'', '',array('class' => 'alert alert-block alert-danger')); ?>

                                                                                                          

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'lang_id',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textField($model, 'lang_id', array('class' => 'form-control','maxlength' => 11)); ?>
                                        <?php echo $form->error($model,'lang_id'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'key',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textField($model, 'key', array('class' => 'form-control','maxlength' => 20)); ?>
                                        <?php echo $form->error($model,'key'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'title',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textField($model, 'title', array('class' => 'form-control','maxlength' => 150)); ?>
                                        <?php echo $form->error($model,'title'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'url',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textField($model, 'url', array('class' => 'form-control','maxlength' => 150)); ?>
                                        <?php echo $form->error($model,'url'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'meta_tag',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textArea($model, 'meta_tag',array('class' => 'form-control')); ?>
                                        <?php echo $form->error($model,'meta_tag'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'meta_description',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textArea($model, 'meta_description',array('class' => 'form-control')); ?>
                                        <?php echo $form->error($model,'meta_description'); ?>
 
                                    </div>

                                </div><!-- group -->
                                                                                                                                                                                                                                                                                                  

                                <div class="form-group">
                                    <?php echo $form->labelEx($model,'activity_log',array('class' => 'control-label col-lg-2')); ?>
                                    <div class="col-lg-4">
                                        <?php echo $form->textArea($model, 'activity_log',array('class' => 'form-control')); ?>
                                        <?php echo $form->error($model,'activity_log'); ?>
 
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


