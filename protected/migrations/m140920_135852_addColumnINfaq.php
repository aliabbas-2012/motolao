<?php

class m140920_135852_addColumnINfaq extends DTDbMigration
{
	public function up() {
         $table = "faqs";
         $this->addColumn($table, "type",'enum("faq","term") DEFAULT NULL after lang_id');
    }

    public function down() {
        $table = "faqs";
        $this->dropColumn($table, "type");
    }
}