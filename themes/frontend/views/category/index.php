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

        <a href="<?php echo $this->createUrl("/web/category/index", array('slug' => $model->url)) ?>" title="" class="viewtours"><?php echo Yii::t("category", "VIEW " . $model->name . " TOURS"); ?></a>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle-tour" data-toggle="dropdown">
                <?php echo Yii::t("category", "Quick Search"); ?>
                <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <?php
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
        <div class="span6">
            <div class="avatar view-team">
                <img src="img/tours/01.jpg" alt="tour" title="">
                <div class="mask">
                    <h2>1 DAY TOUR</h2>
                    <p>
                        Stunning landscapes - cool break at beautiful waterfall - dirt road - Mekong River - rural villages - local food - river crossings - for beginners and interme- diate riders. 
                    </p>
                    <a href="tourdetail4x4.html" class="info">CONTINUE READING</a><br />
                    <a href="#" title="" class="info">CONTACT US</a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="team-nametours">1 DAY TOUR<span> <br>FOLLOW YOUR DREAMS.</span></div>

        </div>
        <!-- end: About Member -->

        <!-- start: About Member -->
        <div class="span6">
            <div class="avatar view-team">
                <img src="img/tours/02.jpg" alt="tour" title="">
                <div class="mask">
                    <h2>River Challenge</h2>
                    <p>
                        Stunning landscapes - cool break at beautiful waterfall - dirt road - Mekong River - rural villages - local food - river crossings - for beginners and interme- diate riders.

                    </p>
                    <a href="tourdetail4x4.html" class="info">CONTINUE READING</a><br />
                    <a href="#" title="" class="info">CONTACT US</a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="team-nametours">2 DAYS TOUR<span><br>GET OUT THERE.</span></div>

        </div>
        <!-- end: About Member -->	
        <!-- start: About Member -->
        <div class="span6">
            <div class="avatar view-team">
                <img src="img/tours/02.jpg" alt="tour" title="">
                <div class="mask">
                    <h2>River Challenge</h2>
                    <p>
                        Stunning landscapes - cool break at beautiful waterfall - dirt road - Mekong River - rural villages - local food - river crossings - for beginners and interme- diate riders.
                    </p>
                    <a href="tourdetail4x4.html" class="info">CONTINUE READING</a><br />
                    <a href="#" title="" class="info">CONTACT US</a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="team-nametours">3 DAYS TOUR<span><br>ARE YOU TALKING TO YOUR BIKE AGAIN?</span></div>

        </div>
        <!-- end: About Member -->	
        <!-- start: About Member -->
        <div class="span6">
            <div class="avatar view-team">
                <img src="img/tours/02.jpg" alt="tour" title="">
                <div class="mask">
                    <h2>Special Tours per request</h2>
                    <p>
                        Stunning landscapes - cool break at beautiful waterfall - dirt road - Mekong River - rural villages - local food - river crossings - for beginners and interme- diate riders.

                    </p>
                    <a href="tourdetail4x4.html" class="info">CONTINUE READING</a><br />
                    <a href="#" title="" class="info">CONTACT US</a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="team-nametours">Special Tours<span><br>UPPON REQUEST</span></div>
        </div>
    </div>
    <!-- end: Tours List -->	
    <!-- start: Row -->
    <div class="row">
    </div>
</div>
<!--end: Container-->
