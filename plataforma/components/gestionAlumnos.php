<div class="container" id="alumnos">

    <div class="py-3">
        <h2>Alumnos</h2>
        <h5>Escoge una opción:</h5>
    </div>


    <div class=" row">

        <div class="col-md-4 ">

            <button type="button" class="btn btn-warning my-3" data-toggle="modal" data-target="#exampleModalCenterNuevo">
                Agregar nuevo alumno
            </button>
            <form action="util/alumnos.php" method="post">
                <!-- Modal -->
                <div class=" modal fade bd-example-modal-xl" id="exampleModalCenterNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class=" modal-xl modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Registro: Nuevo alumno</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-primary">
                                <h5 class="text-white py-3">Completa el siguiente formulario, con la información solicitada.
                                </h5>
                                <div class="row container-fluid py-3">
                                    <div class="col-md-4">
                                        <input class="inputDato" type="text" name="nombreAlumno" id="nombreAlumno" placeholder="Nombre(s) del alumno">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="inputDato" type="text" name="apellidoP_Alumno" id="apellidoP_Alumno" placeholder="Apellido paterno">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="inputDato" type="text" name="apellidoM_Alumno" id="apellidoM_Alumnoo" placeholder="Apellido materno">
                                    </div>


                                </div>
                                <div class="row container-fluid py-3">
                                    <div class="col-md-4">
                                        <input class="inputDato" type="text" name="edadAlumno" id="edadAlumno" placeholder="Edad del alumno">
                                    </div>
                                    <div class="col-md-4">
                                        <input class="inputDato" type="text" name="domicilioAlumno" id="domicilioAlumno" placeholder="Domicilio del alumno">
                                    </div>
                                    <div class="col-md-4">
                                        <select class="inputDato" id="grupoAlumno" name="grupoAlumno">
                                            <option>Seleccione un grupo:</option>
                                            <?php
                                            include ("./util/conexion.php"); 
                                            
                                            $consulta ="SELECT id,nombre_grupo FROM grupo ";
                                            $result=mysqli_query($conn,$consulta);
                                            
                                            while($datos=$result->fetch_assoc()){
                                            echo '<option value="'.$datos['id'].'">'.$datos['nombre_grupo'].'</option>';
                                            }

                                        ?>


                                        </select>
                                    </div>


                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" name="nuevoAlumno" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4 ">
            <button type="button" class="btn btn-danger my-3" data-toggle="modal" data-target="#exampleModalCenterEliminar">
               Consultar Alumnos
            </button>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenterEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class=" modal-lg modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Consultar alumno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="" id="datosPersonales">

                                    <h5 class="py-3">Alumnos</h5>


                                    <table class="table table-responsive ">
                                        <thead class="bg-primary text-white ">
                                            <tr>
                                                <th scope="col"></th>

                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido paterno</th>
                                                <th scope="col">Apellido materno</th>
                                                <th scope="col">Estatus</th>
                                                <th scope="col">Grupo</th>

                                                <th scope="col">Acciones &nbsp;</th>





                                            </tr>
                                        </thead>

                                        <?php 
            include ("./util/conexion.php");
            $consulta ="SELECT t1.id_usuario,t1.id,t1.nombre,t1.apellido_p,t1.apellido_m,t1.status_alumno,t3.nombre_grupo FROM alumnos t1 INNER JOIN usuarios t2 ON t1.id_usuario = t2.id INNER JOIN grupo t3 ON t1.id_grupo = t3.id";
         $result=mysqli_query($conn,$consulta);
                
    
                     while( $datos=$result->fetch_assoc()){

                         if($datos['status_alumno'] == 1){
                                $status='Activo';
                                                        }
                         if($datos['status_alumno'] == 0){
                                 $status='Baja';
                                        }                  
                                                   
                    ?>
                                        <tbody>
                                            <tr>
                                                <th scope=" row">
                                                </th>

                                                <td>
                                                    <?php echo $datos['nombre'];?> </td>
                                                <td>
                                                    <?php echo $datos['apellido_p'];?> </td>
                                                <td>
                                                    <?php echo $datos['apellido_m'];?> </td>
                                                <td>
                                                    <?php echo $status ?> </td>
                                                <td>
                                                    <?php echo $datos['nombre_grupo'];?> </td>

                                                <td>
                                                    <div class="row">
                                                        <a href="./util/eliminarAlumno.php?id=<?php echo $datos['id']?>" class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>&nbsp;
                                                        <a href="./components/editar.php?tabla=alumnos&id=<?php echo $datos['id']?>" class="btn btn-warning text-white"><i class="fas fa-edit"></i></a>


                                                    </div>
                                                </td>
                                                <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                            </tr>



                                        </tbody>

                                    </table>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


</div>