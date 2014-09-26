<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">

        <div class="logosign">

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/faq.png", Yii::t("faq", "Faq Logo"), array("title" => Yii::t("faq", "Faq Logo"))); ?>
        </div>

    </div>
    <h2><?php echo Yii::t("faq", "Faq Title"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("faq", "Faq description"); ?>
        </p>
    </div>
    <!-- end: Hero Unit -->



    <!-- start: Row -->
    <div class="row">	      				
        <div class="faq span8">    				
            <?php
            $criteria = new CDbCriteria();
            $criteria->addCondition("lang_id = :lang_id AND t.type = :type");
            $criteria->params = array(
                ":lang_id" => $this->lang_id,
                ":type" => 'faq',
            );
            $faqs = Faq::model()->findAll($criteria);
            ?>
            <div class="panel-group" id="accordion">
                <?php
                $counter = 1;
                foreach ($faqs as $faq) {
                    ?>
                    <div class="panel panel-<?php echo $faq->css_class; ?>">

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#accordion<?php echo $counter; ?>">
                                   <?php echo $faq->question; ?>
                                </a>
                            </h4>
                        </div>
                        <div id="accordion<?php echo $counter; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                               <?php echo $faq->answer; ?>
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
                <div class="title"><h3>ASK A QUESTION</h3></div>

                <!-- start: Contact Form -->
                <div id="contact-form">

                    <form method="post" action="">

                        <fieldset>
                            <div class="clearfix">
                                <label for="name"><span>Your name</span></label>
                                <div class="input">
                                    <input tabindex="1" size="18" id="name" name="name" type="text" value="">
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="email"><span>Email</span></label>
                                <div class="input">
                                    <input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge">
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="email"><span>Phone number</span></label>
                                <div class="input">
                                    <input tabindex="2" size="25" id="phone" name="phone" type="text" value="" class="input-xlarge">
                                </div>
                            </div>

                            <div class="clearfix">
                                <label for="message"><span>Message</span></label>
                                <div class="input">
                                    <textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7"></textarea>
                                </div>
                            </div>



                            <div class="diarybutton">
                                <button tabindex="3" type="submit" class="btn btn-lg btn-primary">Send message</button>
                            </div>
                        </fieldset>

                    </form>

                </div>
                <!-- end: Contact Form -->
            </div>
        </div>

    </div>
</div>