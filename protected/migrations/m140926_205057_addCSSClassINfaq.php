<?php

class m140926_205057_addCSSClassINfaq  extends DTDbMigration {

    public function up() {
        $table = "faqs";
        
        $this->addColumn($table, "css_class", 'enum("primary","success","warning") DEFAULT NULL after type');
    }

    public function down() {
        $table = "faqs";
  
        $this->dropColumn($table, "css_class");
    }

}
