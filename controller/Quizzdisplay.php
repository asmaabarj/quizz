<?php
require_once("../service/Questionservice.php");
require_once("../service/ResponseService.php");
require_once("../config/database.php");
$Question = new Questionservice();
$reponse = new ResponseService();
$Questions = $Question->ShowQuestion();
foreach($Questions as $Question){
$reponses = $reponse->ShowAnswer($Question->getIdQuestion());
}


?>