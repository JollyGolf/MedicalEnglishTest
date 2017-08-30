<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli('localhost', 'root', 'root', 'MedicalEnglish');
    if($mysqli->connect_errno)
    {
        echo"Connection DataBase error : ".$mysqli->connect_error."\r\n";
        exit;
    }
    $mysqli->query("SET NAMES 'utf-8_general_ci'");
}
function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

?>