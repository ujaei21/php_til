<?php
/* 스위치문 switch 문: 조건식이 많은 경우에 if문 사용시 코드의 직관성이 떨어짐
 *조금 더 간결하게 코드를 작성할 수 있는 방법으로 switch 사용 
 */

/* 사용
 * 조건변수를 이용한다. 선언한다.
 * 조건변수 = "값";
 * switch(조건변수){
 *     case "value1":
 *        처리코드 1;
 *        break;
 *     case "value2":
 *         처리코드2;
 *         break;
 *     default:
 *        처리코드4;  
 */

$jumsu = 77;

$result = (int)($jumsu/10); //형변환 casting

switch($result){
    case 9:
        print "A score";
        break;
    case 8:
        print "B score";
        break;
    case 7:
        print "C score";
        break;
    case 6:
        print "D score";
        break;
    default:
        print "F score";
}

// 자료형(데이터형/변수형): php는 기본 데이터 형을 지원한다.
// (변수형)(변수) ex) (int)($jumsu/10);

/* php의 변수형은 저장된 데이터의 종류에 따라서 정해진다.
 */

$f = 7.8;
$i = (int)$f;

print $i."<br/>";

$ff = (double)$i;
$ll = 7;

print "변수 ff=".$ff."<br/>";
print "변수 ll=".$ll."<br/>";

print "<br/>";
if ($ff === $ll){
    print "변수형과 값이 일치";
}else{
    print "변수형 또는 값이 불일치";
}
?>
