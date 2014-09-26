<!--start: Container -->
<div class="container">

    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/star.png", Yii::t("team", "Team Logo"), array("title" => Yii::t("team", "Team Logo"))); ?>
        </div>
    </div>
    <h2>About Us</h2>
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

                <h3>DAVE VAN ROOYEN
                    <small>MANAGER & MOTOLAO GUIDE</small>
                </h3>
                <p>Dave hails from South Africa and has a passion for motorcycle riding. He has been riding motorcycles both on and off road for most of his life. Dave’s professional background is in Customer Service and therefore he is committed to meeting and exceeding the customers’ needs.
                    Dave is married and has 2 grown up children.</p>
            </div>
            <?php
        endforeach;
        ?>
    </div>

</div>
<!--end: Container-->
