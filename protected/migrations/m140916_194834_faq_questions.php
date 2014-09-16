<?php

class m140916_194834_faq_questions extends DTDbMigration {

    public function up() {
        $table = "faqs";
        $columns = array(
            'id' => 'int(11) unsigned NOT NULL AUTO_INCREMENT',
            'lang_id' => 'int(11) unsigned NOT NULL',
            'question' => 'varchar(250) DEFAULT NULL',
            'answer' => 'text DEFAULT NULL',
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
        $table = "faqs";
        $this->dropTable($table);
    }

}
