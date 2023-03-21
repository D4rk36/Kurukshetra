<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="js/ch03.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css">
    <title>XSS Challenge 4</title>
  </head>
  <body>
    <div class="header">
      <h1>XSS Challenge 4</h1>
    </div>

    <div class="sidenav">
      <br><br>
      <a href="ch01.php">XSS Challenge 1</a>
      <a href="ch02.php">XSS Challenge 2</a>
      <a href="ch03.php">XSS Challenge 3</a>
      <a href="ch04.php" class="highlight">XSS Challenge 4</a>
      <a href="ch05.php">XSS Challenge 5</a>
      <a href="ch06.php">XSS Challenge 6</a>
      <a href="ch07.php">XSS Challenge 7</a>
      <a href="ch08.php">XSS Challenge 8</a>
      <a href="ch09.php">XSS Challenge 9</a>
      <a href="ch10.php">XSS Challenge 10</a>
      <a href="ch11.php">XSS Challenge 11</a>
      <a href="ch12.php">XSS Challenge 12</a>
      <a href="ch13.php">XSS Challenge 13</a>
      <a href="ch14.php">XSS Challenge 14</a>
    </div>

    <div class="form">
      <form class="" action="" method="post">
        Try Your XSS Payload?  <input type="text" name="xss" value="<?php
        if (isset($_POST['xss'])) {
          echo $_POST['xss'];
        }
        ?>"><br>
        <input type="submit" name="submit" value="Submit">
      <form class="form-attr" action="" method="post">
        Try Your XSS Payload? <input type="text" name="xss" value="" maxlength="3"><br>
        <input type="submit" name="submit" value="Submit"> <br><br><br>

      <div class="prev">
         <a class="prev" href="ch03.php"><button type="button">Previous Challenge</button></a>
      </div>
      <div class="hyper">
         <a href="ch05.php">
           <button type="button">Next Challenge</button>
         </a>
      </div>
      <br><br><br><br>
    </form>
  </div>

  </body>
</html>
