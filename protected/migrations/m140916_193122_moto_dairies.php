<?php

class m140916_193122_moto_dairies extends DTDbMigration {

    public function up() {
        $table = "moto_dairy";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'alt' => 'varchar(150) DEFAULT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'image_large' => 'varchar(150) DEFAULT NULL',
            'image_detail' => 'varchar(150) DEFAULT NULL',
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
        $table = "moto_dairy";
        $this->dropTable($table);
    }

}
