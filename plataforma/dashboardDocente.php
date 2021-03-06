<?php include "components/head.php";?>
<body>


    <a class="d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks" href="#cabeza"> <img title="Ir al inicio"
            style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/top.png"></a>

    <header id="cabeza">
    <?php include "components/nav.php"?>
      <div class="container-fluid cabeza">
            <div class="container-fluid ">
                <h2 class="text-white font-weight-bolder text-center justify-content-center align-content-center py-5"
                    style=" font-size:50px;"><img src="./img/LOGO-CUH.png" alt="" srcset="" width="100" height="100">&nbsp;Plataforma CUH
                </h2>
                <?php
 	session_start();
 	$user = $_SESSION['userName'];

 	if (!isset($user)) {
 		header("location: index.php");
 	}else{
         include("util/conexion.php");
         
         $consulta ="SELECT * FROM docentes t1 INNER JOIN usuarios t2 ON t1.id_usuario = t2.id WHERE t2.userName = '$user'";
         $result=mysqli_query($conn,$consulta);


        $datos=$result->fetch_assoc();

        $texto_completo = $datos['nombre'] ." ". $datos['apellido_p']." ". $datos['apellido_m'];

        ?>
                <h4 class="text-white font-weight-bolder text-center justify-content-center align-content-center ">
                    Bienvenido(a):
                    <?php echo $texto_completo ?></h4>
                <?php }
                 
                 mysqli_free_result($result);
                 mysqli_close($conn);
                // session_destroy();
                ?>



            </div>


        </div>


    </header>


    <?php include ("components/datosPersDocentes.php") ;?>
    <?php include ("components/materiasAsignadas.php") ;?>
    <?php include ("components/subirCalificaciones.php") ;?>

    <?php include ("components/footer.php");?>

  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>