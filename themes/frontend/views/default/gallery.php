
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
            $gallariesProvider = new CActiveDataProvider('MotoGallery', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 6,
                ),
                'sort' => array(
                    'defaultOrder' => 'id DESC , lang_id DESC',
                )
            ));
            $gallaries = $gallariesProvider->getData();
            $this->renderPartial("//default/_gallery_partial", array("gallaries" => $gallaries));
            ?>
        </ul>
    </section>

</div>
<!--end: Container-->

<div class="lineseperation"></div>
<a href="javascript:void(0)" class="load" onclick="loadMore()"><?php echo Yii::t("gallery", "Load more"); ?></a>
<div style="display: none">
    <?php
    $this->widget('ext.BootstrapLinkPager', array(
        'pages' => $gallariesProvider->getPagination(),
        'header' => '',
        'htmlOptions' => array('class' => 'pagination')
            )
    );
    ?> 
</div>
