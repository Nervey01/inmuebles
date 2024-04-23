<?php
	require 'database.php';

    $db = new Database();
    $con = $db->conectar();

//|| empty($_POST['desc_perfil'])
if (isset($_POST['save'])) 
{
    if (empty($_POST['tipo']) || empty($_POST['direccion']) || empty($_POST['identificador']) || empty($_POST['fecha']) 
    || empty($_POST['identidad'])  ) 
    {

		echo"<script>alert('Existen Datos vacios.')</script>";
		echo"<script>window.location='registro_inmuebles.php'</script>";
	} 
        $id             = $_POST['id'];
        $document       = $_POST['tipo'];
        $names          = $_POST['direccion'];
        $phone          = $_POST['identificador'];
        $email          = $_POST['fecha'];
        $profesion      = $_POST['identidad'];
       // $desc_perfil    = $_POST['desc_perfil'];

    
        $sql = $con->prepare("SELECT * FROM inmuebles WHERE id_inmueble = :id");
        $sql->bindParam(":id", $id);
        $sql->execute();
        $resul = $sql->fetch(PDO::FETCH_ASSOC); 
        
        if ($resul && $resul['id_inmueble'] == $id) {
        
             echo "<script>alert('DOCUMENTO YA ESTA EN LA BASE DE DATOS.')</script>";
             echo "<script>window.location='registro_inmuebles.php'</script>";
        }
        else
        {
            $id_user = 2;
          /*  $rutaEnServidor='../img/proyectos/user';
            $rutaTemporal=$_FILES['imagen']['tmp_name'];
            $nombreImagen=$_FILES['imagen']['name'];
            $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
            move_uploaded_file($rutaTemporal,$rutaDestino);*/
   

            try {
        
                    $sql = "INSERT INTO inmuebles (id_inmueble,tipo,direccion,identificador,fecha_venta,id_usuario) VALUES (:id,:cc,:nom,:tel,:correo,:dir)";
                    $stmtx = $con->prepare($sql);
                    $stmtx->bindParam(':id', $id);
                    $stmtx->bindParam(':cc', $document);
                    $stmtx->bindParam(':nom', $names);
                    $stmtx->bindParam(':tel', $phone);
                    $stmtx->bindParam(':correo',  $email);
                    $stmtx->bindParam(':dir', $profesion);

                    $stmtx->execute();

                    echo "<script>alert('Se agrego correctamente')</script>";
                    echo"<script>window.location='registro_inmuebles.php'</script>";
    
      
            } catch (PDOException $e) {
                
                echo"<script>alert('Error al insertar')</script>";
                echo"<script>window.location='registro_inmuebles.php'</script>";

            }




       /*     $insert = $con->prepare( "INSERT INTO tm_usuario(ID_usuario, nombre_usu, telefono_usu,  correo_usu, direccion_usu, contraseña_usu, ID_tip_usu , estado_usu)
             values (?,?,?,?,?,?,?,?)");
            $insert->execute([$document,  $names, $phone, $email, $profesion, $contra,$id_user,$activo]);       
            //$id = $con->lastInsertId();
            echo"<script>alert('Se agrego correctamente')</script>";
            echo"<script>window.location='../login.php'</script>"; */
         }
    
	}
?>