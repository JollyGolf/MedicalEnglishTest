<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
 <?php require_once("parts/link-top.php"); ?>
</head>
<body>

<?php require("parts/nav.php"); ?>
<?php require("parts/modal-authentication-window.php"); ?>
<?php require("parts/modal-registration-window.php"); ?>

<?php
require_once __DIR__."/functions/sql_connect.php";
global $mysqli;
connectDB();
$answer = $mysqli->query("SELECT * FROM game_4img_1w");
while(($row = $answer->fetch_assoc()) != false )
{
    $data[] = $row;
}
var_dump($data);
?>

<div class="container select-image-challange">
  <div class="select-image-of-four">
  	<div role="button" class="btn btn-success"><img src="image/icon1.png" alt="" class="img-responsive image active"></div>
  	<div role="button" class="btn btn-warning"><img src="image/icon2.png" alt="" class="img-responsive image"></div>
  	<div role="button" class="btn btn-info"><img src="image/icon3.png" alt="" class="img-responsive image"></div>
  	<div role="button" class="btn btn-danger"><img src="image/icon4.png" alt="" class="img-responsive image"></div>
  </div>
  <br><br>
  <div class="btn btn-primary btn-lg btn-block select-word">facebook</div>
  <br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block FW-FW-left"><span class="fa fa-shower"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-warning btn-lg btn-block FW-FW-right"><span class="fa fa-check-circle"></span> Check</button>
  </div>
</div>
<br><br>
<div class="btn btn-danger btn-block disabled" style="cursor: default;"></div>
<br><br>
<?php require("parts/link-bottom.php"); ?>
</body>
</html>