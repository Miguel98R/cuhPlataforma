<?php include "components/head.php";?>
<body>

    <a class="d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks" href="#cabeza"> <img title="Ir al inicio"
            style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/top.png"></a>

    <header id="cabeza">
     <?php inlclude "components/nav.php" ?>
        
      <div class="container-fluid cabeza">
            <div class="container-fluid ">
                <h2 class="text-white font-weight-bolder text-center justify-content-center align-content-center py-5"
                    style=" font-size:50px;"><img src="./img/LOGO-CUH.png" alt="" srcset="" width="100" height="100">&nbsp;Plataforma CUH
                </h2>
                <?php
 	                include("util/conexion.php");
 	                $user = $_SESSION['userName'];

 	                if (!isset($user)) {
 		                header("location: index.php");
 	                }
                    ?>
                <h4 class="text-white font-weight-bolder text-center justify-content-center align-content-center ">
                    Bienvenido de nuevo

                    <?php 
                   
                // session_destroy();
                ?>
            </div>
        </div>
    </header>

    <?php include("components/gestionAlumnos.php");?>
    <?php include("components/gestionDocentes.php"); ?>
    <?php include("components/gestionMaterias.php"); ?>


    <?php include("components/footer.php");?>
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