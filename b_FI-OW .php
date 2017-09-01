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


<?php
    require_once __DIR__."/functions/outputGame.php";
    outputGame('4i_1m', 2);
?>






<?php require("parts/link-bottom.php"); ?>

<script type="text/javascript">
$('.btn-check').on('click', function() {
  $(this).closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
  $(this).find('input').prop('checked', true);
});

$('.btn-clear').on('click', function() {
  $('.btn-check').closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
});
</script>
</body>
</html>