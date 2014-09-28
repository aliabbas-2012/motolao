<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">

        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/contact.png", Yii::t("contact", "Contact Logo"), array("title" => Yii::t("contact", "Contact Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("contact", "Get in contact with us"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("contact", "contact Summary"); ?>
        </p>

    </div>
    <!-- end: Hero Unit -->

    <!-- start: Row -->
    <div class="row">



        <!-- start: Contact Form -->
        <div class="contactwrap">
            <div class="span4" style="align-content: center; align-items: center;">

                <!-- start: Contact Form -->
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


                        <div class="diarybutton">

                            <?php echo CHtml::submitButton(Yii::t("contact", 'Send message'), array('class' => 'btn btn-lg btn-primary', 'tabindex' => '3')); ?>
                        </div>
                    </fieldset>

                    <?php
                    $this->endWidget();
                    ?>

                </div>
                <!-- end: Contact Form -->

            </div>
        </div>
        <!-- end: Contact Form -->



    </div>
    <!-- end: Row -->


</div>
<!--end: Container-->
<!-- start: Map -->
<div id="contactwrap">

    <!-- starts: Google Maps -->

    <div id="address">
        <!-- start: Contact Info -->

        <p>
            <b>
                <?php echo Yii::t("contact", "MOTOLAO, BAN PHONE PEANG ROAD, 06030 LUANG PRABANG, LAO P.D.R."); ?>
            </b>
        </p>
        <p>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/email.png", Yii::t("contact", "Social Email"), array("title" => Yii::t("contact", "Social Email"))); ?>
            <?php echo Yii::t("contact", "INFO@MOTOLAO.COM"); ?>
        </p>
        <p>	
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/phone.png", Yii::t("contact", "Social Phone"), array("title" => Yii::t("contact", "Social Phone"))); ?>+856 20 54 88 4865
        </p>
        <p>	

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/skype.png", Yii::t("contact", "Social Skype"), array("title" => Yii::t("contact", "Social Skype"))); ?>
            <?php echo Yii::t("contact", "motolao-skype"); ?>
        </p>

        <div id="footer-extramenu-social">

            <ul id="footerextra-nav-social">
                <li><a href="javascript:void(0)" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/fb.png", Yii::t("contact", "Social FB"), array("title" => Yii::t("contact", "Social FB"))); ?></a>
                </li>
                <li><a href="javascript:void(0)" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/google.png", Yii::t("contact", "Social google"), array("title" => Yii::t("contact", "Social google"))); ?></a>
                </li>
                <li><a href="javascript:void(0)" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/printrest.png", Yii::t("contact", "Social printrest"), array("title" => Yii::t("contact", "Social printrest"))); ?></a>
                </li>
                <li><a href="javascript:void(0)" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/flickr.png", Yii::t("contact", "Social flickr"), array("title" => Yii::t("contact", "Social flickr"))); ?></a>
                </li>
                <li><a href="javascript:void(0)" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/youtube.png", Yii::t("contact", "Social youtube"), array("title" => Yii::t("contact", "Social youtube"))); ?></a>
                </li>

            </ul>


        </div>

        <!-- end: Contact Info -->
    </div>
    <div id="googlemaps-container-top">


    </div>
    <div id="googlemaps" class="google-map google-map-full"></div>
    <div id="googlemaps-container-bottom"></div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl . "/assets/" ?>js/jquery.gmap.min.js"></script>
    <script type="text/javascript">
        $('#googlemaps').gMap({
            maptype: 'ROADMAP',
            scrollwheel: false,
            zoom: 13,
            markers: [
                {
                    address: 'Los Angeles, United States', // Your Adress Here
                    html: '',
                    popup: false,
                }

            ],
        });
    </script>
    <!-- end: Google Maps -->
</div>
<!-- end: Map -->
