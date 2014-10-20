<?php

class m141020_184507_addCopyOfData extends DTDbMigration {

    public function up() {
        $dairies = MotoDairy::model()->findAll();
        MotoDairy::model()->deleteAll('activity_log LIKE "%duplicate%"');
        foreach ($dairies as $data) {
            $model = new MotoDairy;
            $model->attributes = $data->attributes;
            $model->activity_log = "duplicate \n";
            $folder_array = array("moto-dairy", $data->id,);
            $source = DTUploadedFile::getRecurSiveDirectories($folder_array);

            echo $source;
            echo "\n";
            if ($model->save(false)) {
                $folder_array = array("moto-dairy", $model->id,);
                $dest = DTUploadedFile::getRecurSiveDirectories($folder_array);
                DTUploadedFile::copyr($source, $dest);
            }
        }
        
    }

    public function down() {
        return true;
    }

}
