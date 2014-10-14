<?php

class m141014_191849_addImageProperties extends DTDbMigration {

    public function up() {
        $table = "banners";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");

        $table = "inner_slider";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");

        $table = "moto_dairy";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");
        $this->addColumn($table, "detail_width", "varchar(10) DEFAULT 0 after image_detail");
        $this->addColumn($table, "detail_height", "varchar(10) DEFAULT 0 after detail_width");

        $table = "moto_gallery";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");
        $this->addColumn($table, "detail_width", "varchar(10) DEFAULT 0 after image_detail");
        $this->addColumn($table, "detail_height", "varchar(10) DEFAULT 0 after detail_width");

        $table = "team_images";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");
        $this->addColumn($table, "detail_width", "varchar(10) DEFAULT 0 after image_detail");
        $this->addColumn($table, "detail_height", "varchar(10) DEFAULT 0 after detail_width");

        $table = "tour_image";
        $this->addColumn($table, "width", "varchar(10) DEFAULT 0 after image_large");
        $this->addColumn($table, "height", "varchar(10) DEFAULT 0 after width");
        $this->addColumn($table, "detail_width", "varchar(10) DEFAULT 0 after image_detail");
        $this->addColumn($table, "detail_height", "varchar(10) DEFAULT 0 after detail_width");
        $this->addColumn($table, "small_width", "varchar(10) DEFAULT 0 after detail_height");
        $this->addColumn($table, "small_height", "varchar(10) DEFAULT 0 after small_width");
    }

    public function down() {
        $table = "banners";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");

        $table = "inner_slider";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");

        $table = "moto_dairy";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");
        $this->dropColumn($table, "detail_width");
        $this->dropColumn($table, "detail_height");

        $table = "moto_gallery";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");
        $this->dropColumn($table, "detail_width");
        $this->dropColumn($table, "detail_height");

        $table = "team_images";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");
        $this->dropColumn($table, "detail_width");
        $this->dropColumn($table, "detail_height");

        $table = "tour_image";
        $this->dropColumn($table, "width");
        $this->dropColumn($table, "height");
        $this->dropColumn($table, "detail_width");
        $this->dropColumn($table, "detail_height");
        $this->dropColumn($table, "small_width");
        $this->dropColumn($table, "small_height");
    }

}
