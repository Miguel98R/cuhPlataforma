  <?php
 
 include("conexion.php");
        if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      

       $consulta ="SELECT T1.id FROM usuarios T1 INNER JOIN docentes T2 ON T1.id = T2.id_usuario WHERE T2.id='$id'";
       $result=mysqli_query($conn,$consulta);
       $datos=$result->fetch_assoc();
       $idUser=$datos['id'];
    
         $consultaBorrar="DELETE FROM docentes WHERE id='$id'" ;
         $consultaBorrar2="DELETE FROM usuarios WHERE id='$idUser'";
        $resultBorrar=$conn->query($consultaBorrar) or die (mysqli_error($conn));
        $resultBorrar2=$conn->query($consultaBorrar2) or die (mysqli_error($conn));
  
  
        if($resultBorrar==true){
            echo'<script type="text/javascript">
            alert("docente eliminado con exito ");
            window.location.href="../dashboardAdmin.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("No se pudo eliminar al docente");
                window.location.href="../dashboardAdmin.php";
                </script>';
            }
        }
  
  ?>