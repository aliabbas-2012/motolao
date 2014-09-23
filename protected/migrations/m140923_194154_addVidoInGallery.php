<?php

class m140923_194154_addVidoInGallery extends DTDbMigration {

    public function up() {
        $table = "moto_gallery";
        $this->addColumn($table, "video_tag_embedded_code", "text DEFAULT NULL after image_detail");

    }

    public function down() {
        $table = "moto_gallery";
        $this->dropColumn($table, "video_tag_embedded_code");

    }

}
