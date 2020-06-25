
<div class="container">
    <div class="justify-content-center align-content-center " id="historialAcademico">
        <h2 class="py-5 text-white">Calificaciones </h2>
        <table class="table table-striped">
        <div class="row">
           <div class="col-md-4"></h4></div>
            <div class="col-md-4"> <h4 class="text-info">PERIODO ABRIL - JUNIO 2020 </h4></div>
             <div class="col-md-4"> <button class="btn btn-primary">Solicita tu historial academico</button></div>
        </div>
       
            <thead class="cabeza text-white ">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Docente</th>


                </tr>
            </thead>

            <?php 
            include ("./util/conexion.php");
            $consulta ="SELECT T1.calificacion,T3.nombre,T3.apellido_p,T3.apellido_m,T4.nombre_materia
FROM historialacademico T1
INNER JOIN alumnos T2
ON T1.id_alumno = T2.id INNER JOIN docentes T3 ON T1.id_docente= T3.id INNER JOIN materias T4 ON T1.id_materia = T4.id INNER JOIN usuarios T6 ON T2.id_usuario = T6.id WHERE T6.userName = '$user';";
         $result=mysqli_query($conn,$consulta);
        while($datos=$result->fetch_assoc()){
        
            
        ?>

            <tbody class=" text-white">
                <tr>
                    <th scope="row"></th>
                    <td> <?php echo $datos['calificacion'];?> </td>
                    <td> <?php echo $datos['nombre_materia'];?> </td>
                    <td> <?php echo $datos['nombre']." ".$datos['apellido_p']." ". $datos['apellido_m']?> </td>



                </tr>

            </tbody>
            <?php } mysqli_free_result($result);
                 mysqli_close($conn);?>
        </table>


    </div>













</div>