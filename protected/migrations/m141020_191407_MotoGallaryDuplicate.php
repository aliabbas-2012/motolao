<?php

class m141020_191407_MotoGallaryDuplicate extends DTDbMigration {

    public function up() {
        $gallaris = MotoGallery::model()->findAll();
        MotoGallery::model()->deleteAll('activity_log LIKE "%duplicate%"');
        foreach ($gallaris as $data) {
            $model = new MotoGallery;
            $model->attributes = $data->attributes;
            $model->activity_log = "duplicate \n";
            $folder_array = array("moto-gallery", $data->id,);
            $source = DTUploadedFile::getRecurSiveDirectories($folder_array);

            echo $source;
            echo "\n";
            if ($model->save(false)) {
                $folder_array = array("moto-gallery", $model->id,);
                $dest = DTUploadedFile::getRecurSiveDirectories($folder_array);
                //DTUploadedFile::copyr($source, $dest);
            }
        }
    }

    public function down() {
        return true;
    }

}
