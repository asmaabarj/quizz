<?php
require_once("../service/Questionservice.php");
require_once("../service/ResponseService.php");
require_once("../config/database.php");
session_start();

$Question = new Questionservice();
$reponse = new ResponseService();
$Questions = $Question->ShowQuestion();
$randomQuestion = $Questions[array_rand($Questions)];

$reponses = $reponse->ShowAnswer($randomQuestion->getIdQuestion());


?>