<?php require "nav-link-result.php" ?>
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
<?php require "result.php"; ?>