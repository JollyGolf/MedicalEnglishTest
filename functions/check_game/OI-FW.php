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
require_once __DIR__."/../sql_connect.php";
$data = json_decode($_GET['data'], true);
$plus = 0;
$minus = 0;
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);
}


//echo "Правильных ответов ".$plus." из ".($plus + $minus);
function check_and_print($data)
{
    global $plus;
    global $minus;
    $word = $data['right_word'];
    $id = $data['data_id'];
    $type = $data['type'];
    global $mysqli;
    connectDB();
    $query = $mysqli->query("SELECT * FROM game_1i_4w WHERE id = '$id'");
    while($row = $query->fetch_assoc()){
        $result = $row;
    }

    $words[] = $result['w1'];
    $words[] = $result['w2'];
    $words[] = $result['w3'];
    $words[] = $result['w4'];
    echo"<div class=\"container\">
                <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type\">".$type.",</span><span class=\"type-game\">game_1i_4w,</span></div>
                  <div class=\"choose-word-please\">
                    <div role=\"button\" class=\"one-focus center-block\"><div class=\"space-place\" id=\"delete-media\"></div><img src=\"../../".$result["url"]."\" class=\" img-responsive center-block\" style=\"margin: auto;\"></div>
                    <div class=\"space-place\"></div><div class=\"space-place\"></div>";

    if($word == $result['right_word'])
    {

        $plus++;
        for($i = 0; $i < count($words); $i++)
        {
            if($words[$i] == $result['right_word'])//правильное слово в правильном ответе
            {
                echo"<div style=\"background: green;\" class=\"center-block select-word blue-button one-button oi-fw\" data-id = \"".$result['id']."\">".$words[$i]."</div>
                    <div class=\"space-place\"></div>";
            }
            else //остальные слова
            {
                echo"<div class=\"center-block select-word blue-button one-button oi-fw\" data-id = \"".$result['id']."\">".$words[$i]."</div>
                    <div class=\"space-place\"></div>";
            }

        }

    }
    else
    {
        $minus++;
        for($i = 0; $i < count($words); $i++)
        {
            if($words[$i] == $result['right_word'])//правильное слово в НЕправильном ответе
            {
                echo"<div style=\"background: green;\" class=\"center-block select-word blue-button one-button oi-fw\" data-id = \"".$result['id']."\">".$words[$i]."</div>
                    <div class=\"space-place\"></div>";
            }
            else if($words[$i] == $word)//выбранное слово в НЕправильном ответе
            {
                echo"<div style=\"background: red;\" class=\"center-block select-word blue-button one-button oi-fw\" data-id = \"".$result['id']."\">".$words[$i]."</div>
                    <div class=\"space-place\"></div>";
            }
            else //остальные слова
            {
                echo"<div class=\"center-block select-word blue-button one-button oi-fw\" data-id = \"".$result['id']."\">".$words[$i]."</div>
                    <div class=\"space-place\"></div>";
            }

        }

    }

    echo"      </div>
                  <br>
                  <!--<div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                    <button class=\"btn btn-success btn-lg btn-block FW-FW-left\"><span class=\"fa fa-shower\" style=\"font-size: 17pt;\"></span> <span  style=\"font-size: 17pt;\">Refresh</span></button>
                  </div>-->
                </div>
                <br><div class=\"space-place\" id=\"delete-media\"></div>
                <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                <br><div class=\"space-place\" id=\"delete-media\"></div>";
}

?>
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