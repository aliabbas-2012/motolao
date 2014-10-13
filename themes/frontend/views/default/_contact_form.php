<div id="contact-form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-form1',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <fieldset>
        <div class="clearfix">
            <label for="name"><span><?php echo $model->getAttributeLabel("name"); ?></span></label>
            <div class="input">
                <?php echo $form->textField($model, 'name', array('tabindex' => '1', 'size' => 18)); ?>
            </div>
        </div>

        <div class="clearfix">
            <label for="email"><span><?php echo $model->getAttributeLabel("email"); ?></span></label>
            <div class="input">
                <?php echo $form->emailField($model, 'email', array('tabindex' => '2', 'size' => 25, "class" => "input-xlarge")); ?>
            </div>
        </div>

        <div class="clearfix">
            <label for="email"><span><?php echo $model->getAttributeLabel("date"); ?></span></label>
            <div class="input">
                <?php
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'attribute' => 'date',
                    'htmlOptions' => array(
                        'size' => '10', // textField size
                        'maxlength' => '10', // textField maxlength
                        'tabindex' => '2', 'size' => 25, "class" => "input-xlarge"
                    ),
                ));
                ?>
            </div>
        </div>
        <div class="clearfix">
            <label for="email"><span><?php echo $model->getAttributeLabel("phone"); ?></span></label>
            <div class="input">
                <?php echo $form->textField($model, 'phone', array('tabindex' => '3', 'size' => 25, "class" => "input-xlarge")); ?>
            </div>
        </div>

        <div class="clearfix">
            <label for="message"><span><?php echo $model->getAttributeLabel("body"); ?></span></label>
            <div class="input">
                <?php echo $form->textArea($model, 'body', array('tabindex' => '3', 'rows' => 7, "class" => "input-xlarge")); ?>
            </div>
        </div>
        <?php echo $form->hiddenField($model, 'subject'); ?>

        <div class="diarybutton">

            <?php echo CHtml::submitButton(Yii::t("contact", 'Send message'), array('class' => 'btn btn-lg btn-primary', 'tabindex' => '3')); ?>
        </div>
    </fieldset>

    <?php
    $this->endWidget();
    ?>

</div>