<?php
//check if the updata button has been clicked
if (isset($_GET["u_id"])){
    //receive data from the url
    $userId=$_GET["u_id"];
        $userName=$_GET["u_name"];
        $userEmail=$_GET["u_mail"];
        $userPassword=$_GET["u_pass"];
}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1 class="text-info text-center">Updating users</h1>
            <form method="post" action="update_handler.php">
                <input value="<?php echo $userId;?>" name="u_id" type="hidden">
                <input  value="<?php echo $userName;?>" class="form-control" name="u_name" placeholder="Enter name" type="text"><br>
                <input value="<?php echo $userEmail;?>" class="form-control" name="u_email" placeholder="Enter email" type="email"><br>
                <input value="<?php echo $userPassword;?>" class="form-control" name="u_pass" placeholder="Enter password" type="password"><br>
                <input  class="btn btn-outline-info btn-block" name="btn-update" value="Update" type="submit">
                <a  class="btn btn-outline-success btn-block" href="users.php">Back</a>
            </form>
        </div>
    </div>
</section>
</body>
</html>