<div class="clients-carousel">
    <?php
    $criteria = new CDbCriteria();
    $criteria->addCondition("t.key=:key AND lang_id = :lang_id");
    $criteria->params = array(
        ":key" => $this->page_key,
        ":lang_id" => $this->lang_id,
    );
    $sliders = InnerSlider::model()->findAll($criteria);
   
    ?>
    <ul class="slides clients">
        <?php
        foreach ($sliders as $slider):
            ?>
            <li><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/img/arrivals/1.png" alt="" title=""/>
                <h2><?php echo $slider->heading_box; ?></h2>
                <h4><?php echo Yii::t("home", "The legendary Bullet 350 need no introduction. Now Bullet 350 is with all new Unit Construction Engine. We are proud to be the first and only tour company in Laos to provide these classic bikes."); ?></h4>
            </li>

            <?php
        endforeach;
        ?>


    </ul>

</div>