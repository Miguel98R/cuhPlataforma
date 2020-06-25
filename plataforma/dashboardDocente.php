<?php include "components/head.php";?>
<body>

    <a class="d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks" href="#cabeza"> <img title="Ir al inicio"
            style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/top.png"></a>

    <header id="cabeza">
     <?php include "components/nav.php" ?>
        
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

                <div class="container">
                
                  
                
                     <h4 class="text-white font-weight-bolder text-center justify-content-center align-content-center ">
                         <img src="img/perfil.JPG" width="130" height="170" > 
                      Bienvenido(a):
                    <?php echo $texto_completo ?> 
                   
                  </h4>
                  <p class="text-white font-weight-bolder text-center justify-content-center align-content-center "> Matricula: 55567CUH</p>
                
                  
                  </div>
                 

                </div>
               
                
              
                
                <?php }
                 
                 mysqli_free_result($result);
                 mysqli_close($conn);
                // session_destroy();
                ?>



            </div>


        </div>

    </header>

        <div class="container">

       <div class="container-fluid">
  <div class=" contenedor text-center">
      
   
      
    <section class="py-2 px-2">

    <!-- Classic tabs -->
<div class="classic-tabs  mx-2">

  <ul class="nav tabs-cyan  text-white" id="myClassicTabShadow" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-white waves-light active show" id="profile-tab-classic-shadow" data-toggle="tab" href="#profile-classic-shadow"
        role="tab" aria-controls="profile-classic-shadow" aria-selected="true">Datos personales</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow"
        role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Materias asignadas</a>
    </li>
     <li class="nav-item">
      <a class="nav-link text-white waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#adeudo-classic-shadow"
        role="tab" aria-controls="adeudo-classic-shadow" aria-selected="false">Alta de calificaciones</a>
    </li>
    
    
    
  
    
  </ul>

  <div class="tab-content " id="myClassicTabContentShadow">
    <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
     <?php  include ("components/datosPersDocentes.php"); ?>
   
    </div>
    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
       <?php  include ("components/materiasAsignadas.php"); ?>
    </div>
    <div class="tab-pane fade text-white" id="adeudo-classic-shadow" role="tabpanel" aria-labelledby="adeudo-tab-classic-shadow">
 
   <?php include "components/subirCalificaciones.php "?>
    </div>
     
  
    
  </div>

</div>
<!-- Classic tabs -->
        
    </section>


  </div>

</div>
        
        
        </div>



   

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
