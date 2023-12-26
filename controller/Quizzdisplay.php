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
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = array();
}

if (isset($_POST['selectedAnswer'])) {
    $selectedAnswer = $_POST['selectedAnswer'];

    $_SESSION['answers'][] = $selectedAnswer;
    if (count($_SESSION['answers']) === 10) {
        header('Location: results.php');
        exit();

    }
}


// Get all questions from the database

// Shuffle the questions array
shuffle($Questions);

// Initialize session variable if not set
if (!isset($_SESSION['asked_questions'])) {
    $_SESSION['asked_questions'] = array();
}

// Display 10 questions
$questionsToDisplay = array_slice($Questions, 0, 10);

foreach ($questionsToDisplay as $randomQuestion) {
    // Check if the question has already been asked
    while (in_array($randomQuestion->getIdQuestion(), $_SESSION['asked_questions'])) {
        $randomQuestion = $Questions[array_rand($Questions)];
    }

    // Add the question ID to the asked questions array
    $_SESSION['asked_questions'][] = $randomQuestion->getIdQuestion();

    // ... Rest of your existing code for displaying the question and answers ...
}

?>