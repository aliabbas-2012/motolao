<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/logo.png", Yii::t("sitemap", "sitemap Logo"), array("title" => Yii::t("sitemap", "sitemap Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("sitemap", "sitemap Heading"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("sitemap", "sitemap Summary"); ?>
        </p>

    </div>
    <!-- end: Hero Unit -->
</div>
<!--end: Container-->
