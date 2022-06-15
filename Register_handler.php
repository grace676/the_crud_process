<?php
//check if the button has been clicked
if (isset($_POST["btn-reg"])) {
//start receiving data from the form
    $name = $_POST["u_name"];
    $email = $_POST["u_email"];
    $pass = $_POST["u_pass"];
//now,connect to the database to save the data
    require_once "db_connection.php";
    //creat an insert query to save the data
    $insertQuery="INSERT INTO `users`(`id`, `jina`, `harafa`, `siri`) VALUES (null,'$name','$email','$pass')";
    //finally, save the data by use of mysqli_query()
    $save=mysqli_query($connection,$insertQuery);
    //check if the saving was succesful
    if (isset($save)){
        echo"user registered successfully";
    }else{
        echo"user regisration failed";
    }
}