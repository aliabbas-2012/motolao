<!--start: Container -->
<div class="container">
    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/toursign.png", Yii::t("category", $model->category->name), array("title" => Yii::t("category", $model->category->name))); ?>
        </div>
    </div>

    <h2><?php echo $model->category->heading; ?></h2>
    <div class="hero-unit">
        <?php echo $model->category->description; ?>
    </div>
    <!-- end: Hero Unit -->

    <div class="menu span12">

        <a href="<?php echo $this->createUrl("/web/category/index", array('category' => $model->url)) ?>" title="" class="viewtours"><?php echo Yii::t("category", "VIEW " . $model->name . " TOURS"); ?></a>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle-tour" data-toggle="dropdown">
                <?php echo Yii::t("category", "Quick Search"); ?>
                <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <?php
                $criteria = new CDbCriteria();
                $criteria->limit = '12';
                $tours = Tour::model()->findAll();
                foreach ($tours as $tour) {
                    ?>
                    <li><a href="<?php echo $this->createUrl("/web/category/detail", array("category" => $tour->category->url, "slug" => $tour->url)); ?>" title=""><?php echo $tour->name ?> I <?php echo $tour->category->name; ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </li>

    </div>
</div>
<!--end: Container-->
<div class="line"></div>
<!--start: Container -->
<div class="container">

    <!-- start: About Tour -->
    <div class="span4">
        <div class="abouttour">
            <?php
            $criteria = new CDbCriteria();
            $criteria->addCondition("tour_id = :tour_id AND lang_id = :lang_id");
            $criteria->params = array(":tour_id" => $model->id, ":lang_id" => $this->lang_id);
            $tour_images = TourImage::model()->findAll($criteria);
            foreach ($tour_images as $image) {
                echo CHtml::image($image->image_url['image_large'], $image->tag, array("title" => $image->tag));
            }
            ?>

        </div>
        <div class="clear"></div>
        <!-- end: About Tour -->
    </div>
    <!--end: Container-->
    <div class="span7">

        <h2><?php echo $model->name; ?></h2>
        <h4><?php echo $model->short_title;
            ;
            ?></h4>
<?php echo $model->description; ?>
    </div>

</div>
<!--end: Container-->
<div class="diarybutton"><a class="btn btn-lg btn-primary" href="<?php echo $this->createUrl("/web/default/contact"); ?>" role="button"><?php echo Yii::t("links", "Contact Us"); ?></a><p></p></div>

<div class="lineseperation"></div>


