<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <? require_once("parts/link-top.php"); ?>
</head>
<body>

<? require("parts/nav.php"); ?>
<? require("parts/modal-authentication-window.php"); ?>
<? require("parts/modal-registration-window.php"); ?>

<div class="container">
  <div class="choose-word-please">
  	<div role="button" class="btn btn-success center-block"><img src="image/icon2.png" class="big-image img-responsive center-block"></div>
  	<br><br>
  	<div class="btn btn-primary btn-lg btn-block select-word">Facebook</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">VKontacte</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">Twitter</div>
  	<div class="btn btn-primary btn-lg btn-block select-word">Instagram</div>
  </div>
</div>

<? require("parts/link-bottom.php"); ?>

</body>
</html>