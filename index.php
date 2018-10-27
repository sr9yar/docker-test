<?php echo "hello<br>";

try{
  $dbh = new pdo( 'mysql:host=127.0.0.1:3306;dbname=root',
                  'root',
                  'root',
                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  echo "true<br>";
  //die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
  echo "false<br>";
  //die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
}
