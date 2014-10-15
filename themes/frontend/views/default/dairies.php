<!--start: Container -->
<div class="container">

    <div id="signwrapper">

        <div class="logosign">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/star.png", Yii::t("dairies", "Dairy Logo"), array("title" => Yii::t("dairies", "Dairy Logo"))); ?>
        </div>
    </div>
    <h2><?php echo Yii::t("dairies", "LAO MOTORCYLE DAIRIES"); ?></h2>
    <div class="hero-unit">

        <p>
            <?php echo Yii::t("dairies", "DAIRIES Summary"); ?>
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

            $daries = new CActiveDataProvider('MotoDairy', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 6,
                ),
                'sort' => array(
                    'defaultOrder' => 'id DESC , lang_id DESC',
                )
            ));
            $daries = $daries->getData();
            $daries_seg = array_chunk($daries, 3);
            // echo $dairy->image_url['image_large'] 
            foreach ($daries_seg as $daries) {
                $row_elemnts = array();
                foreach ($daries as $dairy):
                    ?>
                    <li class="span4 data-collaps" 
                        onclick="showDiaryTarget(this)"
                        data-id-target="<?php echo $dairy->id . "-part"; ?>">

                        <a href="javascript:void(0)" 
                           class="thumbnail <?php echo $dairy->land_scape; ?>" target="_blank">
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
        </ul>
    </section>


</div>
<!--end: Container-->


<div class="lineseperation"></div>
<a href="#" class="load">Load more</a>
<pre></pre>

