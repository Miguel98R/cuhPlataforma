<?php 
include("conexion.php");




$nombre = $_POST['nombreDocente'];
$app = $_POST['apellidoP_Docente'];
$apm = $_POST['apellidoM_Docente'];
$edad = $_POST['edadDocente'];
$domicilio = $_POST['domicilioDocente'];



$nombreUser=str_replace(" ","",$nombre);

$usuario=$nombreUser.$app.$apm."@cuh.com";
$contrasena=$nombreUser."2020CUH";
    
$consulta1 =  "INSERT INTO usuarios (userName,contrasena,rol) VALUES ('$usuario','$contrasena','profesor');";

$result1=mysqli_query($conn,$consulta1);

$consulta2 = "SELECT id FROM usuarios WHERE userName='$usuario';";
$result2=mysqli_query($conn,$consulta2);

$datos=$result2->fetch_assoc();

$idUsuario=$datos['id'];

$consulta3 = "INSERT INTO docentes (nombre,apellido_p,apellido_m,edad,domicilio,id_usuario) VALUES('$nombre','$app','$apm','$edad','$domicilio','$idUsuario');";
$result3 = $conn->query($consulta3) or die (mysqli_error($conn));


if($result3==true){
    echo'<script type="text/javascript">
      alert("Alumno registrado con exito, Usuario: '."$usuario".' , Contraseña: '."$contrasena".' ");
        window.location.href="../dashboardAdmin.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("No se pudo registrar al Docente");
window.location.href="../dashboardAdmin.php";
        </script>';
}