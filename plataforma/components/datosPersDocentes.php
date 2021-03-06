<div class="container">
    <div class="" id="datosPersonales">

        <h2 class="py-5">Datos personales</h2>


        <table class="table table-responsive ">
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


            <tbody>
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

        <p class="text-center text-info py-4 ">Nota: Si alguno de tus datos es incorrecto por favor comunicalo con tu
            cordinador
            para
            realizar la
            actualización de tus datos</p>
    </div>

</div>