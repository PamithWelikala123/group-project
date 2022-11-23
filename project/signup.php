<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name=$_POST['name'];
        $password=$_POST['password'];

        if(!empty($name) && !empty($password) ){
            //save to the database
            $query = "insert into users (name,password) values('$name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }else{
            echo "please input valid info";
        }
    }

?>

<html>
    <head>
        <title>my website</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h1 id="content">this is the Signup page</h1>
        <form method="post">
            Name <input type="text" name="name"><br><br>
            Password <input type="password" name="password"><br><br>
            <input type="submit" value="Signup"><br><br>
            <a href="login.php">Login</a><br><br>
        </form>
    </body>
</html>