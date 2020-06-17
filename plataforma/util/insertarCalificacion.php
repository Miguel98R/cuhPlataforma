<?php 
include("conexion.php");


if (isset($_SESSION['userName'])){
    $user = $_SESSION['userName'];
}

$grupo = $_POST['grupo'];
$alumno = $_POST['alumno'];
$materia = $_POST['materia'];
$calificacion = $_POST['calificacion'];


$consulta = "SELECT T1.id FROM docentes T1 INNER JOIN usuarios T2 ON T1.id_usuario=T2.id WHERE T2.userName='$user';";
$result = $conn->query($consulta) or die (mysqli_error($conn));

$datos=$result->fetch_assoc();

$id=$datos['id'];

$insertar = "INSERT INTO historialacademico (calificacion,id_alumno,id_materia,id_docente) VALUES ('$calificacion','$alumno','$materia','$id');";
$result = $conn->query($insertar) or die (mysqli_error($conn));

if($result==true){
    echo'<script type="text/javascript">
        alert("Calificacion registrada con exito");
        window.location.href="../dashboardDocente.php";
        </script>';
}else{
    echo'<script type="text/javascript">
        alert("No se pudo registrar la calificacion");
window.location.href="../dashboardDocente.php";
        </script>';
}

?>