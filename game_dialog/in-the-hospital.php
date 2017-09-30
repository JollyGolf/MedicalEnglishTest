<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="/medicalenglishtest/css/select-game.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="/medicalenglishtest/font/font.css">
  <link rel="stylesheet" href="/medicalenglishtest/libs/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/medicalenglishtest/css/navigation.css">
  <link rel="stylesheet" href="/medicalenglishtest/css/desc.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container name-brand">
  	<div class="navbar-header">
  	  <a href="/medicalenglishtest/index.php" class="navbar-brand text-success"><h3><span class="text-info">ENGLISH IN MEDICINE</span></h3></a>
  	</div>
  	<div>
  	  <ul class="nav navbar-nav">
  	  	<li><a href="/medicalenglishtest/index.php"><h3><span class="text-primary">Home</span></h1></a></li>
  	  	<li><a href="/medicalenglishtest/sections.php"><h3><span class="text-primary">Sections</span></h1></a></li>
  	  	<li><a href="/medicalenglishtest/vocabulary.php"><h3><span class="text-primary">Vocabluary</span></h1></a></li>
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

<?php require("../parts/modal-authentication-window.php"); ?>
<?php require("../parts/modal-registration-window.php"); ?>

                    
<div class="container title-form-input" id="full-dialog">
  <div class="panel panel-primary">
    <div class="panel-heading">Read the Dialog several times</div>
      <?php require_once "../functions/outputDialog.php"; outputDialog("In the hospital"); ?>
	<div class="panel-footer">
	  <div class="progress">
	  	<div class="progress-bar progress-bar-info progress-bar-striped active" role="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
	  	</div>
	  </div>
	  <div class="btn btn-info center-block check-button-click" role="button"><!-- onclick="open_dialog_section_s()" --><span class="fa fa-check-circle fa-2x"></span></div>
	</div>
  </div>
</div>
<!--<script type="text/javascript">function open_dialog_section_s(){ window.location = '../dialog-section.php'; }</script> -->
<script src="/medicalenglishtest/js/link-next.js"></script>
<?php require("../parts/link-bottom.php"); ?>
<script src="/medicalenglishtest/js/dialog-game.js"></script>
<script src="/medicalenglishtest/js/modal-window.js"></script>
</body>
</html>