<?php
function person($name,$year){
    print "이름은 $name 입니다. 생일은 $year 입니다.</br>";
}

person("홍길동", "1990.10.10");

function setHeight($minheight){
    print "당신의 키는".$minheight."cm 입니다.</br>";
}

setHeight(170);
setHeight(172);

function setInfo($age,$address){
    print "당신의 나이는 $age 세, 사는 곳은 $address 입니다.</br>";
}

setInfo(20, "부산");

?>
