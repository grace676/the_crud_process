<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-info text-center">All Users</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //connect to the database to fetch data
    require_once "db_connection.php";
    //prepare the select query
    $selectQuery="SELECT * FROM `users` WHERE 1";
    //finally select the user by the use of the my_mysql(query)
    $users=mysqli_query($connection,$selectQuery);
    //use a loop to display
    foreach ($users as $user){$name=$user["jina"];
        $email=$user["harafa"];
        $password=$user["siri"];
        $id=$user["id"];
        echo "<tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td class=' btn-danger'><a href='Del
                       ete.php?u_id=$id'>Delete</a></td>
                        <td class=' btn-info'><a href='update.php?u_id=$id&u_name=$name&u_mail=$email&u_pass=$password
                        '>Update</a></td>
            <tr/>";
   }
    ?>
</table>
</body>
</html>
