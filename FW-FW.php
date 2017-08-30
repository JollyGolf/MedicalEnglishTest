<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php require_once("parts/link-top.php"); ?>
  <style>
    .checkbox-FI-FW {
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: white;
      float: left;
    }
  </style>
</head>
<body>

<?php require("parts/nav.php"); ?>
<?php require("parts/modal-authentication-window.php"); ?>
<?php require("parts/modal-registration-window.php"); ?>

<div class="container">
  <div class="FW-FW">
    <div class="FW-FW-left" id="collapse-group">
      <div class="btn btn-primary btn-lg btn-block select-word left" id="1">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word left" id="3">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word left" id="5">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word left" id="7">Instagram</div>
    </div>
    <div class="FW-FW-center">
      <span class="fa fa-code-fork fa-3x fa-pulse"></span>
    </div>
    <div class="FW-FW-right">
      <div class="btn btn-primary btn-lg btn-block select-word right" id="2">Facebook</div>
      <div class="btn btn-primary btn-lg btn-block select-word right" id="4">VKontacte</div>
      <div class="btn btn-primary btn-lg btn-block select-word right" id="6">Twitter</div>
      <div class="btn btn-primary btn-lg btn-block select-word right" id="8">Instagram</div>
    </div>
  </div><br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block center-block"><span class="fa fa-shower"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
  </div>
</div>



<br><br>
<div class="btn btn-danger btn-block disabled" style="cursor: default;"></div>
<br><br>

<button class="btn btn-warning btn-lg btn-block FW-FW-right"><span class="fa fa-check-circle"></span> Check</button>

<?php require("parts/link-bottom.php"); ?>

<script type="text/javascript">
$('.left').on('click', function(){
  $('.left:not(this)').addClass('disabled').css({cursor: 'pointer'});;
  $(this).removeClass('disabled');
  $('.right').on('click', function(){
    
  });
});

</script>
</body>
</html>