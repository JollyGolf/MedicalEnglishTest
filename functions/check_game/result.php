
<div class="result-number" style="font-size: 0pt;">
  <div class="summ"><? echo ($plus + $minus) ?></div>
  <div class="success"><? echo $plus ?></div>
  <div class="warning"><? echo $minus ?></div>
</div>
<script type="text/javascript" src="/MedicalEnglishTest/js/append-percent.js"></script>
<div class="volume">
<?php $summa = $plus + $minus; $percent = 100/$summa*$plus ?>
<?php
 if ($percent >= 90) {
    echo "
    <div class=\"surprise\">
        <div class=\"flip-container\" ontouchstart=\"this.classList.toggle(\'click\');\">
          <div class=\"flipper\">
            <div class=\"front\">
              <div class=\"one-surprise-success\" id=\"id-game-1\">
                <div class=\"background-circle\">
                  <span class=\"fa fa fa fa-paw fa-3x icon-game\"></span>
                </div>
                <div class=\"name-game\">
                  <span class=\"big-letter-name\">Success</span>
                  <span class=\"small-letter-names small-letter-name\"></span>
                </div>
              </div>
            </div>
            <div class=\"back\">
              <div class=\"flip-one-game\">
                <span class=\"small-letter-name center-block padding-left-right\">
                  Good, Let's Continue!<br></span>
                  <div role=\"button\" class=\"result\"><span class=\"small-letter-name center-block padding-left-right\">Result</span></div>
                  <div role=\"button\" class=\"continue\"><span class=\"small-letter-name center-block padding-left-right\">Continue</span></div>
              </div>
            </div>
          </div>
        </div>
    </div>"; }
?>
<?php
 if (($percent > 40) && ($percent < 90)) { echo "
    <div class=\"surprise\">
        <div class=\"flip-container\" ontouchstart=\"this.classList.toggle(\'hover\');\">
          <div class=\"flipper\">
            <div class=\"front\">
              <div class=\"one-surprise-middle\" id=\"id-game-1\">
                <div class=\"background-circle\">
                  <span class=\"fa fa fa fa-paw fa-3x icon-game\"></span>
                </div>
                <div class=\"name-game\">
                  <span class=\"big-letter-name\">Success</span>
                  <span class=\"small-letter-names small-letter-name\"></span>
                </div>
              </div>
            </div>
            <div class=\"back\">
              <div class=\"flip-one-game\">
                <span class=\"small-letter-name center-block padding-left-right\">
                  Good, Let's Continue!<br></span>
                  <div role=\"button\" class=\"result\"><span class=\"small-letter-name center-block padding-left-right\">Result</span></div>
                  <div role=\"button\" class=\"continue\"><span class=\"small-letter-name center-block padding-left-right\">Continue</span></div>
              </div>
            </div>
          </div>
        </div>
    </div>"; }
?>
<?php
 if ($percent < 40) { echo "
    <div class=\"surprise\">
        <div class=\"flip-container\" ontouchstart=\"this.classList.toggle(\'hover\');\">
          <div class=\"flipper\">
            <div class=\"front\">
              <div class=\"one-surprise-bad\" id=\"id-game-1\">
                <div class=\"background-circle\">
                  <span class=\"fa fa fa fa-paw fa-3x icon-game\"></span>
                </div>
                <div class=\"name-game\">
                  <span class=\"big-letter-name\">Success</span>
                  <span class=\"small-letter-names small-letter-name\"></span>
                </div>
              </div>
            </div>
            <div class=\"back\">
              <div class=\"flip-one-game\">
                <span class=\"small-letter-name center-block padding-left-right\">
                  Good, Let's Continue!<br></span>
                  <div role=\"button\" class=\"result\"><span class=\"small-letter-name center-block padding-left-right\">Result</span></div>
                  <div role=\"button\" class=\"continue\"><span class=\"small-letter-name center-block padding-left-right\">Continue</span></div>
              </div>
            </div>
          </div>
        </div>
    </div>"; }
?>
</div>
<div class="cont-result">
  <div role="button" class="resulting"><span class="small-letter-name center-block padding-left-right center-block">Result</span></div>
  <div role="button" class="continuing"><span class="small-letter-name center-block padding-left-right center-block">Continue</span></div>
</div>
<script type="text/javascript" src="/MedicalEnglishTest/js/check.js"></script>
<?php require("../../parts/link-bottom.php"); ?>
</body>
</html>