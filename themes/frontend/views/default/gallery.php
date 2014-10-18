
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
            foreach ($gallaries as $gallery):
                ?>
                <li class="span4">
                    <?php
                    $url = $gallery->image_url['image_large'];
                    $content_type = pathinfo($url);
                    if (!isset($info['extension'])) {
                        $content_type['extension'] = "jpg";
                    }
                    $content_type = "image/" . $content_type['extension'];
                    if ($gallery->video_tag_embedded_code == ""):
                        $url = $gallery->image_url['image_large'];

                    else:

                        $url = $gallery->video_tag_embedded_code;
                        $content_type = $gallery->_content_type;
                    endif;
                    ?>
                    <a type="<?php echo $content_type; ?>" data-gallery="" href="<?php echo $url; ?>" 
                       class="thumbnail <?php echo $gallery->land_scape; ?>" target="_blank">
                           <?php
                           echo CHtml::image($gallery->image_url['image_large'], $gallery->alt, array(
                               "title" => $gallery->title,
                           ));
                           ?>
                    </a>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
    </section>

</div>
<!--end: Container-->

<div class="lineseperation"></div>
<a href="javascript:void(0)" class="load"><?php echo Yii::t("gallery", "Load more"); ?></a>
