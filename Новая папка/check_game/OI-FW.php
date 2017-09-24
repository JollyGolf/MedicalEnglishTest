<?php
require_once __DIR__."/../sql_connect.php";
$data = json_decode($_GET['data'], true);
$plus = 0;
$minus = 0;
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);
}


echo "Правильных ответов ".$plus." из ".($plus + $minus);
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