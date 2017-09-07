<?php
require_once __DIR__."/sql_connect.php";
function outputGame($type, $count, $table)
{
    global $mysqli;
    connectDB();


    switch($table)
    {
        case 'game_4i_1w':

            $answer = $mysqli->query("SELECT * FROM $table WHERE type = '$type' ORDER  BY rand() LIMIT $count");
            while(($row = $answer->fetch_assoc()) != false )
            {
                $data[] = $row;
            }


            foreach($data as $key=>$value)
            {

                $url[] = explode(" ", $data[$key]["url"]);
            }

            for($i = 0; $i < count($data); $i++)
            {
                echo "<div class=\"container select-image-challange\">
                  <div class=\"select-image-of-four\">";
                for($j = 0; $j < count($url[$i]); $j++) 
                {
                echo "<div role=\"button\" class=\"one-krop one-krop-bg-red btn-check\"><img src=\"../../" . $url[$i][$j] . "\" alt=\"\" class=\"img-responsive image active img-res\">
                    </div>";
                }
                echo"
              <div class=\"btn-block\"></div>
              <div class=\"center-block  select-word blue-button one-button\">".$data[$i]["word"]."</div>
              <div class=\"btn-block\"></div>
              <div class=\"btn-check-clear center-block \" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                <button class=\"btn btn-success btn-lg btn-block FW-FW-left btn-clear\"><span class=\"fa fa-shower\" style=\"font-size: 17pt;\"></span> <span style=\"font-size: 17pt;\">Refresh</span></button><br>
                <br><br><br><br>
              </div>
            </div>
            <div class=\"btn-block btn btn-success disabled\" style=\"cursor: default;\"></div>
            <br><br>
            <?php require(\"parts/link-bottom.php\"); ?>
            </body>
            </html>";
            }
            break;
            //end 1-st case

        case 'game_1i_4w':
            $answer = $mysqli->query("SELECT * FROM $table WHERE type = '$type' ORDER  BY rand() LIMIT $count");
            while(($row = $answer->fetch_assoc()) != false )
            {
                $data[] = $row;
            }

            for($i = 0 ; $i < count($data); $i++)
            {
                echo "<div class=\"container\">
                  <div class=\"choose-word-please\">
                    <div role=\"button\" class=\"one-focus center-block\"><div class=\"space-place\" id=\"delete-media\"></div><img src=\"../../".$data[$i]["url"]."\" class=\" img-responsive center-block\" style=\"margin: auto;\"></div>
                    <div class=\"space-place\"></div><div class=\"space-place\"></div>
                    <div class=\"center-block select-word blue-button one-button\">".$data[$i]["w1"]."</div><div class=\"space-place\"></div>
                    <div class=\"center-block select-word blue-button one-button\">".$data[$i]["w2"]."</div><div class=\"space-place\"></div>
                    <div class=\"center-block select-word blue-button one-button\">".$data[$i]["w3"]."</div><div class=\"space-place\"></div>
                    <div class=\"center-block select-word blue-button one-button\">".$data[$i]["w4"]."</div><div class=\"space-place\"></div>
                  </div>
                  <br>
                  <div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                    <button class=\"btn btn-success btn-lg btn-block FW-FW-left\"><span class=\"fa fa-shower\" style=\"font-size: 17pt;\"></span> <span  style=\"font-size: 17pt;\">Refresh</span></button>
                  </div>
                </div>
                <br><div class=\"space-place\" id=\"delete-media\"></div>
                <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                <br><div class=\"space-place\" id=\"delete-media\"></div>";
            }
            break;
            //end 2-st case

        case 'game_4w_4w':

            $answer = $mysqli->query("SELECT * FROM $table WHERE type = '$type' ORDER  BY rand() LIMIT $count");
            while(($row = $answer->fetch_assoc()) != false )
            {
                $data[] = $row;
            }
            for($i = 0 ; $i < count($data); $i++)
            {
                echo"<div class=\"container\">
                  <span class=\"after-append\"></span>
                  <div class=\"FW-FW\">
                    <div class=\"FW-FW-left\">
                      <div class=\"center-block blue-button one-button left fw-fw\">".$data[$i]['a1']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button left fw-fw\">".$data[$i]['a2']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button left fw-fw\">".$data[$i]['a3']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button left fw-fw\">".$data[$i]['a4']."</div><div class=\"space-place\"></div>
                    </div>
                    <div class=\"FW-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse FW-center\"></span>
                    </div>
                    <div class=\"FW-FW-right\">
                      <div class=\"center-block blue-button one-button right fw-fw\">".$data[$i]['q1']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button right fw-fw\">".$data[$i]['q2']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button right fw-fw\">".$data[$i]['q3']."</div><div class=\"space-place\"></div>
                      <div class=\"center-block blue-button one-button right fw-fw\">".$data[$i]['q4']."</div><div class=\"space-place\"></div>
                    </div>
                  </div><br><br>
                  <!--<div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                    <button class=\"btn btn-success btn-lg btn-block center-block btn-clear\">
                      <span class=\"fa fa-shower\"></span> Refresh
                    </button><br>
                  </div>-->
                  <div class=\"container-fluid info-fw-fw-".$i."\">
                    <div class=\"panel panel-info\">
                      <div class=\"panel-heading\" style=\"font-size: 12pt; text-align: center;\">Select the word on the left side, then select the right word on the right side, then a couple of these words will disappear. Do the same until all the words on the left and right disappear.</div>
                    </div>
                  </div>
                  <div class=\"container-fluid success-fw-fw-".$i."\" style=\"display: none;\">
                    <div class=\"panel panel-success\">
                      <div class=\"panel-heading\" style=\"font-size: 15pt; text-align: center;\"><span class=\"fa fa-arrow-circle-down\"></span> Good! Let's continue <span class=\"fa fa-arrow-circle-down\"></span></div>
                    </div>
                  </div>
                </div>

                <br><br>
                <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                <br><br>
                ";

            }
            break;//end 3-st case

        case 'game_4i_4w':

            $answer = $mysqli->query("SELECT * FROM $table WHERE type = '$type' ORDER  BY rand() LIMIT $count");
            while(($row = $answer->fetch_assoc()) != false )
            {
                $data[] = $row;
            }

            foreach($data as $key=>$value)
            {

                $url[] = explode(" ", $data[$key]["url"]);
                $words[] = explode(",", $data[$key]["words"]);
            }
            for($i = 0; $i < count($data); $i++) {
                echo "   <div class=\"container\">
                          <div class=\"FI-FW\">
                            <div class=\"FI-FW-left\">";

                for ($j = 0; $j < count($url[$i]); $j++) {

                    echo "<div role=\"button\" class=\" one-image\"><img src=\"../../" . $url[$i][$j] . "\" alt=\"\" class=\"img-responsive image small-image\"></div><div class=\"space-place\"></div>";
                }
                echo "</div><div class=\"FI-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse\"></span>
                       </div>";
                echo "<div class=\"FI-FW-right\">";

                for ($j = 0; $j < count($words[$i]); $j++) {

                    echo "<div class=\"select-word one-button\">" . $words[$i][$j] . "</div><div class=\"space-place\"></div>";
                }
                echo " </div>
                      </div>
                      <br><br><br>
                      <div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                        <button class=\"btn btn-success btn-lg btn-block FW-FW-left\"><span class=\"fa fa-shower\"></span> Refresh</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                    </div>
                    <br><br>
                    <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                    <br><br>";
            }



            break; //end 4-st case

    } //end switch

}

?>