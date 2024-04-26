<?php 

try{

  $base = new PDO("mysql:host=localhost; dbname=login", "root","");
  $base->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);
  $sql ="SELECT * FROM users_pass WHERE aUSER= :login AND PASSWORD = :password";
  $resultado = $base->prepare($sql);
  $login = htmlentities(addslashes($_POST["login"]));
  $password = htmlentities(addslashes($_POST["password"]));
  $resultado->bindValue(":login", $login);
  $resultado->bindValue(":password", $password);
  $resultado->execute();

  $number_reg = $resultado->rowCount();

  if($number_reg){
    
  }else{

  }
}catch(Exception $e){
  die("ERROR: " . $e->getMessage());
}
?>