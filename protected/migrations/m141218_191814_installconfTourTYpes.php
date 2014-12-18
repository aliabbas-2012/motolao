<?php

class m141218_191814_installconfTourTYpes extends DTDbMigration {

    public function up() {
        $table = "languages";
        $data = $this->getQueryAll("Select id,name From $table WHERE name<>'English'");

        $table = "conf_tour_types_langs";
        $this->truncateTable($table);

        $table = "conf_tour_types";
        $this->truncateTable($table);

        for ($i = 1; $i <= 10; $i++) {
            $columns = array("name" => $i . " day", 'id' => $i);
            $name = $i . " day";
            $tours = $this->getQueryAll("Select id FROM tours WHERE tour_type= '$name'");
            foreach ($tours as $tour) {
                $this->update("tours", array("tour_type" => $i), 'id = ' . $tour['id']);
            }
            $this->insertRow($table, $columns);
        }

        foreach ($data as $lang) {
            for ($i = 1; $i <= 10; $i++) {
                $table = "conf_tour_types_langs";
                $columns1 = array(
                    "name" => $i . " day",
                    'parent_id' => $i,
                    "lang_id" => $lang['id']);
                print_r($columns1);
                $this->insertRow($table, $columns1);
            }
        }
    }

    public function down() {
        $table = "conf_tour_types_langs";
        $this->truncateTable($table);
        $table = "conf_tour_types";
        $this->truncateTable($table);
    }

}
