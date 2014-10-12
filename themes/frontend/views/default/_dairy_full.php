<?php
foreach ($row_elemnts as $dairy) {
    ?>
    <li class="span12 no-margin sub-part" id="<?php echo $dairy->id . "-part"; ?>">

        <div class="span3 no-margin">
            <h4><?php echo $dairy->title; ?></h4>
            <div>
                <a href="<?php echo $dairy->image_url['image_large'] ?>" 
                   class="thumbnail" target="_blank" data-gallery="">
                       <?php
                       echo CHtml::image($dairy->image_url['image_large'], $dairy->alt, array(
                           "title" => $dairy->title,
                       ));
                       ?>
                </a>
            </div>
            <div class="border-red-bottom-dotted">
                <?php echo Yii::t("links",'Share On Facebook'); ?>
            </div>
            <div class="border-red-bottom-dotted">
                <?php echo Yii::t("links",'Share Via Email'); ?>
            </div>
            <div>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    $instace = "image_" . $i;
                    $instace_title = "image_" . $i . "_title";
                    if (!empty($dairy->image_url[$instace])) {
                        echo "<div class='span1' onclick=''>";
                        echo CHtml::image($dairy->image_url[$instace], $dairy->$instace_title, array(
                            "title" => $dairy->$instace_title,
                        ));
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
        <div class="span7 ">
            <?php echo $dairy->description; ?>
        </div>

    </li>

    <?php
}
?>