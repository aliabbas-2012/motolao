<?php

class m140916_192448_SocialMediaLinks extends DTDbMigration {

    public function up() {
        $table = "social_media_links";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'url' => 'varchar(150) DEFAULT NULL',
            'meta_tag' => 'text DEFAULT NULL',
            'meta_description' => 'text DEFAULT NULL',
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
        $table = "social_media_links";
        $this->dropTable($table);
    }

}
