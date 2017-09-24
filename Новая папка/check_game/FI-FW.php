<?php
require_once __DIR__."/../sql_connect.php";
$data = json_decode($_GET['data'], true);
$plus = 0;
$minus = 0;
for($i = 0; $i < count($data); $i++)
{
    check_and_print($data[$i]);
}
echo"Правильно: ".$plus." Не правильно: ".$minus;


function check_and_print(array $data)
{
    $id = $data[0]['data_id']; //var_dump($id);
    $type = $data[0]['type'];
    $url[] = $data[0]['url_image_1'];
    $url[] = $data[0]['url_image_2'];
    $url[] = $data[0]['url_image_3'];
    $url[] = $data[0]['url_image_4'];

    $words[] = $data[1]['word_1'];
    $words[] = $data[1]['word_2'];
    $words[] = $data[1]['word_3'];
    $words[] = $data[1]['word_4'];

    connectDB();
    global $mysqli;
    $query= $mysqli->query("SELECT url, words, relation FROM game_4i_4w WHERE id = '$id'");
    while($row = $query->fetch_assoc())
    {
        $right_url = $row['url'];
        $right_words = $row['words'];
        $relation = $row['relation'];
    }
    $right_url = explode(" ", $right_url);
    $right_words = explode(",", $right_words);
   // var_dump($right_url);
//    var_dump($right_words);
    $relation = explode(" ", $relation);
    for($i = 0; $i < count($relation); $i++)
    {
        $relations[] = explode(":", $relation[$i]);
    }
    for($i = 0; $i < count($relations); $i++)
    {
        $left_index[] = trim($relations[$i][0]);
        $right_index[] = trim($relations[$i][1]);
    }
   // var_dump($left_index);
    //var_dump($right_index);
    $ready_url = array_combine($left_index, $right_url);
    //$ready_words = array_combine($right_index, $right_words);
    //var_dump($right_words);
    //var_dump($right_index);
    for($i = 0; $i < count($right_index); $i++)
    {
        $word[] = $right_words[$right_index[$i]];
    }
//var_dump($word);//упорядоченый массив со словами
    $check_array = array_combine($ready_url, $word);
    $array_for_check = array_combine($url, $words);
    //var_dump($check_array);

   // var_dump($array_for_check);

    echo "   <div class=\"container\">
                <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type\">".$type.",</span><span class=\"type-game\">game_4w_4w,</span></div>
                          <div class=\"FI-FW\">
                            <div class=\"FI-FW-left\">";
    global $plus;
    global $minus;

    if($check_array == $array_for_check)
    {
        for ($j = 0; $j < count($url); $j++) {
            $plus++;
            echo "<div style=\"border: 5px solid darkgreen\" role=\"button\" class=\" one-image img-left\"><img src=\"../../" . $url[$j] . "\" alt=\"\" class=\"img-responsive image small-image\"></div><div class=\"space-place\"></div>";
        }
        echo "</div><div class=\"FI-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse\"></span>
                       </div>";
        echo "<div class=\"FI-FW-right\">";
        for ($j = 0; $j < count($words); $j++) {

            echo "<div style=\"border: 5px solid darkgreen\" class=\"select-word one-button word-right\" >" . $words[$j] . "</div><div class=\"space-place\"></div>";
        }

    }

    else
    {
        $count = 0;
        foreach($array_for_check as $key => $value )
        {
            foreach ($check_array as $r_key => $r_value)
            {
                if($value == $r_value)
                {
                    if($key == $r_key)//green border
                    {
                        $plus++;
                        echo "<div style=\"border: 5px solid darkgreen\" role=\"button\" class=\" one-image img-left\"><img src=\"../../" . $url[$count] . "\" alt=\"\" class=\"img-responsive image small-image\"></div><div class=\"space-place\"></div>";

                    }
                    else//red border
                    {
                        $minus++;
                        echo "<div style=\"border: 5px solid red\" role=\"button\" class=\" one-image img-left\"><img src=\"../../" . $url[$count] . "\" alt=\"\" class=\"img-responsive image small-image\"></div><div class=\"space-place\"></div>";

                    }

                }
            }

            $count++;
        }
        echo "</div><div class=\"FI-FW-center\">
                      <span class=\"fa fa-code-fork fa-3x fa-pulse\"></span>
                       </div>";
        echo "<div class=\"FI-FW-right\">";

        $count = 0;
        foreach($array_for_check as $key => $value )
        {
            foreach ($check_array as $r_key => $r_value)
            {
                if($value == $r_value)
                {
                    if($key == $r_key)//green border
                    {


                        echo "<div style=\"border: 5px solid darkgreen\" class=\"select-word one-button word-right\" >" . $words[$count] . "</div><div class=\"space-place\"></div>";

                    }
                    else//red border
                    {


                        echo "<div style=\"border: 5px solid red\" class=\"select-word one-button word-right\" >" . $words[$count] . "</div><div class=\"space-place\"></div>";

                    }

                }
            }
            $count++;
        }








    }


    echo " </div>
                      </div>
                      <br><br><br>
                      <!--<div class=\"btn-check-clear center-block\" style=\"display: flex;flex-direction: row;justify-content: space-around;align-items: center;\">
                        <button class=\"btn btn-success btn-lg btn-block FW-FW-left\"><span class=\"fa fa-shower\"></span> Refresh</button><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </div>
                      -->
                    </div>
                    <br><br>
                    <div class=\"btn btn-danger btn-block disabled\" style=\"cursor: default;\"></div>
                    <br><br>";
}





