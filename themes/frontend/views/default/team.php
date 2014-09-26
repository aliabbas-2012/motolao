<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/star.png", Yii::t("team", "Team Logo"), array("title" => Yii::t("team", "Team Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("team", "About Us"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("team", "Team Summary"); ?>
        </p>

    </div>
    <!-- end: Hero Unit -->
</div>
<!--end: Container-->

<!--start: Container -->
<div class="container">
    <!-- Team Members Row -->
    <div class="row">
        <?php
        $criteria = new CDbCriteria();
        $criteria->addCondition("lang_id = :lang_id");
        $criteria->params = array(
            ":lang_id" => $this->lang_id,
        );
        $teams = TeamImage::model()->findAll($criteria);
        foreach ($teams as $team):
            ?>
            <div class="span3">
                <?php
                echo CHtml::image($team->image_url['image_large'], $team->alt, array(
                    "title" => $team->title,
                ));
                ?>

                <h3> <?php echo $team->name; ?><small><?php echo $team->role ?></small>
                </h3>
                <?php echo $team->description; ?>
            </div>
            <?php
        endforeach;
        ?>
    </div>

</div>
<!--end: Container-->
