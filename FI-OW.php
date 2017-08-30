<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <?php require_once("parts/link-top.php"); ?>
  <style>
    .checkbox-FI-OW {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: white;
    }
  </style>
</head>
<body>

<?php require("parts/nav.php"); ?>
<?php require("parts/modal-authentication-window.php"); ?>
<?php require("parts/modal-registration-window.php"); ?>

<div class="container select-image-challange">
  <div class="select-image-of-four">
  	<div role="button" class="btn btn-success btn-check"><img src="image/icon1.png" alt="" class="img-responsive image">
      <input type="checkbox" class="absolute checkbox-FI-OW"></div>
  	<div role="button" class="btn btn-warning btn-check"><img src="image/icon2.png" alt="" class="img-responsive image">
      <input type="checkbox" class="absolute checkbox-FI-OW"></div>
  	<div role="button" class="btn btn-info btn-check"><img src="image/icon3.png" alt="" class="img-responsive image">
     <input type="checkbox" class="absolute checkbox-FI-OW"></div>
  	<div role="button" class="btn btn-danger btn-check"><img src="image/icon4.png" alt="" class="img-responsive image">
     <input type="checkbox" class="absolute checkbox-FI-OW"></div>
  </div>
  <br><br>
  <div class="btn btn-primary btn-lg btn-block select-word">facebook</div>
  <br><br>
  <div class="btn-check-clear center-block" style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
    <button class="btn btn-success btn-lg btn-block FW-FW-left btn-clear"><span class="fa fa-shower"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
  </div>
</div>
<br><br>
<div class="btn btn-danger btn-block disabled" style="cursor: default;"></div>
<br><br>
<button class="btn btn-warning btn-lg btn-block"><span class="fa fa-check-circle"></span> Check</button>
<?php require("parts/link-bottom.php"); ?>

<script type="text/javascript">
$('.btn-check').on('click', function() {
  $(this).closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
  $(this).find('input').prop('checked', true);
});

$('.btn-clear').on('click', function() {
  $('.btn-check').closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
});

/*
var selectedImg;
  $('div .select-image-of-four') = function(event) {
    var targetFI_OW = event.targetFI_OW;
    if (targetFI_OW.tagName != 'IMAGE') return;
    highlight(targetFI_OW);
  }
  function highlight(node) {
    if (selectedImg) {
      selectedImg.classList.remove('active');
    }
    selectedImg = node;
    selectedImg.classList.add('active');
  }
*/
</script>
</body>
</html>