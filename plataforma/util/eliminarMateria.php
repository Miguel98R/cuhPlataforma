<?php 

 include("conexion.php");
  if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      

       $consulta ="SELECT T1.id FROM usuarios T1 INNER JOIN alumnos T2 ON T1.id = T2.id_usuario WHERE T2.id='$id'";
       $result=mysqli_query($conn,$consulta);
       $datos=$result->fetch_assoc();
       $idUser=$datos['id'];
    
    
       
         $consultaBorrar="DELETE FROM alumnos WHERE id='$id'" ;
     
   
        $resultBorrar=$conn->query($consultaBorrar) or die (mysqli_error($conn));
     
  
  
        if($resultBorrar==true){
            echo'<script type="text/javascript">
            alert("Materia eliminada con exito ");
            window.location.href="../dashboardAdmin.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Materia eliminar al alumno");
                window.location.href="../dashboardAdmin.php";
                </script>';
            }
        }

?>