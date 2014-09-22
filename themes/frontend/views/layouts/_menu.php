
<div class="navbar-inner">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="nav-collapse collapse">
        <ul class="nav">
            <li class="<?php echo $this->id == "default" && $this->action->id == "index" ? "active" : ""; ?>">
                <a href="<?php echo $this->createUrl(Yii::app()->homeUrl[0]); ?>" title="">
                    <?php echo Yii::t("links", "Home"); ?>
                </a>
            </li>

            <li class="dropdown <?php echo $this->id == "category" && $this->action->id == "index" ? "active" : ""; ?>">
                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo Yii::t("links", "Tours"); ?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <?php
                    $categories = Category::model()->findAll();
                    foreach ($categories as $category):
                        ?>
                        <li><a href="<?php echo $this->createUrl("/web/category/index",array("slug"=>$category->url)); ?>" title=""><?php echo $category->name ?></a></li>
                        <?php
                    endforeach;
                    ?>
                </ul>
            </li>


            <li><a href="<?php echo $this->createUrl("/web/default/gallery"); ?>" title="">Gallery</a></li>
            <li><a href="<?php echo $this->createUrl("/web/default/team"); ?>" title="">Team</a></li>
            <li><a href="<?php echo $this->createUrl("/web/default/fleet"); ?>" title="">Fleet</a></li>
            <li><a href="<?php echo $this->createUrl("/web/default/dairies"); ?>" title="">Dairies</a></li>
            <li><a href="<?php echo $this->createUrl("/web/default/faq"); ?>" title="">Faq</a></li>
            <li><a href="<?php echo $this->createUrl("/web/default/contactUs"); ?>" title="">Contact</a></li>


            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle language" data-toggle="dropdown">EN <b class="caret"></b></a>
                <ul class="dropdown-menu language">
                    <li><a href="javascript:void(0)" title="">DE</a></li>
                    <li><a href="javascript:void(0)" title="">FR</a></li>
                </ul>
            </li>


        </ul>
    </div>
</div>