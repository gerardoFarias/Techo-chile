<?php  
 include_once '../config/db.php';

    session_start();  
    if(isset($_SESSION)["user"])){
    header("localhost:80/Techo-chile/index.html");



}

 if(isset($_POST)["user"])&&isset($_POST["pass"]))){
     $user = mysqli_real_escape_string($_connet,$_POST["user"]);
     $pass = mysqli_real_escape_string($comnect, $_POST["pass"]);
     $sql= "SELECT user FROM usuario WHERE ($user='$user' OR email='$user') AND pass='$pass'";
     $result = mysqli_query($comnect,$sql);
     $num_row = mysqli_num_rows($result);
     if ($num_row == "1"){
        $data=sqli_fetch_array($result);
        $_SESSION['user'] = $data["user"];
     
    echo "1";
     }else{

        echo"error";
     }
 }else{
     "echo";
 }
?>  