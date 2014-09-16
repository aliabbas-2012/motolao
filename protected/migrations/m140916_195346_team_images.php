<?php

class m140916_195346_team_images extends DTDbMigration {

    public function up() {
        $table = "team_images";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'name' => 'varchar(150) DEFAULT NULL',
            'role' => 'varchar(150) DEFAULT NULL',
            'description' => 'text DEFAULT NULL',
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
        $table = "team_images";
        $this->dropTable($table);
    }

}
