<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <? require("parts/link-top.php"); ?>
</head>
<body>

<? require("parts/nav.php"); ?>
<? require("parts/modal-authentication-window.php"); ?>
<? require("parts/modal-registration-window.php"); ?>

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
</div>

<? require("parts/link-bottom.php"); ?>
</body>
</html>