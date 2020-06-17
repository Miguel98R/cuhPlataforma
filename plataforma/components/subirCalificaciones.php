<div class="container">
    <div class="" id="subirCalificaciones">

        <h2 class="py-4">Subir Calificaciones</h2>

        <h5 class="py-2">Completa la siguiente información</h5>
        <table class="table table-responsive ">
            <thead class="cabeza text-white ">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Nombre del alumno</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Calificacion</th>

                    <th scope="col"></th>
                </tr>
            </thead>



            <tbody>
                <form action="util/insertarCalificacion.php" method="POST">
                    <tr>
                        <th scope="row"></th>
                        <td>
                            <select id="grupo" class="inputDato" name="grupo">
                                <option>Seleccione:</option>
                                <?php
                                include ("./util/conexion.php");
                               $consulta ="SELECT T3.id,T3.nombre_grupo FROM materias_asignada T1 INNER JOIN docentes T2 ON T1.id_docente=T2.id INNER JOIN grupo T3 ON T1.id_grupo=T3.id INNER JOIN materias T4 ON T1.id_materia=T4.id INNER JOIN usuarios T5 ON T2.id_usuario = T5.id WHERE T5.userName = '$user';";
         
                               
                                 
                                 $result=mysqli_query($conn,$consulta);
                            
                                 while($datos=$result->fetch_assoc()){
                                echo  '<option  value="'.$datos['id'].'">'.$datos['nombre_grupo'].'</option>';
                                }
                            ?>
                            </select>

                        </td>

                        <td>
                            <select id="alumno" class="inputDato" name="alumno">
                                <option>Seleccione:</option>
                                <?php
                              
                                 $consulta ="SELECT id,nombre,apellido_p,apellido_m FROM alumnos ";

                                 
                                 
                                 $result=mysqli_query($conn,$consulta);

                                
                              
                                 while($datos=$result->fetch_assoc()){
                                    $nombre = $datos['nombre'] ." ". $datos['apellido_p'] ." ". $datos['apellido_m'];
                                    
                                echo '<option  value="'.$datos['id'].'">'.$nombre.'</option>';
                                }
                            ?>

                            </select>

                        </td>
                        <td>
                            <select id="materia" class="inputDato" name="materia">
                                <option>Seleccione:</option>
                                <?php
                              
                             $consulta ="SELECT T4.id,T4.nombre_materia FROM materias_asignada T1 INNER JOIN docentes T2 ON T1.id_docente=T2.id INNER JOIN grupo T3 ON T1.id_grupo=T3.id INNER JOIN materias T4 ON T1.id_materia=T4.id INNER JOIN usuarios T5 ON T2.id_usuario = T5.id WHERE T5.userName = '$user';";
         
                                 
                                 $result=mysqli_query($conn,$consulta);
                              
                                 while($datos=$result->fetch_assoc()){
                                echo '<option  value="'.$datos['id'].'">'.$datos['nombre_materia'].'</option>';
                                }
                            ?>

                            </select>

                        </td>
                        <td>
                            <select id="calificacion" class="inputDato" name="calificacion">
                                <option value="0">Seleccione:</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="9">10</option>

                            </select>

                        </td>

                        <td>
                            <button class="button3" type="submit">Enviar</button>

                        </td>





                    </tr>

                </form>
            </tbody>

        </table>

    </div>

</div>