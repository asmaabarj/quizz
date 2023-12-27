<?php
    session_start();
   
    
   
    
    if (isset($_SESSION['Resulte']) && !empty($_SESSION['Resulte'])) {
        ?>
    <table >
     <tr><th>Question ID</th><th>Content Question</th><th>Answer ID</th><th>Content Answer</th><th>Answer Description</th></tr>
    <?php
        foreach ($_SESSION['Resulte'] as $resulteData) :
            $questionId = isset($resulteData['id_question']) ? $resulteData['id_question'] : '';
            $contentQuestion = isset($resulteData['content_question']) ? $resulteData['content_question'] : '';
            $answerId = isset($resulteData['id_rep']) ? $resulteData['id_rep'] : '';
            $contentAnswer = isset($resulteData['content_rep']) ? $resulteData['content_rep'] : '';
            $answerDesc = isset($resulteData['answer_desc']) ? $resulteData['answer_desc'] : '';
    ?>
        <tr>
           <td><?=$questionId?></td>
           <td><?=$contentQuestion?></td>
            <td><?=$answerId?></td>
            <td><?=$contentAnswer?></td>
            <td><?=$answerDesc?></td>
            </tr>
       <?php endforeach; ?>
  
       </table>
<?PHP
    } else {
        echo "No wrong answers recorded.";
    }
    ?>