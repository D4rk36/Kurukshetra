<?php
ob_start();

$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$db = 'xss';
$conn = new mysqli($host, $user, $pass, $db);
$sql = "DROP TABLE IF EXISTS comments";
$sql1 = "CREATE TABLE IF NOT EXISTS `xss`.`comments` (id INT NOT NULL AUTO_INCREMENT, data VARCHAR(300), PRIMARY KEY(id))";
$sql2 = "INSERT INTO `xss`.`comments` (id, data) VALUES (1, '')";


  if ($conn->query($sql) && $conn->query($sql1) && $conn->query($sql2) === TRUE) {
    echo "<script> location.replace(\"ch01.php\"); </script>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
          }

  $conn->close();

ob_end_flush();

 ?>
