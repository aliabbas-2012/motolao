<?php

class m140920_144039_addInnerSlider extends DTDbMigration {

    public function up() {
        $table = "inner_slider";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'key' => 'varchar(20) NOT NULL',
            'alt' => 'varchar(150) DEFAULT NULL',
            'title' => 'varchar(150) DEFAULT NULL',
            'image_large' => 'varchar(150) DEFAULT NULL',
            'heading' => 'varchar(150) DEFAULT NULL',
            'detail' => 'text DEFAULT NULL',
            'same_box' => 'boolean DEFAULT 0',
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
        $table = "inner_slider";
        $this->dropTable($table);
    }

}
