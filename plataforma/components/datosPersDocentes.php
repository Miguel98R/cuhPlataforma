     <?php 
            include ("./util/conexion.php");
            $consulta ="SELECT t1.nombre,t1.apellido_p,t1.apellido_m,t1.edad,t1.domicilio,t1.status_docente FROM docentes t1 INNER JOIN usuarios t2 ON t1.id_usuario = t2.id   WHERE t2.userName = '$user';";
         $result=mysqli_query($conn,$consulta);
         
        $datos=$result->fetch_assoc();
        
        if($datos['status_docente'] == 1){
            $status='Activo';
        }
        if($datos['status_docente'] == 0){
            $status='Baja';
        }
            
       
            
        ?>
<div class="container">

    <div class="" id="datosPersonales">

       <h2 class="py-3 text-white">Datos personales</h2>


<div class="">

    <table class="table table-striped">
            <thead class="cabeza text-white ">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Estatus</th>




                </tr>
            </thead>

       


            <tbody class="text-white">
                <tr>
                    <th scope="row"></th>
                    <td> <?php echo $datos['nombre'];?> </td>
                    <td> <?php echo $datos['apellido_p'];?> </td>
                    <td> <?php echo $datos['apellido_m'];?> </td>
                    <td> <?php echo $datos['edad'];?> </td>
                    <td> <?php echo $datos['domicilio'];?> </td>
                    <td> <?php echo $status ?> </td>


                </tr>


            </tbody>
            <?php  mysqli_free_result($result);
                 mysqli_close($conn);?>
        </table>

    </div>

     
    </div>

</div>