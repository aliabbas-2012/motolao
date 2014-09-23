<?php

class m140923_192600_addDescriptioninPage extends DTDbMigration {

    public function up() {
        $table = "pages";
        $this->addColumn($table, "description", "text DEFAULT NULL after url");

        $table = "labels";
        $this->addColumn($table, "category", "varchar(50) DEFAULT NULL after id");
    }

    public function down() {
        $table = "pages";
        $this->dropColumn($table, "description");

        $table = "labels";
        $this->dropColumn($table, "category", "varchar(50) DEFAULT NULL after id");
    }

}
