<?

include "db.php";



if($_POST)
{
    $login = $_POST['login'];
    $pass = $_POST['password'];
    $query = $mysqli->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password`= '$pass'");

    $result = mysqli_fetch_assoc($query);
    if($result['id'])
    {
        session_start();

        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['auth'] = 1;
    


    }
   

   header('Location: profile.php');
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
        <input type="text" name="login" >
        <input type="password" name="password">
        <input type="submit" value="">
    </form>
</body>
</html>