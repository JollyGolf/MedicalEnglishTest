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

<div id="carousel" class="carousel slide empty-carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide="0" class="active"></li>
    <li data-target="#carousel" data-slide="1"></li>
    <li data-target="#carousel" data-slide="2"></li>
  </ol>
  <div class="carousel-inner">
    
    <div class="item active">
      <img src="image/carousel_111.jpg" alt="">
      <div class="carousel-caption flex-carousel">
        <h1 class="h1-carousel">Learning English in medicine while playing is easy
          <span class="fa fa-wheelchair-alt color-blue fa-spin"></span>
        </h1>
      </div>
    </div>
    <div class="item">
      <img src="image/carousel_222.jpg" alt="">
      <div class="carousel-caption flex-carousel">
        <h1 class="h1-carousel">A wide selection of games for learning English
          <span class="fa fa-gamepad color-dark-blue fa-spin"></span>
        </h1>
      </div>
    </div>
    <div class="item">
      <img src="image/carousel_333.jpg" alt="">
      <div class="carousel-caption flex-carousel">
        <h1 class="h1-carousel">A vocabulary that can be viewed at any time
          <span class="fa fa-book color-orange fa-spin"></span>
        </h1>
      </div>
    </div>
  </div>
  <a href="#carousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a href="#carousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<?php require("parts/link-bottom.php"); ?>
<script src="js/carousel.js"></script>
</body>
</html>