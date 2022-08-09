<?php
$conn = mysqli_connect("localhost", "root","","onlineshopping");
if(!$conn){
    mysqli_error("Couldn't Connect to Database");
}