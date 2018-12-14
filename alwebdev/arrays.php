<?php
$months = array('January', 'February', 'March');
$days = array(31, 28, 31);
$winterMonths = array(
    "November"=>30, "December"=>31, 
    "January"=>31, "February"=>28
);
var_dump($winterMonths);
function showYear(){
    global $months,$days;
    $strOut = "Months in the year:<br/>";
    for ($m = 0; $m < count($months); $m++){
        $strOut .= $months[$m] . " has " . $days[$m] . " days<br/>";
    }
    return $strOut;
}

function showWinter(){
    global $winterMonths;
    $strOut = "Days in the winter months:<br/>";
    foreach($winterMonths as $k=>$v){
        $strOut .= $v." days in ".$k."<br/>";
    }
    return $strOut;
}
echo showYear()."<br/>".showWinter();
// echo "<br/>";
// echo showWinter();
?>