<?php

class m140917_193309_social_link_image extends DTDbMigration {

    public function up() {
         $table = "social_media_links";
         $this->addColumn($table, "image", "varchar(50) DEFAULT NULL after url");
    }

    public function down() {
        $table = "social_media_links";
        $this->addColumn($table, "image", "varchar(50) DEFAULT NULL after url");
    }

}
