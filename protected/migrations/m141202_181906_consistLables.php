<?php

class m141202_181906_consistLables extends DTDbMigration {

    public function up() {
       
        $table = "languages";
        $data = $this->getQueryAll("Select id From $table");

        $data_cat = $this->getQueryAll("Select distinct(category) as category From labels2");

        foreach ($data as $record) {
             $lang = $record['id'];
            foreach ($data_cat as $cat) {
                $cat = $cat['category'];
                $sql = "Select t.* FROM labels2 as t "
                        . "WHERE t.lang_id = $lang AND category ='$cat'" 
                        . "group by t.key";
                $data2 = $this->getQueryAll($sql);
                foreach($data2 as $column){
                    $this->insertRow('labels', $column);
                }
//                
            }
        }
        
    }

    public function down() {
        echo "m141202_181906_consistLables does not support migration down.\n";
        return false;
    }

}
