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
  <div class="FW-FW">
    <div class="FW-FW-left">
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-1">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-2">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-3">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-4">Instagram</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-5">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-6">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-7">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word dis" id="fw-id-8">Instagram</div>
    </div>
    <div class="FW-FW-center">
      <span class="fa fa-code-fork fa-3x fa-pulse"></span>
    </div>
    <div class="FW-FW-right">
      <div class="btn btn-primary btn-lg btn-block select-word">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Instagram</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word">Instagram</div>
    </div>
  </div><br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block FW-FW-left"><span class="fa fa-shower"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-warning btn-lg btn-block FW-FW-right"><span class="fa fa-check-circle"></span> Check</button>
  </div>
</div>


<?php require("parts/link-bottom.php"); ?>
</body>
</html>