<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$id= $_POST["id"];



//Paso 3: Armo la sentencia sql que necesite
$sql = "DELETE FROM pre_inscripcion WHERE id='".$id."'";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ELIMINADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../eliminar.html';
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
        window.location.href = '../eliminar.html';
      }
    });
  </script>";
}
