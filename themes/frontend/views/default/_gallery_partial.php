<?php
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
        <a fullscreen="false" type="<?php echo $content_type; ?>" data-gallery="" href="<?php echo $url; ?>" 
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