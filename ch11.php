<?php
	header("Content-Security-Policy: script-src https://facebook.com https://google.com 'unsafe-eval' data: http://*; child-src 'none'; report-uri /Report-parsing-url;");
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/master.css">
    <script src="js/ch05.js" charset="utf-8"></script>
    <meta charset="utf-8">
    <title>Challenge 11</title>
  </head>
  <body>
    <div class="header">
      <h2>Challenge 11</h2>
    </div>

    <div class="sidenav">
      <br><br>
      <a href="ch01.php">XSS Challenge 1</a>
      <a href="ch02.php">XSS Challenge 2</a>
      <a href="ch03.php">XSS Challenge 3</a>
      <a href="ch04.php">XSS Challenge 4</a>
      <a href="ch05.php">XSS Challenge 5</a>
      <a href="ch06.php">XSS Challenge 6</a>
      <a href="ch07.php">XSS Challenge 7</a>
      <a href="ch08.php">XSS Challenge 8</a>
			<a href="ch09.php">XSS Challenge 9</a>
			<a href="ch10.php">XSS Challenge 10</a>
			<a href="ch11.php" class="highlight">XSS Challenge 11</a>
			<a href="ch12.php">XSS Challenge 12</a>
    </div>

    <div class="form">
    <form action="" method="post" name="form">
      Try Your XSS Payload? <input type="text" name="xss"><br>
      <input type="submit" name="submit" value="Submit">
      <br><br>

      <div class="prev">
         <a class="prev" href="ch10.php"><button type="button">Previous Challenge</button></a>
      </div>
			<div class="hyper">
				 <a href="ch12.php"><button type="button">Next Challenge</button></a>
			</div>
      <br><br><br><br>

    </form>



  </body>
</html>


<?php

  if (isset($_POST['submit'])) {

    $xssPayload = $_POST['xss'];
    echo "Your XSS Payload $xssPayload";

  }

 ?>