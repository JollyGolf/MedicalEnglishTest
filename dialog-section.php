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
  <div class="row">
    <div class="col-md-12">
      <div class="select-all-game">

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" onclick="open_dialog_game()">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
                <div class="background-circle">
                  <span class="fa fa-user-md fa-3x icon-game"></span>
                </div>
                <div class="name-game">
                  <span class="big-letter-name">In the HOSPITAL</span>

                </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Read the dialogue several times until the time runs out, and insert the missed words.</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="js/link-next.js"></script>
<?php require("parts/link-bottom.php"); ?>
<script src="js/modal-window.js"></script>
</body>
</html>                    