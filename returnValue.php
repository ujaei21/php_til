<?php
// 함수의 결과를 돌려받을 때 사용 리턴값 혹은 반환값이라 한다.
function sum($x,$y){
    $total = $x+$y;
    return $total;
}
print "100 + 300 = ".sum(100,300)."</br>";
print "1000 + 3000 = ".sum(1000,3000)."</br>";

?>
