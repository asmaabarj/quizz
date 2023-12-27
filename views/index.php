<?php
session_start();
unset($_SESSION["answers"]);
unset($_SESSION["score"]);
unset($_SESSION["Resulte"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <div class="carousel">
      <div class="carousel__face"></div>
      <div class="carousel__face"></div>
      <div class="carousel__face"></div>
      <div class="carousel__face"></div>
      <div class="carousel__face"></div>
      <div class="carousel__face"></div>
    </div>
  </div>
  <img style="width: 150px; height: 130px;margin-top: 6rem;" src="images/awslogo.png" alt="">
  
  <form action="quizz.php" method="post">
  <div>
    <input type="text" name="username" placeholder="USER NAME" required="" style="
height: 2rem;
padding: 10px;
text-align: center;
  border: none;
  border-radius: 2px;
  outline: none;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 204px;">
  </div>
  <div>

<button type="submit" name="userstar" style="margin-top: 10px; 
  background-color: transparent;
  color: white;
  width: 14rem;
  height: 3rem;
  font-weight: bold; 
  padding: 0.5rem 1rem;
  border: 1px solid orange;
  border-radius: 2px;
  transition: background-color 0.3s, color 0.3s;"
        onmouseover="this.style.backgroundColor='orange'; this.style.color='black';"
        onmouseout="this.style.backgroundColor='transparent'; this.style.color='orange';">
        START
      </button>


  </div>
  </form>
  <div style=" position:absolute ;  bottom:1rem; margin-left:40rem; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>
  <div style=" position:absolute ;  bottom:1rem; margin-left:41rem; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>
  <div style=" position:absolute ;  bottom:1rem; margin-left:39rem; background-color:orange; border: 1px solid orange; border-radius: 20px; height: 10px; width:10px;"></div>

</body>

</html>