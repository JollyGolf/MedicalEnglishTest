<?php
require_once __DIR__."/../sql_connect.php";
$data = json_decode($_GET['data'], true);
$plus = 0;
$minus = 0;
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);
}
echo "Правильно: ".$plus." Не правильно ".$minus;

function check_and_print($data)
{
    $type = $data[0]['type'];
    $id = $data[0]['data_id'];
    $left = [];
    $left[] = $data[0]['l1'];
    $left[] = $data[0]['l2'];
    $left[] = $data[0]['l3'];
    $left[] = $data[0]['l4'];
    // var_dump($left);
    $right = [];
    $right[] = $data[1]['r1'];
    $right[] = $data[1]['r2'];
    $right[] = $data[1]['r3'];
    $right[] = $data[1]['r4'];
    connectDB();
    global $plus;
    global  $minus;
    global $mysqli;
    $query = $mysqli->query("SELECT a1, a2, a3, a4 FROM game_4w_4w WHERE id = '$id'");
    while ($row = $query->fetch_row()) {
        $right_left = $row;
    }

    $query = $mysqli->query("SELECT q1, q2, q3, q4 FROM game_4w_4w WHERE id = '$id'");
    while ($row = $query->fetch_row()) {
        $right_right = $row;
    }

    $array = array_combine($left, $right);
    $right_array = array_combine($right_left, $right_right);

    echo "<div class=\"container\">
                <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type\">" . $type . ",</span><span class=\"type-game\">game_4w_4w,</span></div>
                  <span class=\"after-append\"></span>
                  <div class=\"FW-FW\">
                    <div class=\"FW-FW-left\">";


    if ($array == $right_array) // если выбрано правильно
    {
        for ($i = 0; $i < count($left); $i++) {
            $plus++;
            echo "<div style=\"border: 5px solid darkgreen\" class=\"center-block blue-button one-button left fw-fw\">" . $left[$i] . "</div><div class=\"space-place\"></div>";
        }
        echo "  </div>
                    <div class=\"FW-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse FW-center\"></span>
                    </div>
                    <div class=\"FW-FW-right\">";
        for ($i = 0; $i < count($right); $i++) {
            echo " <div style=\"border: 5px solid darkgreen\" class=\"center-block blue-button one-button right fw-fw\">" . $right[$i] . "</div><div class=\"space-place\"></div>";
        }
    }


    else // если выбрано не правильно
    {
//        var_dump($array);
//        var_dump($right_array);
        $count = 0;
        foreach ($array as $key => $value) {
            foreach ($right_array as $right_key =>  $right_value)
            {
                if($value == $right_value)
                {
                    if($key == $right_key)//green border
                    {
                        $plus++;
                        echo "<div style=\"border: 5px solid darkgreen\" class=\"center-block blue-button one-button left fw-fw\">" . $left[$count] . "</div><div class=\"space-place\"></div>";
                    }
                    else//red border
                    {
                        $minus++;
                        echo "<div style=\"border: 5px solid red\" class=\"center-block blue-button one-button left fw-fw\">" . $left[$count] . "</div><div class=\"space-place\"></div>";
                    }
                }
            }
            $count++;
        }
        echo "  </div>
                    <div class=\"FW-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse FW-center\"></span>
                    </div>
                    <div class=\"FW-FW-right\">";
        $count = 0;
        foreach ($array as $key => $value) {
            foreach ($right_array as $right_key =>  $right_value)
            {
                if($value == $right_value)
                {
                    if($key == $right_key)//green border
                    {
                        echo "<div style=\"border: 5px solid darkgreen\" class=\"center-block blue-button one-button left fw-fw\">" . $right[$count] . "</div><div class=\"space-place\"></div>";
                    }
                    else//red border
                    {
                        echo "<div style=\"border: 5px solid red\" class=\"center-block blue-button one-button left fw-fw\">" . $right[$count] . "</div><div class=\"space-place\"></div>";
                    }
                }
            }
            $count++;
        }

        echo " </div>
                  </div><br><br>
                  <!--<div class=\"btn-check-clear center-block\" id=\"check\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                    <button class=\"btn btn-success btn-lg btn-block center-block btn-clear\">
                      <span class=\"fa fa-shower\"></span> Refresh
                    </button><br>
                  </div>-->
                  <div class=\"container-fluid info-fw-fw-" . $count . "\">
                    <div class=\"panel panel-info\">
                      <div class=\"panel-heading\" style=\"font-size: 12pt; text-align: center;\">Select the word on the left side, then select the right word on the right side, then a couple of these words will disappear. Do the same until all the words on the left and right disappear.</div>
                    </div>
                  </div>
                  <div class=\"container-fluid success-fw-fw-" . $count . "\" style=\"display: none;\">
                    <div class=\"panel panel-success\">
                      <div class=\"panel-heading\" style=\"font-size: 15pt; text-align: center;\"><span class=\"fa fa-arrow-circle-down\"></span> Good! Let's continue <span class=\"fa fa-arrow-circle-down\"></span></div>
                    </div>
                  </div>
                </div>

                <br><br>
                <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                <br><br>
                </div>";



    }
}
