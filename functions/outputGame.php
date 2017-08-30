<?php
require_once __DIR__."/sql_connect.php";
function outputGame($type, $count)
{
    global $mysqli;
    connectDB();

    switch($type)
    {
        case '4i_1m':
            $answer = $mysqli->query("SELECT * FROM game_4img_1w");
            while(($row = $answer->fetch_assoc()) != false )
            {
                $data[] = $row;
            }


            foreach($data as $key=>$value)
            {

                $url[] = explode(" ", $data[$key]["url"]);
            }

            for($i = 0; $i < $count; $i++)
            {
                echo "<div class=\"container select-image-challange\">
                  <div class=\"select-image-of-four\">";

                for($j = 0; $j < 4; $j++)
                {
                    echo "<div role=\"button\" class=\"btn btn-success btn-check\"><img src=\"" . $url[$i][$j] . "\" alt=\"\" class=\"img-responsive image active\">
                    <input type=\"checkbox\" class=\"absolute checkbox-FI-OW\"></div>";
                }
                echo"<br><br>
              <div class=\"btn btn-primary btn-lg btn-block select-word\">".$data[$i]["word"]."</div>
              <br><br>
              <div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                <button class=\"btn btn-success btn-lg btn-block FW-FW-left btn-clear\"><span class=\"fa fa-shower\"></span> Clear</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class=\"btn btn-warning btn-lg btn-block FW-FW-right\"><span class=\"fa fa-check-circle\"></span> Check</button>
              </div>
            </div>
            <br><br>
            <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
            <br><br>
            <?php require(\"parts/link-bottom.php\"); ?>
            <script type=\"text/javascript\">
            $('.btn-check').on('click', function() {
                $(this).closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
                $(this).find('input').prop('checked', true);
            });
                $('.btn-clear').on('click', function() {
                $('.btn-check').closest('.select-image-of-four').find('input:checkbox').prop('checked', false);
            });
            </script>
            </body>
            </html>";

            } //end 1-st case


    }

}

?>