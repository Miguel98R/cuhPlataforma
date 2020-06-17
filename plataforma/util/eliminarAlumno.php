<?php 

 include("conexion.php");
  if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      

       $consulta ="SELECT T1.id FROM usuarios T1 INNER JOIN alumnos T2 ON T1.id = T2.id_usuario WHERE T2.id='$id'";
       $result=mysqli_query($conn,$consulta);
       $datos=$result->fetch_assoc();
       $idUser=$datos['id'];
    
    
       $consultaBorrar3="DELETE FROM historialacademico WHERE id_alumno='$id'";
         $consultaBorrar="DELETE FROM alumnos WHERE id='$id'" ;
         $consultaBorrar2="DELETE FROM usuarios WHERE id='$idUser'";
        
         $resultBorrar3=$conn->query($consultaBorrar3) or die (mysqli_error($conn));
        $resultBorrar=$conn->query($consultaBorrar) or die (mysqli_error($conn));
        $resultBorrar2=$conn->query($consultaBorrar2) or die (mysqli_error($conn));
          
  
  
        if($resultBorrar==true){
            echo'<script type="text/javascript">
            alert("Alumno eliminado con exito ");
            window.location.href="../dashboardAdmin.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("No se pudo eliminar al alumno");
                window.location.href="../dashboardAdmin.php";
                </script>';
            }
        }

?>