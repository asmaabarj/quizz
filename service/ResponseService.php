<?php
require_once("../config/database.php");
require_once("../models/Reponse.php");

class ResponseService{
    use Database;

    protected $db;
    public function ShowAnswer($id){
        $db = $this->connect();
        $query = "SELECT * FROM reponse WHERE id_question = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        $Results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $Repons = array();
           
        foreach ($Results as $Result) {
            $reponse = new Reponse();
            $reponse->setIdRep($Result["id_rep"]);
            $reponse->setContentRep($Result["content_rep"]);
            $reponse->setIdQuestion($Result["id_question"]);
            $reponse->setCasRep($Result["cas_rep"]);
            $reponse->setAnswerDesc($Result["answer_desc"]);
        
            $Repons[] = $reponse;
        }
    
        return $Repons;
    }
    public function correction($id_question){
        $db = $this->connect();
    
        $query = "SELECT reponse.answer_desc, reponse.id_rep, reponse.cas_rep, reponse.id_question, reponse.content_rep, question.content_question 
                  FROM reponse
                  JOIN question ON reponse.id_question = question.id_question
                  WHERE question.id_question = :id_question AND reponse.cas_rep = 1";
    
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id_question', $id_question, PDO::PARAM_INT);
        $stmt->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $result;
    }
    



}
?>