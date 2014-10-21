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

            $dariesProvider = new CActiveDataProvider('MotoDairy', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 6,
                ),
                'sort' => array(
                    'defaultOrder' => 'id DESC , lang_id DESC',
                )
            ));
            $daries = $dariesProvider->getData();
            $daries_seg = array_chunk($daries, 3);
            $this->renderPartial("//default/_diary_partial", array("daries_seg" => $daries_seg));
            ?>
        </ul>
    </section>


</div>
<!--end: Container-->


<div class="lineseperation"></div>
<a href="javascript:void(0)" onclick="loadMore()" class="load">Load more</a>
<div style="display: none">
    <?php
    $this->widget('ext.BootstrapLinkPager', array(
        'pages' => $dariesProvider->getPagination(),
        'header' => '',
        'htmlOptions' => array('class' => 'pagination')
            )
    );
    ?> 
</div>


