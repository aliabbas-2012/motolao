<?php

class m140930_182224_createHomePageFeaturedItems extends DTDbMigration {

    public function up() {
        $table = "home_page_items";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL',
            'object_type' => 'enum("diary","tour") NOT NULL',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'name' => 'varchar(150) NOT NULL',
            'short_description' => 'varchar(150) NOT NULL',
            'description' => 'varchar(250) NOT NULL',
            'alt' => 'varchar(150) DEFAULT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'image_large' => 'varchar(150) DEFAULT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`,`lang_id`,`object_type`)',
        );
        $options = "ENGINE=InnoDB";
        $this->createTable($table, $columns, $options);
    }

    public function down() {
        $table = "home_page_items";
        $this->dropTable($table);
    }

}
