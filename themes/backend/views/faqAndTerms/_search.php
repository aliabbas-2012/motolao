<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">

                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'action' => Yii::app()->createUrl($this->route),
                            'method' => 'get',
                        ));
                        ?>


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'type', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'type'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'css_class', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'css_class', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'css_class'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'question', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'question', array('class' => 'form-control', 'maxlength' => 250)); ?>
                                <?php echo $form->error($model, 'question'); ?>

                            </div>

                        </div><!-- group -->


                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'answer', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'answer', array('class' => 'form-control')); ?>
                                <?php echo $form->error($model, 'answer'); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 input-group-btn">
                                <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
                            </div>
                        </div>


                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    


