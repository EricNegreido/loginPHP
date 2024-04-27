<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    session_start();//REANUDAMOS SESSION CUANDO SE REDIRIJA EL USUARIO;
    if(!isset($_SESSION["usuario"])){
      header("Location:index.php");
    }
  ?>
   <h1> Bienvenido </h1>
   <?php 
    echo "<p>" . $_SESSION['usuario'] .  "</p>";
   ?>
   <p> Ingreseaste a correctamente </p>

   <p> <a href="logout.php"> Logout </a> </p>
  
</body>
</html>