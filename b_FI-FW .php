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
  <div class="FI-FW">
    <div class="FI-FW-left">
      <div role="button" class="btn btn-success"><img src="image/icon1.png" alt="" class="img-responsive image small-image"></div>
      <div role="button" class="btn btn-warning"><img src="image/icon2.png" alt="" class="img-responsive image small-image"></div>
      <div role="button" class="btn btn-info"><img src="image/icon3.png" alt="" class="img-responsive image small-image"></div>
      <div role="button" class="btn btn-danger"><img src="image/icon4.png" alt="" class="img-responsive image small-image"></div>
    </div>
    <div class="FI-FW-center">
      <span class="fa fa-code-fork fa-3x fa-pulse"></span>
    </div>
    <div class="FI-FW-right">
      <div class="btn btn-primary btn-lg btn-block select-word">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Instagram</div>
    </div>
  </div>
  <br><br><br>
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