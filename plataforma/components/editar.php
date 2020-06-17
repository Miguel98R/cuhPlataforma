<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b46c20e3c5.js" crossorigin="anonymous"></script>
    <title>Plataforma CUH/Dashboard</title>
</head>

<body>
    <?php
    include("../util/conexion.php");
    
    if(isset($_GET['id'])){ 
      $id=$_GET['id']; 
      $tabla=$_GET['tabla'];
      $consulta ="SELECT * FROM $tabla WHERE id='$id'";
      $result = $conn->query($consulta) or die($conn->error);
      $datos=$result->fetch_assoc();
    }
    
    if(isset($datos['status_alumno'])){
        if($datos['status_alumno'] == 1){
            $status='Activo';
            }
        if($datos['status_alumno'] == 0){
            $status='Baja';
             }   

    }                    
   
if(isset($datos['status_docente'])){
    if($datos['status_docente'] == 1){
            $status='Activo';
        }
        if($datos['status_docente'] == 0){
            $status='Baja';
        }

}
     
           

?>
    <!-- Image and text -->
    <nav class="navbar navbar-light navegacion">
        <a class="navbar-brand" href="#">
            <img src="../img/LOGO-CUH.png" width="50" height="50" class="d-inline-block align-top" alt="">
            <span class="text-white"> Calificaciones-CUH</span> </a>
    </nav>


    <div class="container py-5">
        <h4 class="bg-white font-weight-bolder">Ingresa los nuevos datos:</h4>
        <div class="py-5" style="background: rgba(1, 61, 115, 1.0);
background: -webkit-linear-gradient(top left, rgba(1, 61, 115, 1.0), rgba(90, 145, 182, 1.0));
background: -moz-linear-gradient(top left, rgba(1, 61, 115, 1.0), rgba(90, 145, 182, 1.0));
background: linear-gradient(to bottom right, rgba(1, 61, 115, 1.0), rgba(90, 145, 182, 1.0)); border-radius: 20px; ">
            <form action="../util/editar.php?tabla=<?php echo $tabla?>&id=<?php echo $datos['id']?>" method="post">
                <div>
                    <label for=" nombre " class=" px-2 text-white font-weight-bolder">Nombre:</label>
                    <input type=" text " name="nombre" id="nombre" class="inputDato "
                        value=" <?php echo $datos['nombre'];?>" placeholder=" <?php echo $datos['nombre'];?>" />
                    <label for=" apellido_p  " class=" px-2 text-white font-weight-bolder">Apellido Paterno:</label>
                    <input type=" text " name=" apellido_p" id="apellido_p " class="inputDato "
                        value=" <?php echo $datos['apellido_p'];?>" placeholder=" <?php echo $datos['apellido_p'];?>" />
                    <label for=" apellido_m " class=" px-2 text-white font-weight-bolder">Apellido Materno:</label>
                    <input type=" text " name="apellido_m" id="apellido_m " class="inputDato "
                        value=" <?php echo $datos['apellido_m'];?>" placeholder=" <?php echo $datos['apellido_m'];?>" />
                </div>
                <div>
                    <label for=" domicilio " class=" px-2 text-white font-weight-bolder">Domicilio:</label>
                    <input type=" text " name="domicilio" id="domicilio " class="inputDato w-50 "
                        value=" <?php echo $datos['domicilio'];?>" placeholder=" <?php echo $datos['domicilio'];?>" />
                    <label for=" edad  " class=" px-2 text-white font-weight-bolder">Edad:</label>
                    <input type=" text " name="edad" id="edad " class="inputDato " value=" <?php echo $datos['edad'];?>"
                        placeholder=" <?php echo $datos['edad'];?>" />

                </div>
                <div>

                    <?php
                    if($tabla=="alumnos"){
                        ?>
                    <label for=" grupo  " class=" px-2 text-white font-weight-bolder">Grupo:</label>
                    <select name="grupo" id="grupo" class="inputDato">
                        <option>Seleccione una opción:</option>
                        <?php
                              
                             $consulta ="SELECT * FROM grupo ;";
         
                                 
                                 $result=mysqli_query($conn,$consulta);
                              
                                 while($datos=$result->fetch_assoc()){
                                echo '<option  value="'.$datos['id'].'">'.$datos['nombre_grupo'].'</option>';
                                }
                            ?>

                    </select>
                    <?php    } ?>
                    <label for=" status " class=" px-2 text-white font-weight-bolder">Status:</label>
                    <input type=" text " name="status" id="status " class="inputDato " value=" <?php echo $status; ?>"
                        placeholder=" <?php echo $status?>" />

                </div>
                <div class="text-center py-2">
                    <button type="submit" class="btn btn-dark text-white">
                        Actualizar</button>
                    <a href="../dashboardAdmin.php" class="btn btn-info" role="button">Cancelar</a>
                </div>

            </form>

        </div>


    </div>

    <script src="../js/jquery-3.4.1.slim.min.js">
    </script>
    <script src="../js/popper.min.js">
    </script>
    <script src="../js/bootstrap.min.js">
    </script>
</body>

</html>