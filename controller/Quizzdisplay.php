<?php
require_once("../service/Questionservice.php");
require_once("../service/ResponseService.php");
require_once("../config/database.php");
session_start();

if (!isset($_SESSION["array"])) {
    $_SESSION["array"] = [];
}

$Question = new Questionservice();
$reponse = new ResponseService();
$Questions = $Question->ShowQuestion();

if (count($_SESSION["array"]) == count($Questions)) {
    $_SESSION["array"] = [];
}

$randomQuestion = null;

do {
    shuffle($Questions);
    $randomQuestion = $Questions[array_rand($Questions)];
} while (in_array($randomQuestion->getIdQuestion(), $_SESSION["array"]));


$_SESSION["array"][] = $randomQuestion->getIdQuestion();

$reponses = $reponse->ShowAnswer($randomQuestion->getIdQuestion());
$reponses = $reponse->ShowAnswer($randomQuestion->getIdQuestion());
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = array();
}



$questionNumber = count($_SESSION['answers']) + 1;
$totalQuestions = 10;
$progressPercentage = ($questionNumber / $totalQuestions) * 100;



if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if (isset($_POST["selectedAnswer"])) {

    $selectedAnswerId = isset($_POST['selectedAnswer']) ? $_POST['selectedAnswer'] : null;


    if ($selectedAnswerId == 1) {
        $_SESSION['score'] += 10;
    } else {
        $_SESSION['score'] += 0;
    }
}

if (!isset($_SESSION['Resulte'])) {
    $_SESSION['Resulte'] = array();
}

if (isset($_POST['selectedAnswer']) && $_POST['selectedAnswer'] == 0) {
    $questionId = isset($_POST['questionId']) ? $_POST['questionId'] : null;

    $resulteData = $reponse->correction($questionId);

    $_SESSION['Resulte'][] = $resulteData;
}

if (isset($_POST['selectedAnswer'])) {
    $selectedAnswer = $_POST['selectedAnswer'];

    $_SESSION['answers'][] = $selectedAnswer;
    if (count($_SESSION['answers']) === 10) {
        unset($_SESSION["array"]);
        header('Location: results.php');
        exit();
    }
}
