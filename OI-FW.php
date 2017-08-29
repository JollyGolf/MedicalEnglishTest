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

<div class="container">
  <div class="choose-word-please">
  	<div role="button" class="btn btn-success center-block"><img src="image/icon2.png" class="big-image img-responsive center-block"></div>
  	<br><br>
  	<div class="btn btn-primary btn-lg btn-block select-word">Facebook</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">VKontacte</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">Twitter</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">Instagram</div>
  </div>
  <br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block FW-FW-left"><span class="fa fa-shower"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-warning btn-lg btn-block FW-FW-right"><span class="fa fa-check-circle"></span> Check</button>
  </div>
</div>

<?php require("parts/link-bottom.php"); ?>

</body>
</html>