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
    unset($_SESSION['answers']);
        ?>
    <img class="w-[70px] h-[60px] absolute top-0 left-0" src="images/awslogo.png" alt="">         

    <div  class="bacForm w-[55vw] h-[70vh] bg-gray-900 rounded-[20px] ">
    <a href="#"
	class="baorm group relative inline-block overflow-hidden rounded border outline-none mt-44   px-12 py-3  text-sm font-medium text-white hover:text-orange-600 focus:outline-none   ">
	<span class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-orange-600 transition-all duration-200 group-hover:w-full"></span>
	<span class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-orange-600 transition-all duration-200 group-hover:h-full"></span>
	<span class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-orange-600 transition-all duration-200 group-hover:w-full"></span>
	<span class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-orange-600 transition-all duration-200 group-hover:h-full"></span>
	Correct 
</a>
</div>
</body>
</html>