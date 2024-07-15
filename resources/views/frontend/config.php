<?php
$con = new mysqli("localhost", "root", "", "website");
if($con->connect_error)
{
     die($con->connect_error);
}
else{
     echo " Connection Success<br>";
}
?>