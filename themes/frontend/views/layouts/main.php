<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="<?php echo Yii::app()->language; ?>" />

        <meta name="description" content="<?php echo $this->meta_description; ?>" />
        <meta name="keywords" content="<?php echo $this->meta_keywords; ?>" />
        <meta name="author" content="Motolao"/>
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: Facebook Open Graph -->
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:type" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>
        <!-- end: Facebook Open Graph -->

        <!-- start: CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/stylesheet.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/customstyle.css" rel="stylesheet" />
        <!--gallery-->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/css/blueimp-gallery.min.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/css/bootstrap-image-gallery.css" />
        <!-- colorbox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/colorbox/colorbox.css" />
        <!-- end: CSS -->
        <!-- indicator css -->
        <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/media/indicator/jquery.loading-indicator.css" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-2.1.1.min.js"></script>

        <script>
            var homeLoader = '';


        </script>    

    </head>
    <body>

        <!--start: Header -->
        <header>

            <!--start: Container -->
            <div class="container">

                <!--start: Row -->
                <div class="row">

                    <!--start: Logo -->
                    <div class="logo span3">

                        <a class="brand" 
                           href="<?php echo $this->createUrl(Yii::app()->homeUrl[0]); ?>" 
                           title="<?php echo Yii::t("links", "Motolao I Adventure Tours in Laos"); ?>">
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="Motolao Logo" title="Motolao I Adventure Tours in Laos" />
                        </a>						
                    </div>
                    <!--end: Logo -->

                    <!--start: Navigation -->
                    <div class="span9">

                        <div class="navbar navbar-inverse">
                            <?php $this->renderPartial("//layouts/_menu"); ?>
                        </div>

                    </div>	
                    <!--end: Navigation -->

                </div>
                <!--end: Row -->

            </div>
            <!--end: Container-->			

        </header>
        <!--end: Header-->
        <?php
        //load banner module
        if (!empty($this->page_key)) {
            $this->renderPartial("//pluggins/banner");
        }
        ?>

        <!--start: Wrapper-->
        <div id="wrapper">
            <?php
            if (Yii::app()->user->hasFlash('success')) {
                echo "<div class='col-lg-12'>";
                echo "<div class='alert-margin alert alert-success'>" . Yii::app()->user->getFlash('success') . "</div>";
                echo "</div>";
            }
            ?>
            <?php echo $content; ?>
        </div>
        <!-- end: Wrapper  -->			

        <!-- start: Footer Menu -->
        <div id="footer-menu" class="hidden-tablet hidden-phone">

            <!-- start: Container -->
            <div class="container">

                <!-- start: Row -->
                <div class="row">

                    <!-- start: Footer Menu Links-->
                    <div class="span9">

                        <div id="footer-menu-links">

                            <ul id="footer-nav">

                                <li><a href="<?php echo $this->createUrl("/web/default/about"); ?>" title=""><?php echo Yii::t("links", "ABOUT US"); ?> </a></li>

                                <li><a href="<?php echo $this->createUrl("/web/default/terms"); ?>" title=""><?php echo Yii::t("links", "TERMS AND CONDITIONS"); ?></a></li>

                                <li><a href="<?php echo $this->createUrl("/web/default/sitemap"); ?>" title=""><?php echo Yii::t("links", "SITEMAP"); ?></a></li>

                            </ul>

                        </div>

                    </div>
                    <!-- end: Footer Menu Links-->

                    <!-- start: Footer Menu Back To Top 
                    <div class="span1">
                                    
                            <div id="footer-menu-back-to-top">
                                    <a href="javascript:void(0)" title=""></a>
                            </div>
                    
                    </div>
                     end: Footer Menu Back To Top -->

                </div>
                <!-- end: Row -->
                <div id="footer-extramenu-links">

                    <ul id="footerextra-nav">
                        <?php
                        $socialMedia = SocialMediaLink::model()->findAll();
                        foreach ($socialMedia as $social):
                            ?>
                            <li><a href="<?php echo $social->url != "" ? $social->url : "javascript:void(0)"; ?>" title="">
                                    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/icons/social/<?php echo $social->meta_tag; ?>" 
                                         alt="tour" title=""><?php echo $social->title; ?></a>

                            </li>
                            <?php
                        endforeach;
                        ?>
                    </ul>

                    <div class="copyrights"><?php echo Yii::t("layout", "Copyrights MOTOLAO 2014"); ?></div>

                </div>
            </div>
            <!-- end: Container  -->	

        </div>
        <!-- end: Footer -->

        <!-- gallery -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">â€¹</a>
            <a class="next">â€º</a>
            <a class="close">Ã—</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                <?php echo Yii::t("links", "Previous"); ?>
                            </button>
                            <button type="button" class="btn btn-primary next">
                                <?php echo Yii::t("links", "Next"); ?>
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="final-tg"></div>

        <!-- start: Java Script -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/flexslider.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/slider.js"></script>
        <script defer="defer" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/custom.js"></script>
        <!-- end: Java Script -->

        <!--gallery -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/bootstrap-gallery/js/bootstrap-image-gallery.js"></script>
        <!--colorbox -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/colorbox/jquery.colorbox.js"></script>
        <!-- indicator js  -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/media/indicator/jquery.loading-indicator.js"></script>
        <script type="text/javascript">
            var homeLoader = '';
            jQuery(function() {
                jQuery('#blueimp-gallery').data('fullScreen', true);
                jQuery(".colorbox").colorbox({inline: true, width: "50%", title: function() {

                        $("#ContactForm_subject").val($(this).attr("tour-name"));
                    }
                });
                homeLoader = jQuery('#final-tg').loadingIndicator({
                    useImage: false,
                }).data("loadingIndicator");

                homeLoader.hide();
                jQuery(document).on('click', 'video', function() {
                    console.log(this.paused);
                    if (this.paused == true) {
                        $('#myCarousel').carousel('pause');

                    }
                    else {
                        $('#myCarousel').carousel('cycle');

                    }
                });

            })
        </script> 
    </body>
</html>