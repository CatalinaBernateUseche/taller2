<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$id = $_POST["id"];
$programa = $_POST["programa"];
$cedula= $_POST["cedula"];
$nombre = $_POST["nombre"];


//Paso 3: Armo la sentencia sql que necesite
$sql = "UPDATE pre_inscripcion SET programa='".$programa."', cedula=".$cedula." , nombre='".$nombre."' WHERE id=".$id."";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ACTUALIZADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../editar.html';
              }
            });
          </script>";

}else{
    echo "<script>
    Swal.fire({
      title: 'Error al actualizar',
      icon: 'error',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'Aceptar'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = '../index.html';
      }
    });
  </script>";
}
