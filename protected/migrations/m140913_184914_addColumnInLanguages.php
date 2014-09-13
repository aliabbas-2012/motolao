<?php

class m140913_184914_addColumnInLanguages extends DTDbMigration {

    public function up() {
        $table = "languages";
        $this->addColumn($table, "code", "varchar(4) DEFAULT NULL after name");
        $this->addColumn($table, "flag_img", "varchar(50) DEFAULT NULL after code");
    }

    public function down() {
        $table = "languages";
        $this->dropColumn($table, "code");
        $this->dropColumn($table, "flag_img");
    }

}
