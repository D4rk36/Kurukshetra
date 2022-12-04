<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css?2.1">
    <title>XSS Challenge 3</title>
  </head>
  <body>
    <div class="header">
      <h1>XSS Challenge 3</h1>
    </div>

    <div class="sidenav">
      <br><br>
      <a href="ch01.php">XSS Challenge 1</a>
      <a href="ch02.php">XSS Challenge 2</a>
      <a href="ch03.php" class="highlight">XSS Challenge 3</a>
      <a href="ch04.php">XSS Challenge 4</a>
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
        Try Your XSS Payload? <input type="text" name="xss" value=""><br>
        <input type="submit" name="submit" value="Submit"><br><br>
        <?php
          error_reporting(1);
          if (isset($_POST['xss'])) {
            $input = $_POST['xss'];
            echo preg_replace('/script|svg|img/i', '', $input);
          }

         ?>
         <br><br>

         <div class="prev">
            <a class="prev" href="ch02.php"><button type="button">Previous Challenge</button></a>
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
