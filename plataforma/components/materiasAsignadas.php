
   <?php 
   include ("./util/conexion.php");
            $consulta ="SELECT T3.nombre_grupo,T4.nombre_materia FROM materias_asignada T1 INNER JOIN docentes T2 ON T1.id_docente=T2.id INNER JOIN grupo T3 ON T1.id_grupo=T3.id INNER JOIN materias T4 ON T1.id_materia=T4.id INNER JOIN usuarios T5 ON T2.id_usuario = T5.id WHERE T5.userName = '$user';";
          $result=mysqli_query($conn,$consulta); ?>
<div class="container">
    <div class="" id="materiasAsignadas">

        <h2 class="py-3 text-white">Materias asignadas</h2>

<div class="">

<table class="table table-striped">
            <thead class="cabeza text-white ">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Materia</th>
                    <th scope="col">Grupo</th>
                     <th scope="col">PERIODO</th>

                </tr>
            </thead>

            <?php 
         
        while($datos=$result->fetch_assoc()){
        
           
        ?>


           <tbody class="text-white">
                <tr>
                    <th scope="row"></th>
                    <td> <?php echo $datos['nombre_materia'];?> </td>
                    <td> <?php echo $datos['nombre_grupo'];?> </td>
                     <td> ABRIL - JUNIO 2020</td>



                </tr>


            </tbody>
            <?php } mysqli_free_result($result);
                 mysqli_close($conn);?>
        </table>
        </div>
    </div>

</div>