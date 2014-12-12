<?php

// echo $dairy->image_url['image_large'] 
foreach ($daries_seg as $daries) {
    $row_elemnts = array();
    foreach ($daries as $dairy):
        ?>
        <li class="span4 data-collaps" 
            onclick="showDiaryTarget(this)"
            data-id-target="<?php echo $dairy->id . "-part"; ?>">

            <a href="javascript:void(0)" 
               class="thumbnail <?php echo $dairy->land_scape; ?>">
                <?php
                echo CHtml::image($dairy->image_url['image_large'], $dairy->alt, array(
                    "title" => $dairy->title,
                ));
                ?>
                <h2><?php echo $dairy->title; ?></h2>

            </a>

            <?php
            ?>
        </li>
        <?php
        $row_elemnts[] = $dairy;
    endforeach;
    $this->renderPartial("//default/_dairy_full", array("row_elemnts" => $row_elemnts));
}
?>