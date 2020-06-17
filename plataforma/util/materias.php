<?php 

include("conexion.php");
$materia=$_POST['nombreMateria'];

    
$consulta =  "INSERT INTO materias (nombre_materia) VALUES ('$materia');";

$result = $conn->query($consulta) or die (mysqli_error($conn));



if($result==true){
    echo'<script type="text/javascript">
        alert("Materia registrado con exito ");
        window.location.href="../dashboardAdmin.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("No se pudo registrar al Materia");
window.location.href="../dashboardAdmin.php";
        </script>';
}

?>