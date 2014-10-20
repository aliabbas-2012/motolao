
<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">

        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/gallery.png", Yii::t("gallery", "Gallery Logo"), array("title" => Yii::t("gallery", "Gallery Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("gallery", "MOTOLAO GALLERY"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("gallery", "Gallery Summary"); ?>
        </p>

    </div>
    <!-- end: Hero Unit -->

    <section id="final-tg">
        <ul class="thumbnails">
            <?php
            $criteria = new CDbCriteria();
            $criteria->addCondition("lang_id = :lang_id");
            $criteria->params = array(
                ":lang_id" => $this->lang_id,
            );
            $gallaries = MotoGallery::model()->findAll($criteria);
            $this->renderPartial("//default/_gallery_partial", array("gallaries" => $gallaries))
            ?>
        </ul>
    </section>

</div>
<!--end: Container-->

<div class="lineseperation"></div>
<a href="javascript:void(0)" class="load"><?php echo Yii::t("gallery", "Load more"); ?></a>
