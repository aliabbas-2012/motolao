<?php

class m141014_201423_otherImagesSpecs extends DTDbMigration {

    public function up() {
        $table = "moto_dairy";
        $cols = array("width", 'height');
        foreach ($cols as $col) {
            $this->addColumn($table, "image_1_" . $col, "varchar(10) DEFAULT NULL after image_1_title");
            $this->addColumn($table, "image_2_" . $col, "varchar(10) DEFAULT NULL after image_2_title");
            $this->addColumn($table, "image_3_" . $col, "varchar(10) DEFAULT NULL after image_3_title");
            $this->addColumn($table, "image_4_" . $col, "varchar(10) DEFAULT NULL after image_4_title");
            $this->addColumn($table, "image_5_" . $col, "varchar(10) DEFAULT NULL after image_5_title");
        }
    }

    public function down() {
        $table = "moto_dairy";

        $cols = array("width", 'height');
        foreach ($cols as $col) {
            $this->dropColumn($table, "image_1_" . $col);
            $this->dropColumn($table, "image_2_" . $col);
            $this->dropColumn($table, "image_3_" . $col);
            $this->dropColumn($table, "image_4_" . $col);
            $this->dropColumn($table, "image_5_" . $col);
        }
    }

}
