<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="../../css/select-game.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="../../font/font.css">
  <link rel="stylesheet" href="../../libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/navigation.css">
  <link rel="stylesheet" href="../../css/desc.css">
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
<!--<?php require_once __DIR__."/../../functions/outputGame.php"; outputGame('person_apperance', 3, 'game_4i_1w'); ?>
-->

<div class="container select-image-challange">
  <div class="reading on array" style="font-size: 0pt;"><span class="type"></span><span class="type-game">game_4i_1w,</span></div>
  <div class="select-image-of-four">
    <div role="button" class="one-krop one-krop-bg-red btn-check dbclick" data-id = ""><img src="../../image/person_apperance/bear.jpg" alt="" class="img-responsive image active img-res">
  </div>
  <div class="btn-block"></div>
  <input class="center-block  select-word blue-button one-button">
  <div class="btn-block"></div>
</div>
<div style="display: block; text-align: center;">
  <span class="fa fa-volume-up fa-4x cursor-pointer volume-song" style="color: blue;"></span>
</div>
<div class="space-place"></div>
<div class="btn-block btn btn-success disabled" style="cursor: default;"></div>




<button class="btn btn-warning btn-lg btn-block FW-FW-right" id="check" style="font-size: 17pt;"><span class="fa fa-check-circle"></span> Check</button>
<br>
<?php require("../../parts/link-bottom.php"); ?>
<script type="text/javascript" src="../../js/EtW.js"></script>
</body>
</html>
