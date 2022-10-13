<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "pesu_array_operation";
$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo"";

    }
else
{
    die("not connected".mysqli_connect_error());
}
    
    ?>
