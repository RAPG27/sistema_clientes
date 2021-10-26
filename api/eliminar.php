<?php

  $conexion = new mysqli("localhost","root","","sistema") or die("not connected".mysqli_connect_error());
  
  if (isset ($_GET['id'])) { 
  $id= $_GET['id'];
  

    $sql="DELETE FROM `clientes` WHERE `clientes`.`id` = $id;";

    $query=mysqli_query($conexion,$sql);
    if($query){
      echo"1 row delete";
    }else{
      echo mysqli_error($conexion);
    }

}

?>