<?php

class m140916_192047_PagesTitleMeta extends DTDbMigration {

    public function up() {
        $table = "pages";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'key' => 'varchar(20) NOT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'heading' => 'varchar(150) DEFAULT NULL',
            'sub_heading' => 'varchar(250) DEFAULT NULL',
            'url' => 'varchar(150) DEFAULT NULL',
            'meta_tag' => 'text DEFAULT NULL',
            'meta_description' => 'text DEFAULT NULL',
            'description' => 'text DEFAULT NULL',
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
        $table = "pages";
        $this->dropTable($table);
    }

}
