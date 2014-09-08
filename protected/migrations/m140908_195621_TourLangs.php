<?php

class m140908_195621_TourLangs extends DTDbMigration {

    public function up() {
        $table = "tour_langs";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'name' => 'varchar(150) NOT NULL',
            'short_title' => 'varchar(150) NOT NULL',
            'tour_type' => 'varchar(150) NOT NULL',
            'lang_id' => 'int(11) DEFAULT 0',
            'url' => 'varchar(150) DEFAULT NULL',
            'meta_title' => 'varchar(150) DEFAULT NULL',
            'meta_description' => 'text DEFAULT NULL',
            'description' => 'text DEFAULT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`)',
        );
        $this->createTable($table, $columns);
    }

    public function down() {
        $table = "tour_langs";
        $this->dropTable($table);
    }

}
