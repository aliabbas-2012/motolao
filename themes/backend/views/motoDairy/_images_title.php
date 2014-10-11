<div class="col-lg-12">
    <div class="panel-body">
        <div class="table-responsive">
            <div class="row">

                <!--Default Pannel, Primary Panel And Success Panel   -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Other Images
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_1', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_1', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_1)) {
                                        echo CHtml::link("View Image", $model->image_url["image_1"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_1'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_1_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_1_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_1_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                    <!-- image row -->

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_2', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_2', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_2)) {
                                        echo CHtml::link("View Image", $model->image_url["image_2"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_2'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_2_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_2_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_2_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                    <!-- image row -->

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_2', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_2', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_2)) {
                                        echo CHtml::link("View Image", $model->image_url["image_2"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_2'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_2_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_2_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_2_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                    <!-- image row -->

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_3', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_3', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_3)) {
                                        echo CHtml::link("View Image", $model->image_url["image_3"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_3'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_3_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_3_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_3_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                    <!-- image row -->

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_4', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_4', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_4)) {
                                        echo CHtml::link("View Image", $model->image_url["image_4"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_4'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_4_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_4_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_4_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                    <!-- image row -->

                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_5', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->fileField($model, 'image_5', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php
                                    if (!empty($model->id) && !empty($model->image_5)) {
                                        echo CHtml::link("View Image", $model->image_url["image_5"], array("rel" => "lightbox[_default]", "target" => "blank"));
                                    }
                                    ?>
                                    <?php echo $form->error($model, 'image_5'); ?>
                                </div>
                            </div><!-- group -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'image_5_title', array('class' => 'control-label col-lg-3')); ?>
                                <div class="col-lg-9">
                                    <?php echo $form->textField($model, 'image_5_title', array('class' => 'form-control', 'maxlength' => 150)); ?>
                                    <?php echo $form->error($model, 'image_5_title'); ?>

                                </div>

                            </div><!-- group -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>    