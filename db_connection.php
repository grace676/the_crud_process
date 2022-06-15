<?php
$host="localhost";
$user="root";
$password="";
$dbname="LUBINU_DB";
//now connect
$connection=mysqli_connect($host,$user,$password,$dbname);
//check if the connection FAILED so that you can STOP any
//further operations
if (!isset($connection)){
    die("DB connection failed");

}
