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
            <li>
                <?php
                echo CHtml::image($slider->image_url['image_large'], $slider->alt, array(
                    "title" => $slider->title,
                ));
                if (!$slider->same_box) {
                    echo CHtml::openTag("div", array("class" => "backwhite"));
                }
                ?>
                <h2><?php echo $slider->heading_box; ?></h2>

                <?php echo $slider->detail; ?>
                <?php
                if (!$slider->same_box) {
                    echo CHtml::closeTag("div");
                }
                ?>
            </li>

            <?php
        endforeach;
        ?>


    </ul>

</div>