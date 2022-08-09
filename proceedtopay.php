<?php
@session_start();
if(isset($_SESSION['USERMAIL'])){
    header("Location:billingaddress.php");
}else{
    header("Location:userlogin.php");
}