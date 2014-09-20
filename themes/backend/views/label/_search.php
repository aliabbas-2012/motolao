<?php
/* @var $this LabelController */
/* @var $model Label */
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
                            <?php echo $form->labelEx($model, 'key', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'key', array('class' => 'form-control', 'maxlength' => 20)); ?>

                            </div>

                        </div><!-- group -->
                        <div class="form-group">
                            <?php echo $form->labelEx($model, 'value', array('class' => 'control-label col-lg-2')); ?>
                            <div class="col-lg-4">
                                <?php echo $form->textField($model, 'value', array('class' => 'form-control', 'maxlength' => 20)); ?>

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


