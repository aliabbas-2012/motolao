<?php
/* @var $this SeoController */
/* @var $model Seo */
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


