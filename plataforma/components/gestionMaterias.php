<div class="container" id="materias">
    <div class="py-3">
        <h2>Materias</h2>
        <h5>Escoge una opción:</h5>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <button type="button" class="btn btn-warning my-3" data-toggle="modal"
                data-target="#exampleModalCenterNuevo3">
                Agregar nueva materia
            </button>
            <form action="util/materias.php" method="post">
                <!-- Modal -->
                <div class=" modal fade bd-example-modal-xl" id="exampleModalCenterNuevo3" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class=" modal-xl modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Registro: Nueva materia</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-primary">
                                <h5 class="text-white py-3">Completa el siguiente formulario, con la información
                                    solicitada.
                                </h5>
                                <div class="row container-fluid py-3">
                                    <div class="col-md-12">
                                        <input class="inputDato" type="text" name="nombreMateria" id="nombreMateria"
                                            placeholder="Nombre de la materia">
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        <div class="col-md-4 ">
            <button type="button" class="btn btn-primary my-3" data-toggle="modal"
                data-target="#exampleModalCenterAsignar">
                Asignar materia
            </button>
            <form action="util/asignarMaterias.php" method="post">
                <!-- Modal -->
                <div class=" modal fade bd-example-modal-xl" id="exampleModalCenterAsignar" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class=" modal-xl modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Asignar materias</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-primary">
                                <h5 class="text-white py-3">Completa el siguiente formulario, con la información
                                    solicitada.
                                </h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <p class="text-white font-weight-bold">Docente</p>
                                        </div>
                                        <div>
                                            <select class="inputDato" name=" docente" id="docente">
                                                <option value="0">Seleciona:</option>
                                                <?php 
                                                include("./util/conexion.php");
                                                  $consulta ="SELECT * FROM docentes ";
                                                  $result=mysqli_query($conn,$consulta);
                                                  while($datos=$result->fetch_assoc()){
                                                      $texto_completo = $datos['nombre'] ." ". $datos['apellido_p']." ". $datos['apellido_m'];
                                                      
                                                    echo '<option  value="'.$datos['id'].'">'.$texto_completo.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-white font-weight-bold">Grupo</p>
                                        <div>
                                            <select class="inputDato" name=" grupo" id="grupo">
                                                <option value="0">Seleciona:</option>
                                                <?php 
                                                
                                                
                                                 $consulta ="SELECT * FROM grupo ";
                                                  $result=mysqli_query($conn,$consulta);
                                                  while($datos=$result->fetch_assoc()){
                                                    echo '<option  value="'.$datos['id'].'">'.$datos['nombre_grupo'].'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-white font-weight-bold">Materia</p>
                                        <div>
                                            <select class="inputDato" name=" materia" id="materia">
                                                <option value="0">Seleciona:</option>
                                                <?php 
                                                
                                                $consulta ="SELECT * FROM materias ";
                                                  $result=mysqli_query($conn,$consulta);
                                                  while($datos=$result->fetch_assoc()){
                                                    echo '<option  value="'.$datos['id'].'">'.$datos['nombre_materia'].'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-4 ">

        </div>



    </div>
</div>