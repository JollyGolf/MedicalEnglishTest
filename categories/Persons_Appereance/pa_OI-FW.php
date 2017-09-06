<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="../../css/select-game.css">
  <?php require_once("../../parts/link-top.php"); ?>
  <link rel="stylesheet" href="../../font/font.css">
  <link rel="stylesheet" href="../../libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navigation.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container name-brand">
    <div class="navbar-header">
      <a href="../../index.php" class="navbar-brand text-success"><h3><span class="text-info">ENGLISH IN MEDICINE</span></h3></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li><a href="../../index.php"><h3><span class="text-primary">Home</span></h1></a></li>
        <li><a href="../../sections.php"><h3><span class="text-primary">Sections</span></h1></a></li>
        <li><a href="../../vocabulary.php"><h3><span class="text-primary">Vocabluary</span></h1></a></li>
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
<?php require("../../parts/modal-authentication-window.php"); ?>
<?php require("../../parts/modal-registration-window.php"); ?>
<?php
require_once __DIR__."/../../functions/outputGame.php";
outputGame('person_apperance', 3, 'game_1i_4w');
?>
<!--<div class="container">
  <div class="choose-word-please">
  	<div role="button" class="btn btn-success center-block"><img src="../../image/icon2.png" class="big-image img-responsive center-block"></div>
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
<br><br>
<div class="btn btn-danger btn-block disabled" style="cursor: default;"></div>
<br><br>-->
<?php require("../../parts/link-bottom.php"); ?>

</body>
</html>