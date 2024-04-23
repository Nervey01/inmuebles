<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php 


require 'database.php';
$db = new Database();
$con = $db->conectar();


?>


<?php
$insert = $con->prepare("SELECT U.nombre, U.correo, U.telefono, I.fecha_venta, I.tipo, I.direccion, I.identificador FROM inmuebles AS I INNER JOIN usuario AS U WHERE U.id_usuario = '1106226155';");

$insert->execute();
/***la variable $resultado1 es la que me va a guardar toda la informacion de la consulta */
$resultado1= $insert->fetchAll(PDO::FETCH_ASSOC);
$i=0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        


      <table class="table table-hover">
  <thead>
  <tr class="table-light">
                    <td>Nombre</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                    <td>Fecha de la venta</td>
                    <td>Tipo</td>
                    <td>Direccion</td>
                    <td>Identificador</td>



                </tr>
  </thead>
  <tbody>
  <?php foreach ($resultado1 as $row)
                {
                $i++; ?>


                <tr class="table-active">
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['correo']?></td>
                    <td><?php echo $row['telefono']?></td>
                    <td><?php echo $row['fecha_venta']?></td>
                    <td><?php echo $row['tipo']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['identificador']?></td>




                </tr>


                <?php }?>

  </tbody>
</table>

      
      </div>
      <div class="modal-footer">

        <a href="excel.php" button type="button"  class="btn btn-primary">Descargar</a>
      </div>

</body>
</html>