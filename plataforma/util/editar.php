<?php
    include("conexion.php");
    
    if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      $tabla=$_GET['tabla'];

        $nombre = $_POST['nombre'];
        $app = $_POST['apellido_p'];
        $apm = $_POST['apellido_m'];
        $edad = $_POST['edad'];
        $domicilio = $_POST['domicilio'];
        $status=$_POST['status']; 
        if($status=="Baja" || $status=="baja" || $status=="BAJA"){
            $status=0;
        }
        if($status=="Activo" || $status=="activo" || $status=="ACTIVO"){
            $status=1;
        }
        
        if($tabla=="alumnos"){
            $grupo = $_POST['grupo'];
             $consulta ="UPDATE $tabla SET nombre = '$nombre', apellido_p= '$app',apellido_m='$apm',edad='$edad',domicilio='$domicilio',id_grupo='$grupo',status_alumno='$status' WHERE id = '$id';";
     
        }
         if($tabla=="docentes"){
               $consulta ="UPDATE $tabla SET nombre = '$nombre', apellido_p= '$app',apellido_m='$apm',edad='$edad',domicilio='$domicilio',status_docente='$status' WHERE id = '$id';";
           
        }
        
       
      
    
      $result = $conn->query($consulta) or die($conn->error);
 
      if($result==true){
            echo'<script type="text/javascript">
            alert("Actualizado con exito ");
            window.location.href="../dashboardAdmin.php";
            </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Error al actualizar");
                window.location.href="../dashboardAdmin.php";
                </script>';
            }
    }
    
  
           

?>