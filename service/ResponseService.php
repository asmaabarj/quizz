<?php
require_once("../config/database.php");
require_once("../models/Reponse.php");

class ResponseService extends Database{
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
        
            $Reponses[] = $reponse;
        }
    
        return $Reponses;
    }
    
}
?>