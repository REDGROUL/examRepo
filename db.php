<?
$mysqli = new mysqli("localhost", "root", "", "database");

if(mysqli_connect_errno()){
    echo 'Ошибка'.mysqli_connect_errno();
}
