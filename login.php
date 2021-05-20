<?php
include("conexion.php");
$usuario=$_REQUEST['txtusuario'];
$contra=$_REQUEST['txtcontra'];
$query="select Usuario, Contraseña from login where Usuario='$usuario' and Contraseña='$contra'";
//echo("$query");
$resultado=mysqli_query($cnn,$query);

if ($reg=mysqli_fetch_array($resultado)) 
{
    session_start();
    $_SESSION['nombre']=$reg['Usuario'];
    header ("location: inventario.html");
}

else
{

    
  echo"<script> alert('no estas en la base de datos');</script>";

  header("Location: index.html?msg=$msg");
}
//header("Location: pincipal.php?msg=$msg");

?>