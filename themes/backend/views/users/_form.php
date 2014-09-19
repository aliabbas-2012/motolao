<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo isset($model->id) ? CHtml::tag('span',array('size'=>50,'maxlength'=>50,'id'=>  ucfirst($model->tableName())."_username",'name'=>ucfirst($model->tableName())."[username]"),$model->username) : $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php //echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
                <?php echo isset($model->id) ? CHtml::tag('span',array('size'=>50,'maxlength'=>50,'id'=>ucfirst($model->tableName())."_email",'name'=>ucfirst($model->tableName())."[email]"),$model->email) : $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	<?php
		if(!$model->isNewRecord):
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->checkBox($model,'is_active'); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>
        
        <div class="row">
                <?php echo $form->labelEx($model,'notify_email'); ?>
                <?php echo $form->checkBox($model,'notify_email'); ?>        
                <?php echo $form->error($model,'notify_email'); ?>    
        </div>
	<?php
		endif;
	?>
        
        
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->