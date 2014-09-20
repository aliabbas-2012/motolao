<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Motolo | Admin</title>
        <!-- Core CSS - Include with every page -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/css/main-style.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl ?>/assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <script>
            // defining js base path
            var js_basePath = '<?php echo Yii::app()->theme->baseUrl; ?>';

            var yii_base_url = "<?php echo Yii::app()->baseUrl; ?>";

        </script>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $this->createUrl("/site/index"); ?>">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/logo.png" alt="" />
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- navbar-top-links -->
                <ul class="nav navbar-top-links navbar-right">
                    <?php
                    //notification box
                    ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                            <i class="fa fa-user fa-3x"></i>
                        </a>
                        <!-- dropdown user-->
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo  $this->createUrl("//users/profile"); ?>"><i class="fa fa-user fa-fw"></i>User Profile</a>
                            </li>
                            <li><a href='<?php echo $this->createUrl("/configurations/load", array( "m" => "TourType", "child_id" => "new")); ?>'><i class="fa fa-gear fa-fw"></i>Configuration</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?php echo $this->createUrl("/site/logout"); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                            </li>
                        </ul>
                        <!-- end dropdown-user -->
                    </li>
                    <!-- end main dropdown -->
                </ul>
                <!-- end navbar-top-links -->

            </nav>
            <!-- end navbar top -->




            <?php echo $content; ?>


        </div>
        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->

        <?php
        //Yii::app()->getClientScript()->registerScriptFile(Yii::app()->theme->baseUrl . '/assets/plugins/jquery-1.10.2.js');
        ?>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-1.10.2.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/pace/pace.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/scripts/siminta.js"></script>
    </body>
</html>
