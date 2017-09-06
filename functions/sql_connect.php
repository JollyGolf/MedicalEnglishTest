<?php
$mysqli = false;
function connectDB()
{
    global $mysqli;
    $mysqli = new mysqli('localhost', 'root', '', 'MedicalEnglish');
    if($mysqli->connect_errno)
    {
        echo"Connection DataBase error : ".$mysqli->connect_error."\r\n";
        exit;
    }
    else{
        mysqli_set_charset($mysqli, "utf8");
        return 1;
    }

}
function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

?>