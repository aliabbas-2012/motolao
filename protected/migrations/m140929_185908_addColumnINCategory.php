<?php

class m140929_185908_addColumnINCategory extends DTDbMigration {

    public function up() {
        $table = "category";
        $this->addColumn($table, "heading", "varchar(150) DEFAULT NULL after name");
        $this->addColumn("category_langs", "heading", "varchar(150) DEFAULT NULL after name");
    }

    public function down() {
        $table = "category";
        $this->dropColumn($table, "heading");
        $this->dropColumn("category_langs", "heading");
    }

}
