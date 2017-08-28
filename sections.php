<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <? require_once("parts/link-top.php"); ?>
</head>
<body>

<? require("parts/nav.php"); ?>
<? require("parts/modal-authentication-window.php"); ?>
<? require("parts/modal-registration-window.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="select-all-game">

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" data-toggle="modal" data-target="#modal-choose-type-test">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
  	            <div class="background-circle">
  	              <span class="fa fa-user fa-3x icon-game"></span>
                </div>
  	            <div class="name-game">
  	              <span class="big-letter-name">Person's</span>
  	              <span class="small-letter-name">Appearance</span>
  	            </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Appearance this is person's face, his figure, clothing, a set of characteristic features of his appearance.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');"  data-toggle="modal" data-target="#modal-choose-type-test">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
  	            <div class="background-circle">
  	              <span class="fa fa-universal-access fa-3x icon-game"></span>
                </div>
  	            <div class="name-game">
  	              <span class="big-letter-name">Body</span>
  	              <span class="small-letter-name">Parts</span>
  	            </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Arm, eye, eyebrow, belly, leg, breast, thumb, elbow, fist, finger.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" data-toggle="modal" data-target="#modal-choose-type-test">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
  	            <div class="background-circle">
  	              <span class="fa fa-heartbeat fa-3x icon-game"></span>
                </div>
  	            <div class="name-game">
  	              <span class="big-letter-name">Human</span>
  	              <span class="small-letter-name">Anatomy</span>
  	            </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Skeletal System, Muscular System, Cardiovascular System, Digestive System, Endocrine System, Integumentary System.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" id="dialog-game" onclick="open_dialog_section()">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
                <div class="background-circle">
                  <span class="fa fa-users fa-3x icon-game"></span>
                </div>
                <div class="name-game">
                  <span class="big-letter-name">Dialog</span>
                  <span class="small-letter-name">Game</span>
                </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Read the dialog several times, and then insert the missing words.</span>
              </div>
            </div>
          </div>
        </div>

        <div class="flip-container" ontouchstart="this.classList.toggle(\'hover\');" id="dialog-game" onclick="open_missing_letter()">
          <div class="flipper">
            <div class="front">
              <div class="one-game" id="id-game-1">
                <div class="background-circle">
                  <span class="fa fa-chain-broken fa-3x icon-game"></span>
                </div>
                <div class="name-game">
                  <span class="big-letter-name">Missing</span>
                  <span class="small-letter-name">Letter</span>
                </div>
              </div>
            </div>
            <div class="back">
              <div class="flip-one-game">
                <span class="small-letter-name center-block padding-left-right">Read the dialog several times, and then insert the missing words.</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>




<? require("parts/modal-type-test.php"); ?>
<script src="js/link-next.js"></script>
<? require("parts/link-bottom.php"); ?>
<script src="js/modal-window.js"></script>


</body>
</html>