<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/fleet.png", Yii::t("fleet", "Fleet Logo"), array("title" => Yii::t("fleet", "Fleet Logo"))); ?>
        </div>
    </div>

    <h2><?php echo Yii::t("fleet", "Motolao Fleet"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("fleet", "Our slelection"); ?>
        </p>
    </div>
    <!-- end: Hero Unit -->
</div>
<!--end: Container-->

<?php
if ($this->page_key != "") {
    $this->renderPartial("//pluggins/inner_slider");
}
?>