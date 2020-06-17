<?php 
include("conexion.php");

$materia = $_POST['materia'];
$docente= $_POST['docente'];
$grupo = $_POST['grupo'];


    
$consulta =  "INSERT INTO materias_asignada (id_docente,id_grupo,id_materia) VALUES ('$docente','$grupo','$materia');";

$result = $conn->query($consulta) or die (mysqli_error($conn));




if($result==true){
    echo'<script type="text/javascript">
        alert("Materia registrada con exito ");
        window.location.href="../dashboardAdmin.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("No se pudo registrar la materia");
window.location.href="../dashboardAdmin.php";
        </script>';
}

?>