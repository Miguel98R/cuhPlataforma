<?php include "components/head.php";?>


<body>

    <a class="d-none d-sm-none  d-md-none  d-lg-block d-xl-blocks" href="#cabeza"> <img title="Ir al inicio"
            style=" position: fixed;top: 80%;right: 1%;z-index: 100;" src="img/top.png"></a>

    <header id="cabeza">
     <?php include "components/nav.php" ?>
     <section class="py-2">
         <div class="container py-4 alert alert-danger alert-dismissible fade show" role="alert">
  <strong>AVISO!</strong> aun no se a realizado tu pago del mes : <strong>JUNIO</strong> por favor de realizarlo a la brevedad
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
     
     </section>
 
        
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
         
         $consulta ="SELECT * FROM alumnos t1 INNER JOIN usuarios t2 ON t1.id_usuario = t2.id WHERE t2.userName = '$user'";
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
                  <p class="text-white font-weight-bolder text-center justify-content-center align-content-center "> Matricula: <?php echo $datos['matricula'] ?> </p>
                    <p class="text-white font-weight-bolder text-center justify-content-center align-content-center ">  Bimestre:12</p>
             
                   

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
        role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Historial academico</a>
    </li>
     <li class="nav-item">
      <a class="nav-link text-white waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#adeudo-classic-shadow"
        role="tab" aria-controls="adeudo-classic-shadow" aria-selected="false">Adeudo</a>
    </li>
    
     <li class="nav-item">
      <a class="nav-link  text-white waves-light" id="servicio-tab-classic-shadow" data-toggle="tab" href="#servicio-classic-shadow"
        role="tab" aria-controls="servicio-classic-shadow" aria-selected="false">Servicio social</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link text-white waves-light" id="contact-tab-classic-shadow" data-toggle="tab" href="#contact-classic-shadow"
        role="tab" aria-controls="contact-classic-shadow" aria-selected="false">Proceso de titulación</a>
    </li>
    
  </ul>

  <div class="tab-content " id="myClassicTabContentShadow">
    <div class="tab-pane fade active show" id="profile-classic-shadow" role="tabpanel" aria-labelledby="profile-tab-classic-shadow">
     <?php  include ("components/datosPersonales.php"); ?>
   
    </div>
    <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
       <?php  include ("components/historialAcademico.php"); ?>
    </div>
    <div class="tab-pane fade text-white" id="adeudo-classic-shadow" role="tabpanel" aria-labelledby="adeudo-tab-classic-shadow">
       <h2 class="py-5 text-white">Adeudo</h2>
   <?php include "components/adeudo.php "?>
    </div>
      <div class="tab-pane fade text-white" id="servicio-classic-shadow" role="tabpanel" aria-labelledby="servicio-tab-classic-shadow">
       <h2 class="py-5 text-white">Servicio social</h2>
       <?php include "components/servicio.php" ?>
     </div>
     
    <div class="tab-pane fade text-white" id="contact-classic-shadow" role="tabpanel" aria-labelledby="contact-tab-classic-shadow">
       <h2 class="py-5 text-white">Proceso de titulación</h2>
     <?php include "components/titulacion.php" ?>
    </div>
  
    
  </div>

</div>
<!-- Classic tabs -->
        
    </section>


  </div>

</div>
        
        
        </div>


<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="MyModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
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
