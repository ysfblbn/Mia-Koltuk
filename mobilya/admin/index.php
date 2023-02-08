<?php 

if ($_SESSION==false) {
    header("Location:template/login.php");
}else{
    header("Location:template/index.php");
}




?>