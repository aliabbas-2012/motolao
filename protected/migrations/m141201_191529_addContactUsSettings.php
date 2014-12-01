<?php

class m141201_191529_addContactUsSettings extends DTDbMigration {

    public function up() {
        $table = "contact_us_setting";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'address' => 'varchar(250) DEFAULT NULL',
            'email' => 'varchar(250) DEFAULT NULL',
            'phone' => 'varchar(250) DEFAULT NULL',
            'skype' => 'varchar(250) DEFAULT NULL',
            'facebook' => 'varchar(250) DEFAULT NULL',
            'google_plus' => 'varchar(250) DEFAULT NULL',
            'print_rest' => 'varchar(250) DEFAULT NULL',
            'flicker' => 'varchar(250) DEFAULT NULL',
            'youtube' => 'varchar(250) DEFAULT NULL',
            'lat' => 'varchar(250) DEFAULT NULL',
            'lng' => 'varchar(250) DEFAULT NULL',
            'create_time' => 'datetime NOT NULL',
            'create_user_id' => 'int(11) unsigned NOT NULL',
            'update_time' => 'datetime NOT NULL',
            'update_user_id' => 'int(11) unsigned NOT NULL',
            'activity_log' => 'text',
            'PRIMARY KEY (`id`)',
        );
        $options = "ENGINE=InnoDB";
        $this->createTable($table, $columns, $options);
        $columns = array(
            "id"=>1
        );
        $this->insertRow($table, $columns);
    }

    public function down() {
        $table = "contact_us_setting";
        $this->dropTable($table);
    }

}
