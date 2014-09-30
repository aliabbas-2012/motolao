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
        <a class="brand" href="dairies.html" 
           title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/icons/motolao_icons/star.png" alt="Motolao Dairies Logo" />
        </a>
    </div>

    <a class="brand" href="dairies.html" 
       title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
        <h2><?php echo Yii::t("home", "LAO MOTORCYCLE DAIRIES"); ?></h2>
    </a>
    <a class="brand" href="dairies.html" title="<?php echo Yii::t("home", "Motolao I Adventure Tours in Laos"); ?>">
        <h3><?php echo Yii::t("home", "We are pleased to present new tour packages"); ?></h3></a>
    <div class="diarybutton"><a class="btn btn-lg btn-primary" href="dairies.html" role="button"><?php echo Yii::t("home", "Browse our diaries"); ?></a><p></p></div>

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
    <div class="span6">
        <div class="avatar view-team">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/diaries/01.jpg" 
                 alt="<?php echo Yii::t("home", "tourhome"); ?>" title="<?php echo Yii::t("home", "tourhome"); ?>">
            <div class="mask">
                <h2>4x4 Tours</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                </p>
                <a href="toursmore.html" title="" class="info">CONTINUE READING</a><br>

            </div>
        </div>
        <div class="clear"></div>
        <div class="team-name">4x4 Tours<br><span>Discover Laos on 4 wheels</span></div>

    </div>
    <!-- end: About Member -->

    <!-- start: About Member -->
    <div class="span6">
        <div class="avatar view-team">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/diaries/02.jpg" alt="tour" title="">
            <div class="mask">
                <h2>River Challenge</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                </p>
                <a href="toursmore.html" title="" class="info">CONTINUE READING</a><br>

            </div>
        </div>
        <div class="clear"></div>
        <div class="team-name">River Challenge<br><span>Be part of our river challenge</span></div>

    </div>
    <!-- end: SlideOptionTwo -->
</div>

