<?php $this->beginContent('//layouts/main'); ?>

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div><?php echo Yii::app()->user->user->first_name; ?> <strong><?php echo Yii::app()->user->user->last_name; ?></strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!--end search section-->
            </li>
            <li class="selected">
                <a href="<?php echo $this->createUrl("/site/index"); ?>"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "flot")); ?>">Flot Charts</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "morris")); ?>">Morris Charts</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="<?php echo $this->createUrl("/site/page/", array("view" => "timeline")); ?>"><i class="fa fa-flask fa-fw"></i>Timeline</a>
            </li>
            <li>
                <a href="<?php echo $this->createUrl("/site/page/", array("view" => "tables")); ?>"><i class="fa fa-table fa-fw"></i>Tables</a>
            </li>
            <li>
                <a href="<?php echo $this->createUrl("/site/page/", array("view" => "forms")); ?>"><i class="fa fa-edit fa-fw"></i>Forms</a>
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "panels-wells")); ?>">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "buttons")); ?>">Buttons</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "notifications")); ?>">Notifications</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "typography")); ?>">Typography</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "grid")); ?>">Grid</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="javascript:void(0)">Second Level Item</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Second Level Item</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="javascript:void(0)">Third Level Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Third Level Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Third Level Item</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- third-level-items -->
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="javascript:void(0)"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo $this->createUrl("/site/page/", array("view" => "blank")); ?>">Blank Page</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->createUrl("/site/login"); ?>">Login Page</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
</nav>
<!-- end sidebar-collapse -->
<!--  page-wrapper -->
<div id="page-wrapper">
    <?php echo $content; ?>
</div>
<!-- end page-wrapper -->
<?php $this->endContent(); ?>
