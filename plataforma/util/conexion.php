<?php 

if(!isset($_SESSION)){
    session_start();
}


$conn = new mysqli('localhost','root','','materias');
//$conn = new mysqli('localhost','id14131507_root','af9i8qwjb}4yfcVz','id14131507_materias');


// if(isset($conn)){
//     echo "Conexion exitosa";
// }else{
//     echo "Problemas al realizar conexion con la base de datos";
// } 
 


?>