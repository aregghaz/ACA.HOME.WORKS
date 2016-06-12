<?php
$input1 = $_GET['input1'];
$input2 = $_GET['input2'];
$input3 = $_GET['input3'];
$input4 = $_GET['input4'];
for ($i=0; $i < $input1; $i++) {
    $DrawMatrix ="<div class='row ' style=' display: inline-block; height: 30px; width: 30px; margin: 5px 5px ' >";
    for ($j=0; $j < $input2; $j++) {
       if ($i==0){
            $DrawMatrix .= "<span class='col-md-1' style='background-color:$input3; display: inline-block;  height: 30px; width: 30px;margin: 5px auto '>";

            $DrawMatrix .= "</span>";
        }

    else if ($j == 0 ) {
            $DrawMatrix .= "<span class='col-md-1' style='background-color:$input3; display: inline-block;  height: 30px; width: 30px;margin: 5px auto '>";

            $DrawMatrix .= "</span>";
        }
    else if ($i== $input1 -1) {
    $DrawMatrix .= "<span class='col-md-1' style='background-color:$input3; display: inline-block;  height: 30px; width: 30px;margin: 5px auto '>";

    $DrawMatrix .= "</span>";
}
    else if ($j == $input2 -1) {
    $DrawMatrix .= "<span class='col-md-1' style='background-color:$input3; display: inline-block;  height: 30px; width: 30px;margin: 5px auto '>";

    $DrawMatrix .= "</span>";
}
else {
    $DrawMatrix .= "<span class='col-md-1' style='background-color:$input4; display: inline-block;  height: 30px; width: 30px;margin: 5px auto '>";

    $DrawMatrix .= "</span>";
}
    }
    
    $DrawMatrix .="</div>";
    echo $DrawMatrix;
}
