<?
session_start();
include "db.php";



if($_POST)
{
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $query = $mysqli->query("INSERT INTO `user`( `name`, `login`, `password`) VALUES ('$name','$login','$pass') ");

    if($query)
    {
    
        
        header("Location: http://localhost/index.php");
    }
   

   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="text" name="name"  placeholder="name">
        <input type="password" name="password" placeholder="pass">
        <input type="submit" value="go">
    </form>
</body>
</html>