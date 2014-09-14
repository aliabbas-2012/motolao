

<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
               Create or Edit Tour Languages
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $option = array("id" => $id,"related"=>"tour_langs");
                        if(!empty($model->id)){
                            $option['related_id'] = $model->id;
                        }
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'tour-lang-form',
                            'enableAjaxValidation' => false,
                            'action' => $this->createUrl("/tour/view",$option ),
                        ));
                        $form->hiddenField($model, "parent_id")
                        ?>

                        <p class="form-group alert alert-info">Fields with <span class="required">*</span> are required.</p>

                        <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-block alert-danger')); ?>
                        <div class="col-lg-6">
                            ali
                        </div>
                        <div class="col-lg-6">
                            ali
                        </div>
                       

                        <div class="form-group">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-6 input-group-btn">
                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class" => "btn btn-primary")); ?>
                            </div>
                        </div>


                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!-- form -->