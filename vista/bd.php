<?php

$hostname ='localhost';
$database ='techo_chile';
$username ='root';
$password ='';

$mysqli = mysqli_connect($hostname, $username, $password, $database) or die('Error al conectar'. mysqli_errno($connect));

if($mysqli){
 
} else {

   
}

?>

<?php 
       
       $query = mysqli_query($mysqli,"SELECT * FROM region ");

    
      ?>