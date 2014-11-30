<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/motolao.png", Yii::t("home", "Motolo Logo"), array("title" => Yii::t("home", "Motolao Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("home", "MOTOLAO"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("home", "We are a Tour company that prides ourselves in hosting successful and well organized on road and off road Motorcycle and 4x4 adventure tours in Laos. Our tours offer new adventures everyday and give riders a chance to journey on a road of self-discovery and to experience life-changing moments. Besides the exciting riding, other highlights of our tours include the chance to immerse oneself in the warm Laos culture and to experience the amazing natural beauty that Laos has to offer."); ?>
        </p>
    </div>
    <!-- end: Hero Unit -->

</div>
<!--end: Container-->
<div class="line"></div>
<div class="clients-carousel">
    <div class="logosign">
        <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" 
           title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/icons/motolao_icons/star.png" alt="Motolao Dairies Logo" />
        </a>
    </div>

    <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" 
       title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
        <h2><?php echo Yii::t("home", "LAO MOTORCYCLE DAIRIES"); ?></h2>
    </a>
    <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
        <h3><?php echo Yii::t("home", "We are pleased to present new tour packages"); ?></h3></a>
    <div class="diarybutton"><a class="btn btn-lg btn-primary" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" role="button"><?php echo Yii::t("home", "Browse our diaries"); ?></a><p></p></div>

</div>    

<!-- start SlideOptionOne -->	
<?php
if ($this->page_key != "") {
    $this->renderPartial("//pluggins/inner_slider");
}
?>
<!-- end SlideOptionOne -->

<!--start: Container -->

<div class="containerdiarygrid span12">	
    <div class="logosign">
        <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" 
           title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>"><img 
                src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/icons/motolao_icons/star.png" 
                alt="<?php echo Yii::t("home", "Motolao Dairies Logo"); ?>" /></a>
    </div>
    <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" 
       title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>"><h2>LAO MOTORCYCLE DAIRIES</h2></a>
    <a class="brand" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>"><h3><?php echo Yii::t("home", "We are pleased to present new tour packages"); ?></h3></a>
    <div class="diarybutton"><a class="btn btn-lg btn-primary" href="<?php echo $this->createUrl("/web/default/dairies"); ?>" role="button"><?php echo Yii::t("home", "Browse our diaries"); ?></a><p></p></div>

    <!-- start: SlideOptionTwo -->
    <?php
    $criteria = new CDbCriteria();
    $criteria->addCondition("lang_id = :lang_id");
    $params = array(
        'lang_id' => $this->lang_id,
    );
    $criteria->limit = 2;
    $criteria->params = $params;
    $items = HomePageItems::model()->findAll($criteria);
    foreach ($items as $item) {
        ?>
        <div class="span6">
            <div class="avatar view-team">
                <?php
                echo CHtml::image($item->image_url['image_large'], $item->alt, array(
                    "title" => $item->title,
                ));
                ?>
                <div class="mask">
                    <h2><?php echo $item->name; ?></h2>
                    <p>
                        <?php echo $item->description; ?>
                    </p>
                    <?php
                    if ($item->object_type == "tour") {
                        $tour = Tour::model()->find($item->id);
                        echo CHtml::link(Yii::t("home", "CONTINUE READING"), $this->createUrl("/web/category/detail", array("category" => $tour->category->url, "slug" => $tour->url)), array("class" => "info"));
                    }
                    ?>
                    <br>

                </div>
            </div>
            <div class="clear"></div>
            <div class="team-name"><?php echo $item->name; ?><br><span><?php echo $item->short_description; ?></span></div>

        </div>
        <!-- end: About Member -->
        <?php
    }
    ?>

</div>

