<div class="container">
    <div class="justify-content-center align-content-center " id="historialAcademico">
        <h2 class="py-5 text-white">Boleta de calificaciónes</h2>


        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-white">
                    Periodo Abril - Junio 2020
                </div>
                <div class="col-md-4">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Solicita tu historial academico
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">

                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                    <div class="modal-dialog modal-dialog-centered" role="document">


                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Historial academico</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere voluptate omnis doloribus dicta est suscipit at earum aliquam asperiores nostrum doloremque rem impedit voluptatum, officiis vel? Soluta nesciunt minus nam.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                                    </div>
                                </div>
                            </div>
        <table class="table table-striped">
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