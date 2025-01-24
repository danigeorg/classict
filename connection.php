<?php
 $hostname='localhost';
 $username='root';
 $password='';
 $database='signup';

 $con=mysqli_connect($hostname,$username,$password,$database);

 if($con){
    echo "connection ready";

 }
 else{
    die(mysqli_error($con));
 }

?>