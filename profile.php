<?
session_start();

include 'db.php';
//var_dump($_SESSION);
$auth = $_SESSION['auth'];
if($auth)
{
    //echo 'hello '.$_SESSION['name'];
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
    <?
        $query = $mysqli->query("SELECT * FROM `store`");

        if($query)
        {
           

            
        }

     // var_dump($result);

      while ($row = $query->fetch_assoc()) {
       echo $row['name'];
    }
    ?>

    <div class="pel">
        
    </div>
</body>
</html>