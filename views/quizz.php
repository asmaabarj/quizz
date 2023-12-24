<?php
require_once("../controller/Quizzdisplay.php");
$randomQuestion = $Questions[array_rand($Questions)];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .animated-outline {
            animation: changeOutlineColor 3s infinite;
        }

        @keyframes changeOutlineColor {
            0% {
                border-color: rgb(255, 149, 0);
            }

            20% {
                border-color: rgb(214, 104, 8);
            }

            40% {
                border-color: rgba(255, 145, 0, 0.123);
            }

            60% {
                border-color: rgb(2, 4, 44);
            }

            80% {
                border-color: rgb(0, 7, 83);
            }
            100% {
                border-color: rgba(255, 166, 0, 0.066);
            }
            
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center">

    <form action="" class="backForm  p-8 rounded-lg w-[80%] h-[75vh] shadow-md">



       <h1 class="text-white"><?= $randomQuestion->getContentQuestion() ?></h1>

        <div class="mt-14 flex justify-center m-auto flex-wrap w-[90%] gap-10">
        <?php
foreach($reponses as $reponse):

?>
            <button type="submit" name="answer" class="animated-outline rounded-[20px] h-[5rem] border-2 w-[45%] text-orange-500 hover:bg-orange-500 hover:text-black hover:font-bold focus:text-black active:text-black  dark:text-orange-300   text-xs font-medium uppercase    "> <?= $reponse->getContent_rep() ?></button>
       <?php
endforeach;

?>
        </div>
 
    </form>
    
</body>

</html>
