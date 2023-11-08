<?php
$dsn = 'mysql:host=database-7nov23.cupvyhh4tc17.us-east-1.rds.amazonaws.com:3306;dbname=pruebasnov23;';
$user = 'admin';
$password = 'locuaz24';

try {

  $dbh = new PDO($dsn, $user, $password);

  $result = $dbh->query("SELECT * 
    FROM ALUMNOS;");

  foreach ($result as $row) {
    echo '<pre>';
      print_r($row);
    echo '</pre>';
  }

} catch (PDOException $e) {

  echo 'Connection failed: ' . $e->getMessage();

}
?>