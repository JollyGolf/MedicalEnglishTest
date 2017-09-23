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
<div class="black-back"></div>
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
<?php
require_once __DIR__."/../../functions/sql_connect.php";
$plus = 0;
$minus = 0;
$result = [];
$data = json_decode($_GET['data'], true);
//var_dump($data[0]);
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);

}
//var_dump($result);

function check_and_print($data)
{
    $id = $data['data_id'];
    $type = $data['type'];
    $url = $data['right_url'];
    global $mysqli;
    //global $result;
    global $plus;
    global $minus;
    connectDB();
    $query = $mysqli->query("SELECT * FROM game_4i_1w WHERE id = '$id' AND type = '$type'");
    while ($row = $query->fetch_assoc()) {
        $answer = $row;
    }
   // var_dump($answer);
    $right_url = $answer['right_url'];

        if($url == $right_url)
        {
             $plus++;

            $urls = explode(" ", $answer["url"]);
            //var_dump($urls);
            echo "<div class=\"container select-image-challange\">
                  <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type\">".$type.",</span><span class=\"type-game\">game_4i_1w,</span></div>
                  <div class=\"select-image-of-four ".$type."\">";
            for($j = 0; $j < count($urls); $j++)
            {
                if($urls[$j] == $right_url )//стили для правильной картинки в правильном ответе : добавил id right_in_right
                {
                    echo "<div role=\"button\" style=\"border:5px solid #09ff00;\" id = \"right_in_right\" class=\"one-krop one-krop-bg-red btn-check\" data-id = \"".$answer['id']."\"><img src=\"../../" . $urls[$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }
                else
                {
                    echo "<div role=\"button\" class=\"one-krop one-krop-bg-red btn-check\" data-id = \"".$answer['id']."\"><img src=\"../../" . $urls[$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }


            }

            echo "   
              <div class=\"btn-block\"></div>
              <div class=\"center-block  select-word blue-button one-button\">".$answer["word"]."</div>
              <div class=\"btn-block\"></div>
              <!--
              <div class=\"btn-check-clear center-block \" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                <button class=\"btn btn-success btn-lg btn-block FW-FW-left btn-clear\"><span class=\"fa fa-shower\" style=\"font-size: 17pt;\"></span> <span style=\"font-size: 17pt;\">Refresh</span></button><br>
                <br><br><br><br>
              </div>-->
            </div>
            <div class=\"btn-block btn btn-success disabled\" style=\"cursor: default;\"></div>
            <br><br>
            <?php require(\"parts/link-bottom.php\"); ?>
            </body>
            </html>";


        }
        else{
            $result[] = false;
            $minus++;
            $urls = explode(" ", $answer["url"]);
            //var_dump($urls);
            echo "<div class=\"container select-image-challange\">
                  <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type\">".$type.",</span><span class=\"type-game\">game_4i_1w,</span></div>
                  <div class=\"select-image-of-four ".$type."\">";
            for($j = 0; $j < count($urls); $j++)
            {
                if($urls[$j] == $right_url )//стили для правильной картинки в НЕправильном ответе : добавил id right_in_warning
                {
                    echo "<div role=\"button\" style=\"border:5px solid #09ff00;\" id = \"right_in_warning\" class=\"one-krop one-krop-bg-red btn-check\" data-id = \"".$answer['id']."\"><img src=\"../../" . $urls[$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }
                else if($urls[$j] == $url )//стили для выбраной  картинки в НЕправильном ответе : добавил id checked_in_warning
                {
                    echo "<div role=\"button\" style=\"border:5px solid #ff0000;\" id = \"checked_in_warning\" class=\"one-krop one-krop-bg-red btn-check\" data-id = \"".$answer['id']."\"><img src=\"../../" . $urls[$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }
                else
                {
                    echo "<div role=\"button\" class=\"one-krop one-krop-bg-red btn-check\" data-id = \"".$answer['id']."\"><img src=\"../../" . $urls[$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }


            }

            echo"
              <div class=\"btn-block\"></div>
              <div class=\"center-block  select-word blue-button one-button\">".$answer["word"]."</div>
              <div class=\"btn-block\"></div>
              <!--
              <div class=\"btn-check-clear center-block \" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                <button class=\"btn btn-success btn-lg btn-block FW-FW-left btn-clear\"><span class=\"fa fa-shower\" style=\"font-size: 17pt;\"></span> <span style=\"font-size: 17pt;\">Refresh</span></button><br>
                <br><br><br><br>
              </div>-->
            </div>
            <div class=\"btn-block btn btn-success disabled\" style=\"cursor: default;\"></div>
            <br><br>
            
            ";


        }

}?>
<div class="result-number" style="font-size: 0pt;">
  <div class="summ"><? echo ($plus + $minus) ?></div>
  <div class="success"><? echo $plus ?></div>
  <div class="warning"><? echo $minus ?></div>
</div>
<script type="text/javascript" src="../../js/append-FI-OW.js"></script>
<div class="volume">
<? $summa = $plus + $minus; $percent = 100/$summa*$plus ?>
<?
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
<?
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
<?
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
<script type="text/javascript" src="../../js/FI-OW-check.js"></script>
<?php require("../../parts/link-bottom.php"); ?>
</body>
</html>