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
                <h4><?php echo $slider->detail; ?></h4>
            </li>

            <?php
        endforeach;
        ?>


    </ul>

</div>