<!--start: Container -->
<div class="container">
    <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
    <div id="signwrapper">
        <div class="logosign">

            <?php echo CHtml::image(Yii::app()->theme->baseUrl . "/assets/img/icons/motolao_icons/toursign.png", Yii::t("category", $model->name), array("title" => Yii::t("category", $model->name))); ?>
        </div>
    </div>

    <h2><?php echo $model->heading; ?></h2>
    <div class="hero-unit">
        <?php echo $model->description; ?>
    </div>
    <!-- end: Hero Unit -->

    <div class="menu span12">

        <a href="<?php echo $this->createUrl("/web/category/index", array('category' => $model->url)) ?>" title="" class="viewtours"><?php echo Yii::t("category", "VIEW " . $model->name . " TOURS"); ?></a>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle-tour" data-toggle="dropdown">
                <?php echo Yii::t("category", "Quick Search"); ?>
                <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <?php
                $criteria = new CDbCriteria();
                $criteria->limit = '12';
                $tours = Tour::model()->findAll();
                foreach ($tours as $tour) {
                    ?>
                    <li><a href="<?php echo $this->createUrl("/web/category/detail", array("category" => $tour->category->url, "slug" => $tour->url)); ?>" title=""><?php echo $tour->name ?> I <?php echo $tour->category->name; ?></a></li>
                    <?php
                }
                ?>
            </ul>
        </li>

    </div>
    <!-- start: Tours List -->
    <div class="boxtours">
        <?php
        $criteria = new CDbCriteria();
        $criteria->addCondition("category_id = :category_id");
        $criteria->params = array(":category_id" => $model->id);
        $tours = Tour::model()->findAll($criteria);
      
        foreach ($tours as $tour):
            if($tour->tour_images_display_def_count>0){
               $image = $tour->tour_images_display_def;
            }
            else {
                $image = $tour->tour_images_display;
            }
            
            ?>
            <div class="span6">
                <div class="avatar view-team">
                    <?php
                        echo CHtml::image($image->image_url['image_large'],$image->tag,array("title"=>$image->tag));
                    ?>
                    <div class="mask">
                        <h2><?php echo $tour->name; ?></h2>
                         <?php
                            echo $tour->short_description;
                         ?> 
                        <a href="<?php echo $this->createUrl("/web/category/detail", array("category" => $tour->category->url, "slug" => $tour->url)); ?>" class="info"> <?php echo Yii::t("category", "CONTINUE READING"); ?></a><br />
                        <a href="<?php echo $this->createUrl("/web/category/detail", array("category" => $tour->category->url, "slug" => $tour->url)); ?>" title="" class="info"><?php echo Yii::t("category", "CONTACT US"); ?></a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="team-nametours"><?php echo $tour->tour_type; ?><span> <br><?php echo $tour->short_title; ?></span></div>

            </div>
            <?php
        endforeach;
        ?>
        <!-- end: About Member -->


    </div>
    <!-- end: Tours List -->	
    <!-- start: Row -->
    <div class="row">
    </div>
</div>
<!--end: Container-->
