<?php
require_once("../config/database.php");
require_once("../models/Question.php");

class QuestionService  {
    use Database;
    protected $db;
    public function ShowQuestion() {
        $db = $this->connect();
        $stmt = $db->prepare("SELECT question.*, theme.theme_name
        FROM question
        JOIN theme ON question.theme_id = theme.theme_id
        ;");

        
        
        $stmt->execute();
        $Results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $questions = array();

        foreach ($Results as $Result) {
            $question = new Question();
            $question->setIdQuestion($Result["id_question"]);
            $question->setContentQuestion($Result["content_question"]);
            $question->setThemeId($Result["theme_id"]);
            $question->setTheme_name($Result["theme_name"]);

            $questions[] = $question;
        }
        shuffle($questions);

        return $questions;
    }
    
}
?>