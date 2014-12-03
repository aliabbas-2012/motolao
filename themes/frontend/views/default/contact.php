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
                <?php
                $this->renderPartial("//default/_contact_form", array("model" => $model));
                ?>
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
    <?php
        $contact_us = ConfContactUsSetting::model()->findByPk(1);
    ?>
    <!-- starts: Google Maps -->

    <div id="address">
        <!-- start: Contact Info -->

        <p>
            <b>
                <?php echo Yii::t("contact", $contact_us->address); ?>
            </b>
        </p>
        <p>
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/email.png", Yii::t("contact", "Social Email"), array("title" => Yii::t("contact", "Social Email"))); ?>
            <?php echo Yii::t("contact", $contact_us->email); ?>
        </p>
        <p>	
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/phone.png", Yii::t("contact", "Social Phone"), array("title" => Yii::t("contact", "Social Phone"))); ?><?php echo $contact_us->phone; ?>
        </p>
        <p>	

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/skype.png", Yii::t("contact", "Social Skype"), array("title" => Yii::t("contact", "Social Skype"))); ?>
            <?php echo Yii::t("contact", $contact_us->skype); ?>
        </p>

        <div id="footer-extramenu-social">

            <ul id="footerextra-nav-social">
                <li><a href="<?php echo $contact_us->facebook; ?>" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/fb.png", Yii::t("contact", "Social FB"), array("title" => Yii::t("contact", "Social FB"))); ?></a>
                </li>
                <li><a href="<?php echo $contact_us->google_plus; ?>" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/google.png", Yii::t("contact", "Social google"), array("title" => Yii::t("contact", "Social google"))); ?></a>
                </li>
                <li><a href="<?php echo $contact_us->print_rest; ?>" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/printrest.png", Yii::t("contact", "Social printrest"), array("title" => Yii::t("contact", "Social printrest"))); ?></a>
                </li>
                <li><a href="<?php echo $contact_us->flicker; ?>" 
                       title=""><?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/social/flickr.png", Yii::t("contact", "Social flickr"), array("title" => Yii::t("contact", "Social flickr"))); ?></a>
                </li>
                <li><a href="<?php echo $contact_us->youtube; ?>" 
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
                    //address: '', // Your Adress Here
                    latitude: <?php echo $contact_us->lat; ?>,
                    longitude: <?php echo $contact_us->lng; ?>,
                    html: '<?php echo $contact_us->address; ?>',
                    popup: false,
                }

            ],
        });
    </script>
    <!-- end: Google Maps -->
</div>
<!-- end: Map -->
