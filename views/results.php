<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="flex items-center justify-center h-[100vh]">
    <?php
    session_start();

    ?>



    <img class="w-[70px] h-[60px] absolute top-0 left-0" src="images/awslogo.png" alt="">

    <div id="correct" class="bacForm w-[55vw] h-[70vh] bg-gray-900 rounded-[20px] ">
        <?php
        if($_SESSION["score"] < 70){?>
    
<h1 class="mt-14 text-white">Hi <?= $_SESSION["username"] ?><br><br> You Have Failed The Test with a Score Of : <?= $_SESSION["score"] ?> Point</h1>
<p class="text-white"><br>Good Luck Next Time</p>

<?php   } else{?>


    <h1 class="mt-10 text-white"> <?= $_SESSION["username"] ?><br><br> You Have Passed The Test with a Score Of : <?= $_SESSION["score"] ?>Point</h1>
<p class="text-white"><br>Good Job !!!!</p>

<?php }?>
<div class="flex justify-center gap-4 mt-20">
        <form action="" method="post">
            <button type="submit" name="correction" class="baorm group relative inline-block overflow-hidden rounded border outline-none   px-12 py-3  text-sm font-medium text-white hover:text-orange-600 focus:outline-none   ">
                <span class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-orange-400 transition-all duration-200 group-hover:w-full"></span>
                <span class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-orange-400 transition-all duration-200 group-hover:h-full"></span>
                <span class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-orange-400 transition-all duration-200 group-hover:w-full"></span>
                <span class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-orange-400 transition-all duration-200 group-hover:h-full"></span>
                Correct
            </button>
        </form>
        <form action="index.php" post="post">
                <button type="submit" name="clear" class="baorm group relative inline-block overflow-hidden rounded border outline-none    px-12 py-3  text-sm font-medium text-white hover:text-orange-600 focus:outline-none   ">
               
                 <span class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-orange-400 transition-all duration-200 group-hover:w-full"></span>
                <span class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-orange-400 transition-all duration-200 group-hover:h-full"></span>
                <span class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-orange-400 transition-all duration-200 group-hover:w-full"></span>
                <span class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-orange-400 transition-all duration-200 group-hover:h-full"></span>
                 Play Again</button>
            </form>
            </div>
    </div>
    <?php
    if (isset($_POST["correction"])) {
    ?>
        <script>
            document.getElementById("correct").classList.add("hidden");
        </script>
        <?php

if (isset($_SESSION['Resulte']) && !empty($_SESSION['Resulte'])) {
    ?>
    <div class="relative overflow-x-auto" style="height: 70vh;">
    <table style="height: calc(70vh - 2rem); overflow-y: auto;" class="w-[80%] m-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-fixed">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Question</th>
                <th scope="col" class="px-6 py-3">Right Answer</th>
                <th scope="col" class="px-6 py-3">Description</th>
            </tr>
        </thead>
        <tbody >
            <?php foreach ($_SESSION['Resulte'] as $resulteData) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4"><?= $resulteData['content_question'] ?? '' ?></td>
                    <td class="px-6 py-4"><?= $resulteData['content_rep'] ?? '' ?></td>
                    <td class="px-6 py-4"><?= $resulteData['answer_desc'] ?? '' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

            
          
    <?PHP
        } else {
            echo '<p class="text-white">No wrong answers recorded.</p>';
        }
    }
    ?>
            <div style=" position:absolute ;  bottom:1rem; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>
  <div style=" position:absolute ;  background-color:orange; bottom:1rem; margin-left:2rem; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>
  <div style=" position:absolute ;  bottom:1rem; margin-right:2rem; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>

</body>

</html>