<?php
require_once __DIR__."/sql_connect.php";
function outputDialog($name_dialog)
{
    global $mysqli;
    connectDB();

    $query = $mysqli->query("SELECT * FROM dialogs WHERE name = '$name_dialog'");
    while(($row = $query->fetch_assoc()) != false)
    {
        $data[] = $row;
    }
    for($i = 0; $i < count($data); $i++)
    {
            $full_doctor[] = $data[$i]["full_doctor"];
        $array_full_doctor[] = explode("|x", $full_doctor[$i]);
            $full_patient[] = $data[$i]["full_patient"];
        $array_full_patient[] = explode("|x", $full_patient[$i]);
            $reduce_doctor[] = $data[$i]["reduce_doctor"];
        $array_reduce_doctor[] = explode("|x", $reduce_doctor[$i]);
            $reduce_patient[] = $data[$i]["reduce_patient"];
        $array_reduce_patient[] = explode("|x", $reduce_patient[$i]);
    }
    //start full_dialog
    $full_dialog = ""; $doctor = "Лікар: "; $patient = "Пацієнт: ";
    for($j = 0; $j < count($array_full_doctor); $j++)
    {

        for($x = 0; $x < count($array_full_doctor[$j]); $x++)
        {
            if($x < count($array_full_patient[$j])) //доктор всегда начинает диалог, количество реплик у доктора всегда не меньше
                                                    //чем у пациента, если заканчивает доктор то у него реплик больше и нужно проверить
                                                    //окончание диалога на вывод пустой реплики пациента
            {
                $full_dialog .= "<div class=\"panel-body\">".$doctor.$array_full_doctor[$j][$x]."</div>";
                $full_dialog .= "<div class=\"panel-body bg-panel\">".$patient.$array_full_patient[$j][$x]."</div>";
            }
            else
            {
                $full_dialog .= "<div class=\"panel-body\">".$doctor.$array_full_doctor[$j][$x]."</div>";
            }

        }
    }
    $full_dialog.="<div class=\"panel-footer\">
	  <div class=\"progress\">
	  	<div class=\"progress-bar progress-bar-default progress-bar-striped active\" role=\"progress-bar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\" id=\"flex-progress-bar\">
	  	</div>
	  </div>
	<div class=\"btn btn-success center-block\" id=\"button-continue\" onclick=\"closeDialog()\"><span class=\"fa fa-arrow-circle-right fa-2x\"></span></div>
	</div>
  </div>
</div>";
    echo $full_dialog;
//output full_dialog done

//start reduce dialog
    $reduce_dialog = "<div class=\"container title-form-input display-none\" id=\"less-dialog\">
  <div class=\"panel panel-primary\">
    <div class=\"panel-heading\">Insert into the Dialog the missing words.</div>";
    for($j = 0; $j < count($array_reduce_doctor); $j++)
    {

        for($x = 0; $x < count($array_reduce_doctor[$j]); $x++)
        {
            if($x < count($array_reduce_patient[$j])) //доктор всегда начинает диалог, количество реплик у доктора всегда не меньше
                //чем у пациента, если заканчивает доктор то у него реплик больше и нужно проверить
                //окончание диалога на вывод пустой реплики пациента
            {
                $reduce_dialog .= "<div class=\"panel-body\">".$doctor.$array_reduce_doctor[$j][$x]."</div>";
                $reduce_dialog .= "<div class=\"panel-body bg-panel\">".$patient.$array_reduce_patient[$j][$x]."</div>";
            }
            else
            {
                $reduce_dialog .= "<div class=\"panel-body\">".$doctor.$array_reduce_doctor[$j][$x]."</div>";
            }

        }
    }
    //echo $reduce_dialog;
    echo str_replace("*", "<input type=\"text\" class=\"input-dialog\">", $reduce_dialog);

    //end reduce_dialog output


}

?>