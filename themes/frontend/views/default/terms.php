<!--start: Container -->
<div class="container">
    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">

        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/faq.png", Yii::t("terms", "Contact Logo"), array("title" => Yii::t("terms", "Contact Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("terms", "MOTOLAO Term Heading"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("terms", "terms Summary"); ?>
        </p>

    </div>
    <!-- end: Hero Unit -->
    <!-- end: Hero Unit -->

    <!-- start: Row -->
    <div class="row">	      				
        <div class="faq span8">    				
            <?php
            $criteria = new CDbCriteria();
            $criteria->addCondition("lang_id = :lang_id AND t.type = :type");
            $criteria->params = array(
                ":lang_id" => $this->lang_id,
                ":type" => 'term',
            );
            $terms = Faq::model()->findAll($criteria);
            ?>
            <div class="panel-group" id="accordion">
                <?php
                $counter = 1;
                foreach ($terms as $term) {
                    ?>
                    <div class="panel panel-<?php echo $term->css_class; ?>">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordion<?php echo $counter; ?>">
                                    <?php echo $term->question; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="accordion<?php echo $counter; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <?php echo $term->answer; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter++;
                }
                ?>

            </div>

        </div>
        <!--end: Container-->

        <!-- start: Contact Form -->
        <div class="contact_faq span4"> 

            <div class="span4">
                <div class="title"><h3><?php echo Yii::t("terms", "ASK A QUESTION Terms"); ?></h3></div>

                <!-- start: Contact Form -->
                <?php
                $this->renderPartial("//default/_contact_form", array("model" => $model));
                ?>
                <!-- end: Contact Form -->
            </div>
        </div>

    </div>
</div>