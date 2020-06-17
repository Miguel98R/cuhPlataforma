<?php 
include ("conexion.php")

$id_grupo = $_POST['id_grupo'];

$consulta = "SELECT T1.id,T1.nombre,T1.apellido_p,T1.apellido_m FROM alumnos T1 INNER  JOIN grupo T2 ON T1.id_grupo=T2.id WHERE T2.id='$id_grupo'";

$result=mysqli_query($conn,$consulta);


$option='<option value="0">Seleciona:</option>';

while($datos= $result->fetch_assoc(){
    $option="<option value='".$datos['id']."'>".$datos['nombre']."</option>";
}

echo $option;
?>