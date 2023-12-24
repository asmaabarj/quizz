<?php
require_once("../config/database.php");
require_once("../models/Question.php");

class QuestionService extends Database {
    protected $db;
    public function ShowQuestion() {
        $db = $this->connect();
        $stmt = $db->prepare(" SELECT *, RAND() as ordering
        FROM question
        ORDER by ordering;");
       
        $stmt->execute();
        $Results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $questions = array();

        foreach ($Results as $Result) {
            $question = new Question();
            $question->setIdQuestion($Result["id_question"]);
            $question->setContentQuestion($Result["content_question"]);
            $question->setThemeId($Result["theme_id"]);

            $questions[] = $question;
        }

        return $questions;
    }
}
?>