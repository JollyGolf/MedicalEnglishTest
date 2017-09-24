<?php require "nav-link-result.php" ?>
<?php
require_once __DIR__."/../sql_connect.php";
$data = json_decode($_GET['data'], true);
$plus = 0;
$minus = 0;
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);
}
//echo"Правильно: ".$plus." Не правильно: ".$minus;
?>








<!-- ТУТ БУДЕТ ТВОЙ КОД -->









<!-- ЭТА СТРОЧКА ДОЛЖНА БЫТЬ В САМОМ КОНЦЕ -->
<?php require "result.php"; ?>