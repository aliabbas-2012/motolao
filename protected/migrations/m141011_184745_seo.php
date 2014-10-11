<?php

class m141011_184745_seo extends DTDbMigration {

    public function up() {
        $table = "seo";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'key' => 'varchar(20) NOT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'keywords' => 'varchar(150) DEFAULT NULL',
            'description' => 'varchar(150) DEFAULT NULL',
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
        $table = "seo";
        $this->dropTable($table);
    }

}
