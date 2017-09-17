<?php
require_once __DIR__."/sql_connect.php";

function outputMissingLetters($type)
{

    global $mysqli;
    connectDB();
    $query = $mysqli->query("SELECT gappy_words, id FROM missing_letters WHERE type = '$type' ORDER  BY rand() LIMIT 1 ");
    while (($row = $query->fetch_assoc()) != false) {
        $data[] = $row;
    }
   $x = str_replace("*", "<input type=\"text\" class=\"input-miss-letter\" id=\"miss-letter-9\">", $data[0]['gappy_words']);
    $gappy_words = explode(",", $x);
    $count_sbstr = substr_count($data[0]['gappy_words'], "*");
   $out = "<div class=\"container title-form-input\">
   <div class=\"reading on array\" style=\"font-size: 0pt;\"><span class=\"type_miss_letter\">".$type.",</span></div>
  <div class=\"panel panel-warning\">
    <div class=\"panel-heading\">Insert into the words the missing letters \"л\" or \"р\".</div>
    <div class=\"panel-body\">";

    for($i = 0; $i < count($gappy_words); $i++)
    {
        if($i < count($gappy_words) - 1)
        {
            $out .= $gappy_words[$i].", ";
        }
        else
        {
            $out .= $gappy_words[$i];
        }

    }
    $out.="</div> <div class=\"panel-footer\">
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-success progress-bar-striped active\" id=\"step-progress-bar\" role=\"progress-bar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
      </div>
    </div>
    <div class=\"btn btn-warning center-block\" role=\"button\" id=\"button-wait\"><span class=\"fa fa-spinner fa-2x fa-pulse\"></span></div>
    <div class=\"btn btn-success center-block\" role=\"button\"  id=\"button-continue\"  style=\"display: none;\"><span class=\"fa fa-check-circle fa-2x\"></span></div><!-- onclick=\"open_letter_section()\" -->
  </div>
  </div>
</div>";

    echo $out;
}
?>