<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="/MedicalEnglishTest/css/select-game.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="/MedicalEnglishTest/font/font.css">
  <link rel="stylesheet" href="/MedicalEnglishTest/libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/MedicalEnglishTest/css/navigation.css">
  <link rel="stylesheet" href="/MedicalEnglishTest/css/desc.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container name-brand">
    <div class="navbar-header">
      <a href="/MedicalEnglishTest/index.php" class="navbar-brand text-success"><h3><span class="text-info">ENGLISH IN MEDICINE</span></h3></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="/MedicalEnglishTest/index.php"><h3><span class="text-primary">Home</span></h1></a></li>
        <li><a href="/MedicalEnglishTest/sections.php"><h3><span class="text-primary">Sections</span></h1></a></li>
        <li><a href="/MedicalEnglishTest/vocabulary.php"><h3><span class="text-primary">Vocabluary</span></h1></a></li>
      </ul>
      <div class="log-in-nav">
        <a>
          <span class="fa fa-address-book fa-3x cursor-pointer" data-toggle="modal" data-target="#modal-window-auth"></span>
        </a>
        <input type="text" class="btn btn-primary">
        <a>
          <span class="fa fa-address-book-o fa-3x fa-flip-horizontal cursor-pointer" data-toggle="modal" data-target="#modal-window-reg"></span>
        </a>
      </div>
    </div>
  </div>
</nav>
<?php require_once __DIR__."/../../functions/outputGame.php"; outputGame('body_parts', 3, 'game_4i_4w'); ?>
<button class="btn btn-warning btn-lg btn-block FW-FW-right btn-check" id="check"><span class="fa fa-check-circle"></span> Check</button>
<?php require("../../parts/link-bottom.php"); ?>
<script type="text/javascript" src="/MedicalEnglishTest/js/FI-FW.js"></script>
</body>
</html>
