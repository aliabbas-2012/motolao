
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
                <a href="javascript:void(0)" class="dropdown-toggle" 
                   data-toggle="dropdown"><?php echo Yii::t("links", "Tours"); ?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <?php
                    $categories = Category::model()->findAll();
                    foreach ($categories as $category):
                        ?>
                        <li><a href="<?php echo $this->createUrl("/web/category/index",array("slug"=>$category->url)); ?>"><?php echo $category->name ?></a></li>
                        <?php
                    endforeach;
                    ?>
                </ul>
            </li>


            <li <?php echo $this->id == "default" && $this->action->id == "gallery" ? "active" : ""; ?>>
                <a href="<?php echo $this->createUrl("/web/default/gallery"); ?>" title=""><?php echo Yii::t("links", "Gallery"); ?></a>
            </li>
            <li <?php echo $this->id == "default" && $this->action->id == "gallery" ? "active" : ""; ?>>
                <a href="<?php echo $this->createUrl("/web/default/team"); ?>" title=""><?php echo Yii::t("links", "Team"); ?></a>
            </li>
            <li <?php echo $this->id == "default" && $this->action->id == "fleet" ? "active" : ""; ?>>
                <a href="<?php echo $this->createUrl("/web/default/fleet"); ?>" title=""><?php echo Yii::t("links", "Fleet"); ?></a>
            </li>
            <li <?php echo $this->id == "default" && $this->action->id == "dairies" ? "active" : ""; ?>>
                <a href="<?php echo $this->createUrl("/web/default/dairies"); ?>" title=""><?php echo Yii::t("links", "Dairies"); ?></a>
            </li>
            <li <?php echo $this->id == "default" && $this->action->id == "faq" ? "active" : ""; ?>> 
                <a href="<?php echo $this->createUrl("/web/default/faq"); ?>" title=""><?php echo Yii::t("links", "Faq"); ?></a>
            </li>
            <li <?php echo $this->id == "default" && $this->action->id == "contactUs" ? "active" : ""; ?>>
                <a href="<?php echo $this->createUrl("/web/default/contact"); ?>" title=""><?php echo Yii::t("links", "Contact"); ?></a>
            </li>

            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle language" data-toggle="dropdown"><?php echo Yii::t("links", "EN"); ?><b class="caret"></b></a>
                <ul class="dropdown-menu language">
                    <li><a href="javascript:void(0)" title=""><?php echo Yii::t("links", "DE"); ?></a></li>
                    <li><a href="javascript:void(0)" title=""><?php echo Yii::t("links", "FR"); ?></a></li>
                </ul>
            </li>


        </ul>
    </div>
</div>