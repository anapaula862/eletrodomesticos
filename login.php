<?php
include("../config/conexion.php"); session_start();
$r=$conn->query("SELECT * FROM usuarios WHERE correo_electronico='$_POST[correo]'");
$u=$r->fetch_assoc();
if(password_verify($_POST['contrasena'],$u['contrasena'])){
$_SESSION['id']=$u['usuario_id']; header("Location: ../index.html");
}else{echo "Error";}
?>