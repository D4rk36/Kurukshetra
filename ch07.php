<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/master.css">
    <meta charset="utf-8">
    <title>XSS Challenge 6</title>
  </head>
  <body>

    <div class="header">
      <h1>XSS Challenge 6</h1>
    </div>

    <div class="sidenav">
      <br><br>
      <a href="ch01.php">XSS Challenge 1</a>
      <a href="ch02.php">XSS Challenge 2</a>
      <a href="ch03.php">XSS Challenge 3</a>
      <a href="ch04.php">XSS Challenge 4</a>
      <a href="ch05.php">XSS Challenge 5</a>
      <a href="ch06.php">XSS Challenge 6</a>
      <a href="ch07.php" class="highlight">XSS Challenge 7</a>
    </div>

HIDDEN HTML Parameters


    <div class="form">
      <form class="" action="" method="post">
        Try Your XSS Payload? <input type="text" name="xss" value="<?php
        if (isset($_POST['xss'])) {
          echo $_POST['xss'];
        }
        ?>"><br>
        <input type="submit" name="submit" value="Submit">

      <br><br>

      <div class="prev">
         <a class="prev" href="ch06.php"><button type="button">Previous Challenge</button></a>
      </div>
      <div class="hyper">
         <a href="ch04.php">
           <button type="button">Next Challenge</button>
         </a>
      </div>
      <br><br><br><br>
    </form>
  </div>

  </body>
</html>
