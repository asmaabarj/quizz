<?php

use LDAP\Result;
class Question {
    public $id_question;
    public $content_question;
    public $theme_id;
    public $theme_name;

  
    public function __construct(){

    }
    
    public function getIdQuestion() {
        return $this->id_question;
    }

    public function getContentQuestion() {
        return $this->content_question;
    }

    public function getThemeId() {
        return $this->theme_id;
    }

    public function setIdQuestion($id_question) {
        $this->id_question = $id_question;
    }

    public function setContentQuestion($content_question) {
        $this->content_question = $content_question;
    }

    public function setThemeId($theme_id) {
        $this->theme_id = $theme_id;
    }
    public function getTheme_name() {
        return $this->theme_name;
    }

    public function setTheme_name($theme_name) {
        $this->theme_name = $theme_name;
    }

}
?>