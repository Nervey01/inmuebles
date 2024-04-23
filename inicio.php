<?php 
require 'database.php';

$db = new Database();
$con = $db->conectar();

if($_POST["inicio"])
{
    
    $usuario = $_POST["usuario"];
	$clave = $_POST["clave"];
    if ($usuario != "" && $clave != "")
    {
        $sql = $con->prepare("SELECT * FROM usuario LEFT OUTER JOIN tipo_usuario ON usuario.id_tip_usu = tipo_usuario.id_tip_usu WHERE usuario.id_usuario= $usuario AND usuario.contraseña = '$clave' ");
        $sql->execute();
        $fila = $sql->fetch();
        
        if ($fila) {
            session_start();
            $_SESSION['usuario'] = $fila['id_usuario'];
            $_SESSION['tipo'] = $fila['id_tip_usu'];

            if ($_SESSION['tipo'] == 1) {
                header("Location: reporte_inmuebles.php");
                exit();
            }
            
        }
        else
        {
            echo"<script>alert('Credenciales invalidas o usuario inactivo.')</script>";
            echo"<script>window.location='login.php'</script>";
            exit();
        }
}
}	
