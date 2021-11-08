<?php
//print date('y-m-d');

function getCurrentDate(){
    // Y면 4자리 y면 2자리
    $year = date('Y');
    $month = date('m');
    $day = date('d');
    
    return array($year.$month,$day);
    
}
list($y,$m,$d) = getCurrentDate();

print "현재 날짜는 $y / $m / $d 입니다.</br>";

?>
