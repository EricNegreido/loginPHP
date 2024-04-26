<?php 

try{

  $base = new PDO("mysql:host=localhost; dbname=login", "root","");
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql ="SELECT * FROM users_pass WHERE USER= :login AND PASSWORD = :password";
  $resultado = $base->prepare($sql);
  $login = htmlentities(addslashes($_POST["login"]));
  $password = htmlentities(addslashes($_POST["password"]));
  $resultado->bindValue(":login", $login);
  $resultado->bindValue(":password", $password);
  $resultado->execute();

  $number_reg = $resultado->rowCount();

  if($number_reg){
    echo "Se Inicio Sesion";
  }else{
    //Redirigir a login nueveamente
    header("location:index.php");
  }
}catch(Exception $e){
  die("ERROR: " . $e->getMessage());
}
?>