<?php

class m141004_185953_addShort_descriptonInPRoductboth extends DTDbMigration {

    public function up() {
        $table = "tours";
        $this->addColumn($table, "short_description", "text DEFAULT NULL after 	meta_description");
        $table = "tour_langs";
        $this->addColumn($table, "short_description", "text DEFAULT NULL after 	meta_description");
    }

    public function down() {
        $table = "tours";
        $this->dropColumn($table, "short_description");
        $table = "tour_langs";
        $this->dropColumn($table, "short_description");
    }

}
