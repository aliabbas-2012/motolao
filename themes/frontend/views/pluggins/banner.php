<!-- start: SliderOptionOne -->
<?php
$criteria = new CDbCriteria();
$criteria->addCondition("t.key=:key AND lang_id = :lang_id");
$criteria->params = array(
    ":key" => $this->page_key,
    ":lang_id" => $this->lang_id,
);
$sliders = Banner::model()->findAll($criteria);
if (!empty($sliders)):
    ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="12000"> 

        <div class="carousel-inner">
            <?php
            $count = 0;

            foreach ($sliders as $slider):
                ?>
                <div class="item <?php echo $count == 0 ? "active" : ""; ?>" >

                    <?php
                    if ($slider->video_tag_embedded_code == ""):
                        echo CHtml::image($slider->image_url['image_large'], $slider->alt, array(
                            "title" => $slider->title,
                            "style" => "width:100%",
                        ));
                    else:
                        ?>
                        <video width="100%" height="408px" controls  poster="<?php echo $slider->image_url['image_large']; ?>">
                            <source src="<?php echo $slider->video_tag_embedded_code; ?>" type="video/mp4" />
                        </video>
                        <?php
                        
                    endif;
                    ?>
                    <div class="container">
                        <div class="carousel-caption">
                          <!--<p><a class="btn btn-lg btn-primary" href="javascript:void(0)" role="button">Sign up today</a></p>-->
                        </div>
                    </div>
                </div>
                <?php
                $count++;
            endforeach;
            ;
            ?>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> 
    </div>
    <!-- end: SliderOptionOne -->
    <?php
endif;
?>

    