<?php

use LDAP\Result;

class Reponse extends Database{
    private $id_rep;
    private $content_rep;

    private $id_question;
protected $db;
    private $cas_rep;

    private $answer_desc;
    public function __construct(){


    }

    public function getIdrep(){
       return $this->id_rep;
    }
    public function getContent_rep(){
        return $this->content_rep;
    }
    public function getIdQuestion(){
        return $this->id_question;
    }

    public function getCasRep(){
        return $this->cas_rep;
    }
    public function getAnswerDesc(){
        return $this->answer_desc;
    }
    public function setIdRep($id_rep) {
        $this->id_rep = $id_rep;
    }

    public function setContentRep($content_rep) {
        $this->content_rep = $content_rep;
    }

    public function setIdQuestion($id_question) {
        $this->id_question = $id_question;
    }

    public function setCasRep($cas_rep) {
        $this->cas_rep = $cas_rep;
    }

    public function setAnswerDesc($answer_desc) {
        $this->answer_desc = $answer_desc;
    }




}

?>