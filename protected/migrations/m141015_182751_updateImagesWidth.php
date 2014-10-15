<?php

class m141015_182751_updateImagesWidth extends DTDbMigration {

    public function up() {
        $basePath = realpath(Yii::app()->basePath . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR);

        $banners = Banner::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);
        }

        $banners = InnerSlider::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);
        }

        $banners = MotoDairy::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);

            $image = substr($banner->image_url['image_detail'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size, 'detail_');

            for ($i = 1; $i <= 5; $i++) {
                $instace = "image_" . $i;
                $image = substr($banner->image_url[$instace], 1);
                $size = getimagesize($basePath . $image);
                $banner->save_image_loop_properties($size,$i);
            }
        }

        $banners = MotoGallery::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);

            $image = substr($banner->image_url['image_detail'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size, 'detail_');
        }

        $banners = TeamImage::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);

            $image = substr($banner->image_url['image_detail'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size, 'detail_');
        }

        $banners = TourImage::model()->findAll();
        foreach ($banners as $banner) {
            $image = substr($banner->image_url['image_large'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size);

            $image = substr($banner->image_url['image_detail'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size, 'detail_');

            $image = substr($banner->image_url['image_small'], 1);
            $size = getimagesize($basePath . $image);
            $banner->save_image_properties($size, 'small_');
        }

        echo "Images properties managed";
    }

    public function down() {
        echo "m141015_182751_updateImagesWidth does not support migration down.\n";
        return true;
        ;
    }

}
