<?php
//check if the button has been clicked
if (isset($_POST["btn-update"])){
    //receive the updated data from yhe form
    $userId=$_POST["u_id"];
    $updateName=$_POST["u_name"];
    $updateEmail=$_POST["u_email"];
    $updatePassword=$_POST["u_pass"];
    //connect to the database to return the data
    require_once "db_connection.php";
    //creat an update query
    $updateQuery="UPDATE `users` SET `jina`='$updateName',`harafa`='$updateEmail',`siri`='$updatePassword' 
WHERE id='$userId'";
    //finally execute the update query by the use of mysqli_query()
    $update=mysqli_query($connection,$updateQuery);
    //check if the update was successful
    if (isset($update)){
        //redirect the user back to users.php to see
       //the changes
    header("location:users.php");
    } else{
        echo"Updating failed";
    }


}
