<?php

use LDAP\Result;
class Theme {
    public $theme_id;
    public $theme_name;
    

  
    public function __construct(){
    }
    
    public function getThemeId() {
        return $this->theme_id;
    }

    public function getThemeName() {
        return $this->theme_name;
    }

    public function setThemeId($theme_id) {
        $this->theme_id = $theme_id;
    }

    public function setThemeName($theme_name) {
        $this->theme_name = $theme_name;
    }
}
?>
