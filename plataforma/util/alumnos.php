<?php 
include("conexion.php");


$nombre = $_POST['nombreAlumno'];
$app = $_POST['apellidoP_Alumno'];
$apm = $_POST['apellidoM_Alumno'];
$edad = $_POST['edadAlumno'];
$domicilio = $_POST['domicilioAlumno'];
$grupo = $_POST['grupoAlumno'];


  $IdentificadorAleatorio=rand(1000,4000);



$nombreUser=str_replace(" ","",$nombre);

$usuario=$nombreUser.$app."@cuh.com";
$contrasena=$nombreUser."2020CUH";
$Matricula = "CUH".$IdentificadorAleatorio.$nombre[0] . $app[0] . $apm[0] ;
    
$consulta1 =  "INSERT INTO usuarios (userName,matricula,contrasena,rol) VALUES ('$usuario','$Matricula','$contrasena','alumno');";

$result1=mysqli_query($conn,$consulta1);

$consulta2 = "SELECT id FROM usuarios WHERE userName='$usuario';";
$result2=mysqli_query($conn,$consulta2);

$datos=$result2->fetch_assoc();

$idUsuario=$datos['id'];

$consulta3 = "INSERT INTO alumnos (nombre,apellido_p,apellido_m,edad,domicilio,id_grupo,id_usuario) VALUES('$nombre','$app','$apm','$edad','$domicilio','$grupo','$idUsuario');";
$result3 = $conn->query($consulta3) or die (mysqli_error($conn));


if($result3==true){
    echo'<script type="text/javascript">
        alert("Alumno registrado con exito, Usuario: '."$usuario".' , Contraseña: '."$contrasena".' ");
             
        window.location.href="../dashboardAdmin.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("No se pudo registrar al alumno");
window.location.href="../dashboardAdmin.php";
        </script>';
}