<script src="../js/sweetalert2@10.js"></script>
.
<?php
//Paso 1: Importar la libreria de la BD
require "../config/conexion.php";

//paso 2: Capturando variables
$estado = 0;
$programa = $_POST["programa"];
$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];


if ($estado==1)
{
  die ("<script>
  Swal.fire({
    title: 'plataforma cerrada',
    icon: 'error',
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = '../index.html';
    }
  });
</script>");

  
}
$sql = "INSERT INTO pre_inscripcion (programa, cedula, nombre, fecha_sys) VALUES
('".$programa."' , ".$cedula ." , '".$nombre."', now() )";

//Paso 4: enviar la info al servidor

if ($conexion->query($sql))
{
    echo "<script>
            Swal.fire({
              title: 'ENVIADO CORRECTAMENTE',
              icon: 'success',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../index.html';
              }
            })
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
