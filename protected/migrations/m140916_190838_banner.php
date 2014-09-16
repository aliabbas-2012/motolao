<?php

class m140916_190838_banner extends DTDbMigration {

    public function up() {
        $table = "banners";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'key' => 'varchar(20) NOT NULL',
            'alt' => 'varchar(150) DEFAULT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'image_large' => 'varchar(150) DEFAULT NULL',
            'video_tag_embedded_code' => 'text DEFAULT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`)',
        );
        $options = "ENGINE=InnoDB";
        $this->createTable($table, $columns, $options);
    }

    public function down() {
        $table = "banners";
        $this->dropTable($table);
    }

}
