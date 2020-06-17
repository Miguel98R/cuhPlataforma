<?php

include("conexion.php");


global $user ;
$user = $_POST['user'];
$psw = $_POST['psw'];


$consulta = "SELECT * FROM usuarios WHERE userName='$user' and contrasena='$psw'";

$result=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($result);

$datos=$result->fetch_assoc();

if($filas>0){
    
    if($datos['rol'] == 'profesor'){
        
        $_SESSION['userName'] = $user;
        header("location: ../dashboardDocente.php");
    }
    if($datos['rol'] == 'alumno'){
        $_SESSION['userName'] = $user;
        header("location: ../dashboard.php");
    }
    if($datos['rol'] == 'admin'){
        $_SESSION['userName'] = $user;
        header("location: ../dashboardAdmin.php");
    }

    
    
    
}else{ 
    $_SESSION['mensaje']='Usuario o contraseña incorrecto';
    $_SESSION['mensaje_type']='danger';
header("location: ../index.php");
       
    
   
}

mysqli_free_result($result);
mysqli_close($conn);


?>