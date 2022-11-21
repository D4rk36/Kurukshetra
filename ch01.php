<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css?2.1">
    <title>XSS Challenge 1</title>
  </head>
  <body>
    <div class="header">
      <h1>XSS Challenge 1</h1>
    </div>

    <div class="sidenav">
      <br><br>
      <a href="ch01.php" class="highlight">XSS Challenge 1</a>
      <a href="ch02.php">XSS Challenge 2</a>
      <a href="ch03.php">XSS Challenge 3</a>
      <a href="ch04.php">XSS Challenge 4</a>
      <a href="ch05.php">XSS Challenge 5</a>
      <a href="ch06.php">XSS Challenge 6</a>
    </div>

    <div class="form">
      <form class="form-attr" action="" method="post">
        Provide Input: <input type="text" name="xss" value=""><br>
        <input type="submit" name="submit" value="Submit"> <br>

        <?php
        if (isset($_POST['submit'])){
          $host = 'mysql';
          $user = 'root';
          $pass = 'rootpassword';
          $db = 'xss';
          $input = $_POST['xss'];
          $conn = new mysqli($host, $user, $pass, $db);

          $sql = "INSERT INTO comments (data) VALUES (\"$input\")";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
                  }

          $conn->close();
          }
          ?>

         <br><br><br>
         <div class="prev">
            <a class="prev" href="purge.php"><button type="button">Purge Database</button></a>
         </div>

         <div class="hyper">
            <a href="ch02.php"><button type="button">Next Challenge</button></a>
         </div>

        <br><br><br><br>
      </form>
    </div>


    <div class="comments">
      <p>
      <?php
      $host = 'mysql';
      $user = 'root';
      $pass = 'rootpassword';
      $db = 'xss';
      $conn = new mysqli($host, $user, $pass, $db);

      $sql = "SELECT data from comments";
      $result = $conn->query($sql);

      if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){

          echo $row["data"];
          echo "<br><br>";
        }
      } else {
        echo "0 results";
      }

      $conn->close();
       ?>
      </p>
    </div>

    <br>

    <br>

  </body>
</html>
