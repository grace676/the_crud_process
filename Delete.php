<?php
//check if the delete button has been clicked
if (isset($_GET["u_id"])){
    //receive id from tge url
    $userId=$_GET["u_id"];
    //connect to the db to connect
    require_once "db_connection.php";
    //creat a delete query
    $deleteQuery="DELETE FROM `users` WHERE id='$userId'";
    //use the mysqli query to execute
    $delete=mysqli_query($connection,$deleteQuery);
    //check if the deletion is succesfull
    if (isset($delete)){
        //redirect the user back to users.php
        header("location:users.php");
    }else{
        echo"deleting failed";
    }
}
