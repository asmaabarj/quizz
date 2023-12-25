<?php

require_once("../controller/Quizzdisplay.php");

if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedAnswer = $_POST['selectedAnswer'];

    $_SESSION['answers'][] = $selectedAnswer;
    if (count($_SESSION['answers']) === 10) {
        header('Location: results.php');
        exit();

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Ephesis&family=Great+Vibes&family=Irish+Grover&family=Lora:wght@400;500;600;700&family=Open+Sans:ital,wght@0,300;1,300&family=Playfair+Display&family=Poppins:ital,wght@0,200;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700&family=Pridi:wght@200&family=Red+Rose:wght@500;600;700&family=Roboto+Slab:wght@500;700&display=swap');
        /* .bobriya{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50% , -30%);
        } */
        .progressbar {
            
    display: flex;
 justify-content: center;
}
.progressbar li {
    list-style-type: none;
    width: 6rem;
    float: center;
    font-size: 10px;
    position: relative;
    text-transform: uppercase;
    color: #7d7d7d;
}
.progressbar li:before {
    width: 10px;
    height: 10px;
    content: '';
    background-color: #7d7d7d;
    display: block;
    margin: 0 auto 10px auto;
    border-radius: 50%;
    transition: all .8s;
}
.progressbar li:after {
    width: 100%;
    height: 2px;
    content: '';
    position: absolute;
    background-color: #7d7d7d;
    top: 5px;
    left: -50%;
    z-index: -1;
    transition: all .8s;
}
.progressbar li:first-child:after {
    content: none;
}
.progressbar li.active:before {
    border-color: orange;
    background-color: orange;
    transition: all .8s;
}
.progressbar li.active:after {
    background-color: #5D3587;
    transition: all .8s;
}
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

<body class="bobriya">

    <img class="w-[70px] h-[50px] " src="images/awslogo.png" alt="">
    <div class="bobriya">
    <div class="container">
        <div class="progress">
            <div class="percent"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="">
                    <ul id="progress-bar" class="progressbar">
                        <li class="active">Question 1</li>
                        <li>Question 2</li>
                        <li>Question 3</li>
                        <li>Question 4</li>
                        <li>Question 5</li>
                        <li>Question 6</li>
                        <li>Question 7</li>
                        <li>Question 8</li>
                        <li>Question 9</li>
                        <li>Question 10</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="flex items-center justify-center">
        <form action="" method="post" class="backForm p-8 rounded-lg w-[80%] h-[70vh] shadow-md">
            <h1 class="text-white">Theme : <?= $randomQuestion->getTheme_name() ?></h1>
            <h1 style="font-family:red rose; " id="question" class="mt-10 text-white mt-10 w-[90%] m-auto">
              
            </h1>

            <div class="mt-14 flex justify-center m-auto flex-wrap w-[90%] gap-10">
                <?php
                foreach ($reponses as $reponse):
                ?>
                    <button type="submit" name="selectedAnswer" value=""
                        class="animated-outline text-center   rounded-[20px] h-[5rem] border-2 w-[47%] text-orange-500  hover:bg-orange-500 hover:text-black hover:font-bold focus:text-black focus:font-bold focus:bg-orange-500 active:text-black dark:text-orange-300 text-xs font-medium uppercase "><?= $reponse->getContent_rep() ?></button>
                <?php
                endforeach;
                ?>
            </div>
        </form>
    </section>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var questionElement = document.getElementById('question');
        var questionContent = "<?= $randomQuestion->getContentQuestion() ?>";
        var words = questionContent.split(' ');
        var currentWordIndex = 0;

        function displayNextWord() {
            if (currentWordIndex < words.length) {
                questionElement.innerText += ' ' + words[currentWordIndex];
                currentWordIndex++;
                setTimeout(displayNextWord, 100);
            }
        }

        displayNextWord();
    });
</script>

</body>

</html>

