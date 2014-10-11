<?php

class m141011_142217_addColumINdairy extends DTDbMigration {

    public function up() {
        $table = "moto_dairy";
        $this->addColumn($table, "description", "text DEFAULT NULL after image_detail");
        $this->addColumn($table, "image_1", "varchar(50) DEFAULT NULL after descripton");
        $this->addColumn($table, "image_1_title", "varchar(50) DEFAULT NULL after image_1");
        $this->addColumn($table, "image_2", "varchar(50) DEFAULT NULL after image_1_title");
        $this->addColumn($table, "image_2_title", "varchar(50) DEFAULT NULL after image_2");
        $this->addColumn($table, "image_3", "varchar(50) DEFAULT NULL after image_2_title");
        $this->addColumn($table, "image_3_title", "varchar(50) DEFAULT NULL after image_3");
        $this->addColumn($table, "image_4", "varchar(50) DEFAULT NULL after image_3_title");
        $this->addColumn($table, "image_4_title", "varchar(50) DEFAULT NULL after image_4");
        $this->addColumn($table, "image_5", "varchar(50) DEFAULT NULL after image_4_title");
        $this->addColumn($table, "image_5_title", "varchar(50) DEFAULT NULL after image_5");
    }

    public function down() {
        $table = "moto_dairy";
        $this->dropColumn($table, "description");
        $this->dropColumn($table, "image_1");
        $this->dropColumn($table, "image_1_title");
        $this->dropColumn($table, "image_2");
        $this->dropColumn($table, "image_2_title");
        $this->dropColumn($table, "image_3");
        $this->dropColumn($table, "image_3_title");
        $this->dropColumn($table, "image_4");
        $this->dropColumn($table, "image_4_title");
        $this->dropColumn($table, "image_5");
        $this->dropColumn($table, "image_5_title");
    }

}
